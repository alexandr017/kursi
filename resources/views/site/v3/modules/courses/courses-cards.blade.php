<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<div class="kursi_slider_cont_scroll">
    <div
        class="swiper_styles-slider slider_kursi_slider_224a58da6a119cab6c81 kursi_slider_cont bx-blue swiper-initialized swiper-horizontal swiper-backface-hidden"
        id=""
        data-entity=""
    >
        <div class="swiper_styles-wraper swiper-wrapper" id="swiper-wrapper-75d4bfbee56cdc94" aria-live="polite">
            @foreach($courses as $key => $course)
                @if(isset($fromMainPage))
                    @php($class = 'card_white')
                @elseif($key%2 == 0)
                    @php($class = 'card_green')
                @else
                    @php($class = 'card_black')
                @endif
                @include('site.v3.modules.courses.course-card', ['course' => $course, 'class' => $class])
            @endforeach
        </div>

        <div class="swiper_styles-pagination_cont">
            <div class="slider_kursi_slider_e309f8ec3c7c0821e5e9-button-prev swiper_styles-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-c67ef53564e5b9ce" aria-disabled="false"></div>
            <div class="slider_kursi_slider_e309f8ec3c7c0821e5e9-pagination swiper_styles-pagination swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal"><span class="swiper-pagination-current">2</span> / <span class="swiper-pagination-total">15</span></div>
            <div class="slider_kursi_slider_e309f8ec3c7c0821e5e9-button-next swiper_styles-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-c67ef53564e5b9ce" aria-disabled="false"></div>
        </div>
    </div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
</div>

@push('styles')
    <link href="{{ Vite::asset('resources/css/courses/courses-cards.css') }}" rel="stylesheet">
@endpush

{{--@push('scripts')--}}
{{--    <script type="text/javascript" src="{{ Vite::asset('resources/js/courses/courses-cards.js') }}"></script>--}}
{{--@endpush--}}
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    addEventListener("load", () => {
        const swiper_styles_pagination_cont = new Swiper('.slider_kursi_slider_224a58da6a119cab6c81', {
            speed: 400,
            slidesPerView: 'auto',
            navigation: {
                nextEl: '.slider_kursi_slider_e309f8ec3c7c0821e5e9-button-next',
                prevEl: '.slider_kursi_slider_e309f8ec3c7c0821e5e9-button-prev',
            },
            pagination: {
                el: ".slider_kursi_slider_e309f8ec3c7c0821e5e9-pagination",
                type: "fraction",
            },
        });
    });
</script>
