<h2 class="index_subtitle news">Наша история</h2>

<div class="about_hystory-container">
    <div
        class="about_hystory-cont swiper_styles-slider swiper-initialized swiper-horizontal swiper-backface-hidden"
    >
        <div
            class="about_hystory-items swiper_styles-wraper swiper-wrapper"
            id="swiper-wrapper-efe910148e978b49a"
            aria-live="polite"
        >
            @foreach($histories as $history)
                <div
                    class="about_hystory-item_cont history-item-container swiper-slide swiper-slide-active"
                    role="group"
                    aria-label="1 / 5"
                    style="width: 1000px"
                >
                    <div class="about_hystory-main_img_cont">
                        <img src="{{$history->main_preview}}" alt="История Курсы.ру" title="История Курсы.ру">
                    </div>
                    <div class="about_hystory-info_cont">
                        <div class="about_hystory-mini_img">
                            <img src="{{$history->mini_preview}}" alt="История Курсы.ру" title="История Курсы.ру">
                        </div>
                        <div class="about_hystory-item_text">
                            {{$history->content}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

        <div class="swiper_styles-pagination_cont">
            <div class="about_hystory-cont-button-prev swiper_styles-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-efe910148e978b49a" aria-disabled="true"></div>
            <div class="about_hystory-cont-button-next swiper_styles-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-efe910148e978b49a" aria-disabled="false"></div>
        </div>
</div>

@push('styles')
    <link href="{{ Vite::asset('resources/css/history/history.css') }}" rel="stylesheet">
@endpush

<script>
    addEventListener("load", (event) => {
        const swiper_about_hystory = new Swiper('.about_hystory-cont', {
            speed: 400,
            slidesPerView: 1,
            spaceBetween: 100,
            navigation: {
                nextEl: '.about_hystory-cont-button-next',
                prevEl: '.about_hystory-cont-button-prev',
            },
        });
    });
</script>
