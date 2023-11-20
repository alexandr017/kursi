@if(isset($entityType) && isset($entityId))
    @push('styles')
        <link href="{{ Vite::asset('resources/css/listing/rating_stars.css') }}" rel="stylesheet">
    @endpush

    <div class="universalrating" id="ratingForm" data-entity-type="{{$entityType}}" data-entity-id="{{$entityId}}">
        <div class="universalrating-title">Информация была полезна?</div>

        <div class="universalrating-form">
            <form>
                <div id="half-stars-example" class="disabled">
                    <div class="rating-group">
                        <input class="rating__input rating__input--none" checked name="rating" id="rating-0" value="0" type="radio">
                        <label aria-label="0 stars" class="rating__label" for="rating-0"></label>


                        <label aria-label="0.5" class="rating__label rating__label--half" for="rating-0.5">
                            <div class="star-left"></div>
                            <i class="rating__icon rating__icon--star fa fa-star-half"></i>
                        </label>
                        <input class="rating__input" name="rating" id="rating-0.5" value="0.5" type="radio" disabled  >

                        <label aria-label="1" class="rating__label " for="rating-1">
                            <div class="star-right"></div>
                            <i class="rating__icon rating__icon--star fa fa-star"></i>
                        </label>
                        <input class="rating__input" name="rating" id="rating-1" value="1" type="radio" disabled  >

                        <label aria-label="1.5" class="rating__label rating__label--half" for="rating-1.5">
                            <div class="star-left"></div>
                            <i class="rating__icon rating__icon--star fa fa-star-half"></i>
                        </label>
                        <input class="rating__input" name="rating" id="rating-1.5" value="1.5" type="radio" disabled  >

                        <label aria-label="2" class="rating__label " for="rating-2">
                            <div class="star-right"></div>
                            <i class="rating__icon rating__icon--star fa fa-star"></i>
                        </label>
                        <input class="rating__input" name="rating" id="rating-2" value="2" type="radio" disabled  >

                        <label aria-label="2.5" class="rating__label rating__label--half" for="rating-2.5">
                            <div class="star-left"></div>
                            <i class="rating__icon rating__icon--star fa fa-star-half"></i>
                        </label>
                        <input class="rating__input" name="rating" id="rating-2.5" value="2.5" type="radio" disabled  >

                        <label aria-label="3" class="rating__label " for="rating-3">
                            <div class="star-right"></div>
                            <i class="rating__icon rating__icon--star fa fa-star"></i>
                        </label>
                        <input class="rating__input" name="rating" id="rating-3" value="3" type="radio" disabled  >

                        <label aria-label="3.5" class="rating__label rating__label--half" for="rating-3.5">
                            <div class="star-left"></div>
                            <i class="rating__icon rating__icon--star fa fa-star-half"></i>
                        </label>
                        <input class="rating__input" name="rating" id="rating-3.5" value="3.5" type="radio" disabled  >

                        <label aria-label="4" class="rating__label " for="rating-4">
                            <div class="star-right"></div>
                            <i class="rating__icon rating__icon--star fa fa-star"></i>
                        </label>
                        <input class="rating__input" name="rating" id="rating-4" value="4" type="radio" disabled  >

                        <label aria-label="4.5" class="rating__label rating__label--half" for="rating-4.5">
                            <div class="star-left"></div>
                            <i class="rating__icon rating__icon--star fa fa-star-half"></i>
                        </label>
                        <input class="rating__input" name="rating" id="rating-4.5" value="4.5" type="radio" disabled  >

                        <label aria-label="5" class="rating__label " for="rating-5">
                            <div class="star-right"></div>
                            <i class="rating__icon rating__icon--star fa fa-star"></i>
                        </label>
                        <input class="rating__input" name="rating" id="rating-5" value="5" type="radio" disabled checked >
                    </div>
                </div>

            </form>
        </div>
        <div class="universalrating-total">
            <p>
                <span class="quantity">{{$ratingCount}}</span> оценок, среднее <span class="rating">{{$ratingValue}}</span> из 5
            </p>
        </div>
    </div>
@endif

@section('additional-scripts')

<script>
    let entityId = @json($entityId);
    let entityType = @json($entityType);

    const ratingGroup = document.querySelector('#half-stars-example .rating-group');
    const ratingLabels = ratingGroup.querySelectorAll('.rating__label');

    ratingLabels.forEach((label, index) => {
        label.addEventListener('mouseover', () => {
            const labelsBeforeTarget = Array.from(ratingLabels).slice(0, index + 1);
            ratingLabels.forEach(label => label.classList.remove('hovered'));
            labelsBeforeTarget.forEach(label => label.classList.add('hovered'));
        });

        ratingGroup.addEventListener('mouseout', resetShowRating);

        label.addEventListener('mousedown', handleSendRating)
    });

    function resetShowRating() {
        ratingLabels.forEach(label => label.classList.remove('hovered'));
    }

    function handleSendRating(evt) {
        let rate = evt.target.parentElement.attributes["aria-label"].nodeValue;
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('/fetch/rating/add-vote', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify({
                rating_value: rate,
                entity_id: entityId,
                entity_type: entityType,
            }),
        })
            .then(response => response.text())
            .then(data => {
                let block = document.getElementById('ratingForm')
                block.innerHTML = data;

                const labels = document.querySelectorAll('.rating__label')
                labels.forEach(function (label) {
                    if (label.getAttribute('aria-label') <= rate) {
                        label.classList.add('hovered')
                    }
                })

            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
</script>

@endsection
