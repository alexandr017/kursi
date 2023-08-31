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
            <div class="slider_section_slider_82d0336cbb0c2e994246-button-prev swiper_styles-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-51f202c934c9d9d8" aria-disabled="true"></div>
            <div class="slider_section_slider_82d0336cbb0c2e994246-button-next swiper_styles-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-51f202c934c9d9d8" aria-disabled="false"></div>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>


</div>

@push('styles')
    <link href="{{ Vite::asset('resources/css/mainpage/mainpage-categories.css') }}" rel="stylesheet">
@endpush