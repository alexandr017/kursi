<div class="swiper_styles-slider mainpage-reviews-slider slider_review_slider_724199e43a08fd4d6a79 review_slider_cont_scroll swiper-initialized swiper-horizontal">

    <div class="swiper_styles-wraper swiper-wrapper review_slider_cont bx-blue" id="review_slider_724199e43a08fd4d6a79" data-entity="container-19" aria-live="polite">
        <!-- items-container -->
        @foreach($reviews as $review)
            <div class="swiper_styles-item review_slider-item swiper-slide swiper-slide-active" style="/*width:330px*/" role="group" aria-label="1 / 16">
                @include('site.v3.modules.company-reviews.company-review', ['review' => $review, 'company' => $company ?? $review->company])
            </div>
        @endforeach

    </div>

    <div class="swiper_styles-pagination_cont">
        <div class="slider_review_slider_724199e43a08fd4d6a79-button-prev swiper_styles-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="review_slider_724199e43a08fd4d6a79" aria-disabled="true"></div>
        <div class="slider_review_slider_724199e43a08fd4d6a79-pagination swiper_styles-pagination swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">{{$reviews->count()}}</span></div>
        <div class="slider_review_slider_724199e43a08fd4d6a79-button-next swiper_styles-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="review_slider_724199e43a08fd4d6a79" aria-disabled="false"></div>
    </div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
</div>

@push('styles')
    <link href="{{ Vite::asset('resources/css/mainpage/mainpage-reviews.css') }}" rel="stylesheet">
@endpush

<script>
    addEventListener("load", () => {
        new Swiper('.mainpage-reviews-slider', {
            speed: 400,
            slidesPerView: 'auto',
            navigation: {
                nextEl: '.slider_review_slider_724199e43a08fd4d6a79-button-next',
                prevEl: '.slider_review_slider_724199e43a08fd4d6a79-button-prev',
            },
            pagination: {
                el: ".slider_review_slider_724199e43a08fd4d6a79-pagination",
                type: "fraction",
            },
        });
    });
</script>

