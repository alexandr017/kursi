<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<div class="swiper_styles-slider articles-slider-cont slider_person_slider_ccff94d72d7cd84ac997 swiper-initialized swiper-horizontal">
    <div class="articles-slider-list swiper_styles-wraper swiper-wrapper" aria-live="polite">
        @foreach($posts as $post)
            <div class="swiper_styles-item articles_slider-slide swiper-slide swiper-slide-active" role="group" aria-label="1 / 16">
                @include('site.v3.modules.post.post-card', ['post' => $post])
            </div>
        @endforeach
    </div>

    <div class="swiper_styles-pagination_cont">
        <div class="slider_person_slider_c5a6924b0322cee939df-button-prev swiper_styles-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="person_slider_c5a6924b0322cee939df" aria-disabled="true"></div>
        <div class="slider_person_slider_c5a6924b0322cee939df-pagination swiper_styles-pagination swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">16</span></div>
        <div class="slider_person_slider_c5a6924b0322cee939df-button-next swiper_styles-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="person_slider_c5a6924b0322cee939df" aria-disabled="false"></div>
    </div>

    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
</div>

@push('styles')
    <link href="{{ Vite::asset('resources/css/mainpage/mainpage-posts.css') }}" rel="stylesheet">
@endpush

{{--@push('scripts')--}}
{{--    <script type="text/javascript" src="{{ Vite::asset('resources/js/courses/courses-cards.js') }}"></script>--}}
{{--@endpush--}}

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    addEventListener("load", () => {
        new Swiper('.articles-slider-cont', {
            speed: 400,
            slidesPerView: 'auto',
            navigation: {
                nextEl: '.slider_person_slider_c5a6924b0322cee939df-button-next',
                prevEl: '.slider_person_slider_c5a6924b0322cee939df-button-prev',
            },
            pagination: {
                el: ".slider_person_slider_c5a6924b0322cee939df-pagination",
                type: "fraction",
            },
        });
    });
</script>
