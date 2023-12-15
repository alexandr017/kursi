window.addEventListener('load', ()=>{
    let courseCarousel = document.querySelector('.card-course-carousel.swiper');
    let courseCarouselContainer = document.querySelector('.course-carousel-block');
    let courseCarouselTitle = document.querySelector('.course-carousel-title');

    if(courseCarousel!==null && courseCarouselContainer!==null){
        const courseCarouselSwiper = new Swiper(courseCarousel, {
            loop: true,
            navigation: {
                nextEl: '.course-carousel-block .btn-prev',
                prevEl: '.course-carousel-block .btn-next',
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
            courseCarouselContainer.classList.remove('container');
            courseCarouselTitle.classList.add('container');
        } else {
            courseCarouselContainer.classList.add('container');
            courseCarouselTitle.classList.remove('container');
        }
    }

});

