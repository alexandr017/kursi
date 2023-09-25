<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<div class="catalog-section-list-cont">
    <div class="catalog_section_list-title_cont">
        <div class="catalog_section_list-title">
            Категории
        </div>
        <div class="catalog_section_list-subtitle">
            Выбери то, что тебе нравится
        </div>
    </div>

    <div class="catalog-section-list swiper_styles-slider slider_section_slider_82d0336cbb0c2e994246 swiper-initialized swiper-horizontal">
        <ul class="first_lvl swiper_styles-wraper swiper-wrapper" id="swiper-wrapper-51f202c934c9d9d8" aria-live="polite">
            @foreach($listings as $listing)
                @include('site.v3.modules.mainpage.mainpage-category-item', ['listing' => $listing])
            @endforeach
        </ul>

        <div class="swiper_styles-pagination_cont">
            <div class="slider_section_slider_aaa1818d7ab807d28bc3-button-prev swiper_styles-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-2721e96c8883337e" aria-disabled="false"></div>
            <div class="slider_section_slider_aaa1818d7ab807d28bc3-button-next swiper_styles-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-2721e96c8883337e" aria-disabled="false"></div>
        </div>

        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
</div>

@push('styles')
    <link href="{{ Vite::asset('resources/css/mainpage/mainpage-categories.css') }}" rel="stylesheet">
@endpush

{{--@push('scripts')--}}
{{--    <script type="text/javascript" src="{{ Vite::asset('resources/js/courses/courses-cards.js') }}"></script>--}}
{{--@endpush--}}

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    addEventListener("load", () => {
        const catalog_section_list = new Swiper('.catalog-section-list', {
            speed: 400,
            slidesPerView: 'auto',
            navigation: {
                nextEl: '.slider_section_slider_aaa1818d7ab807d28bc3-button-next',
                prevEl: '.slider_section_slider_aaa1818d7ab807d28bc3-button-prev',
            }
        });
    });
</script>
