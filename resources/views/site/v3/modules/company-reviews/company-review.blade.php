<label class="review_card-sect_btn review-card" for="read_more_{{ $review->id }}">
    <div class="review_card-cont">
        <div class="review_card-header">
            <div class="review_card-school">
                <div class="review_card-school_logo">
                    <img src="{{$company->logo}}" alt="Учебный Центр «Специалист»" title="Отзыв от: Женя Проскурин">
                </div>
                <div class="review_card-school_info">
                    <a class="review_card-school_name" href="{{linkWithSlash($company->url?->url)}}">
                        {{$company->h1}}
                    </a>
                    <div class="review_card-school_rating">
                        <div class="review_card-school_rating_value">
                            {{$review->rating}}
                        </div>
                        <div class="review_card-school_stars">
                            @for($i = 0; $i < ($review->rating/0.5); $i++)
                                @if($i%2 < 1)
                                    <img src="/images/rating/LeftBlue.svg" alt="Рейтинг онлайн-школы" title="Рейтинг онлайн-школы">
                                @else
                                    <img src="/images/rating/RightBlue.svg" alt="Рейтинг онлайн-школы" title="Рейтинг онлайн-школы" class="rating-right_star">
                                @endif
                            @endfor

                            @for($i = 0; $i < ((5-$review->rating)/0.5); $i++)
                                @if($i%2 < 1)
                                    <img src="/images/rating/LeftGray.svg" alt="Рейтинг онлайн-школы" title="Рейтинг онлайн-школы">
                                @else
                                    <img src="/images/rating/RightGray.svg" alt="Рейтинг онлайн-школы" title="Рейтинг онлайн-школы" class="rating-right_star">
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <div class="review_card-right_cont">
                <div class="review_card-date">
                    {{$review->created_at?->locale('ru')->isoFormat('D MMMM Y')}}
                </div>
                <div class="review_card-author">
                    {{$review->author_name}}
                </div>
            </div>
        </div>

        <input type="checkbox" id="read_more_{{ $review->id }}" name="" value="" onchange="openReview(this)">

        <label class="review_card-pc_close" for="read_more_{{ $review->id }}">
            <img
                src="/v3/images/close.svg"
                class="review_card-pc_close-default"
                alt="Закрыть"
            >
            <img
                src="/v3/images/rCloseHover.svg"
                class="review_card-pc_close-hover"
                alt="Закрыть"
            >
        </label>

        <div class="review_card-data">
            <div class="review_card-sect">
                <div class="review_card-sect_title">
                    Плюсы:
                </div>
                <div class="review_card-sect_value">
                    {!! $review->pluses ?? '-' !!}
                </div>
            </div>

            <div class="review_card-sect">
                <div class="review_card-sect_title">
                    Минусы:
                </div>
                <div class="review_card-sect_value">
                    {!! $review->minuses !!}
                </div>
            </div>

            <div class="review_card-sect">
                <div class="review_card-sect_title">
                    Комментарий:
                </div>
                <div class="review_card-sect_value">
                    {!! $review->content !!}
                </div>
            </div>
        </div>

        <label class="review_card-sect_btn" for="read_more_{{ $review->id }}" id="read-all">Читать полностью</label>
    </div>
</label>
@push('styles')
    <link href="{{ Vite::asset('resources/css/company/company-review.css') }}" rel="stylesheet">
@endpush

{{--@push('scripts')--}}
{{--    <script type="text/javascript" src="{{ Vite::asset('resources/js/company/company-review.js') }}"></script>--}}
{{--@endpush--}}

<script>
    function openReview(e) {
        if (e.id === "read_more_open") {
            let id = e.parentNode.querySelector("input[type='checkbox']").dataset.parent_id;

            e.parentNode.parentNode.remove();

            document.getElementById(id).dataset.open = "";
            document.body.parentNode.style.overflowY = "unset";

        } else {
            if ( e.dataset.open !== "true" ) {
                e.dataset.open = "true";

                let bg = document.createElement("label");
                bg.className = "review_card-cont_bg";
                bg.setAttribute('for', "read_more_open");

                let clone = e.parentElement.cloneNode(true);
                clone.classList.add('open');
                clone.classList.add('dop_open');

                clone.querySelector("input[type='checkbox']").id="read_more_open";
                clone.querySelector("input[type='checkbox']").dataset.parent_id=e.id;
                clone.querySelectorAll("label").forEach((item, i) => {
                    item.setAttribute('for', "read_more_open");
                });
                clone.querySelector('#read-all').remove();

                bg.appendChild(clone);

                if(document.body.clientWidth <= 860){
                    document.body.parentNode.style.overflowY = "hidden";
                }

                document.body.appendChild(bg);
            }
        }
    }

    function handleCategoryItems(event) {
        event.target.parentElement.querySelector('#category-items-second-part').style.display = event.target.checked ? 'block' : 'none';
    }

</script>
