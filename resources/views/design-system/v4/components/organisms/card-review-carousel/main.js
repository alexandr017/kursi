let reviewCarousel = document.querySelector('.card-review-carousel.swiper');
let carouselContainer = document.querySelector('.review-carousel-block');
let carouselTitle = document.querySelector('.review-carousel-title');

if(reviewCarousel!==null && carouselContainer!==null){
    const swiper = new Swiper(reviewCarousel, {
        loop: true,
        navigation: {
            nextEl: '.review-carousel-block .btn-prev',
            prevEl: '.review-carousel-block .btn-next',
        },
        breakpoints: {
            320: {
                slidesPerView: 'auto',
                spaceBetween: 12
            },
            768: {
                slidesPerView: 'auto',
                spaceBetween: 16
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 16
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 16
            }
        }
    });

    window.addEventListener('DOMContentLoaded', function () {
        hideContainer();
    });

    window.addEventListener('resize', ()=>{
        hideContainer();
    });
}

function hideContainer(){
    if(document.documentElement.offsetWidth < 1024) {
        carouselContainer.classList.remove('container');
        carouselTitle.classList.add('container');
    } else {
        carouselContainer.classList.add('container');
        carouselTitle.classList.remove('container');
    }
}
