<div class="kursi_slider_cont_scroll   ">

    <div class="swiper_styles-slider slider_kursi_slider_224a58da6a119cab6c81 kursi_slider_cont bx-blue swiper-initialized swiper-horizontal swiper-backface-hidden" id="" data-entity="">
        <div class="swiper_styles-wraper swiper-wrapper" id="swiper-wrapper-75d4bfbee56cdc94" aria-live="polite">

            @foreach($courses as $key => $course)
                @if($key%2 == 0)
                    @php($class = 'card_green')
                @else
                    @php($class = 'card_black')
                @endif
                @include('site.v3.modules.courses.course-card', ['course' => $course, 'class' => $class])
            @endforeach

            </div>

        <div class="swiper_styles-pagination_cont">
            <div class="slider_kursi_slider_970728d78bc2c2a36f99-button-prev swiper_styles-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-32741108d34487f14" aria-disabled="true"></div>
            <div class="slider_kursi_slider_970728d78bc2c2a36f99-pagination swiper_styles-pagination swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">{{$courses->count()}}</span></div>
            <div class="slider_kursi_slider_970728d78bc2c2a36f99-button-next swiper_styles-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-32741108d34487f14" aria-disabled="false"></div>
        </div>

    </div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
</div>

@push('styles')
    <link href="{{ Vite::asset('resources/css/courses/courses-cards.css') }}" rel="stylesheet">
@endpush

<script>
    // Get the card containers and the next button
    const cardContainers = document.querySelectorAll('.kursi_slider-cont');
    console.log(cardContainers);
    const nextButton = document.querySelector('.slider_kursi_slider_970728d78bc2c2a36f99-button-next');

    let currentIndex = 0; // Current index of the displayed card group

    // Show the next set of cards when the Next button is clicked
    nextButton.addEventListener('click', () => {
        console.log(cardContainers, 'hajord');
        cardContainers[currentIndex].classList.add('swiper-slide-pasive');
        cardContainers[currentIndex].classList.remove('swiper-slide-active');
        currentIndex = (currentIndex + 1) % cardContainers.length;
        cardContainers[currentIndex].classList.add('swiper-slide-active');
    });

    // Show the initial set of cards (first 4 cards)
    for (let i = 0; i < 4; i++) {
        cardContainers[i].classList.add('swiper-slide-active');
    }

</script>