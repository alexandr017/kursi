let topLinksBlock = document.querySelector('.top-links');
if(topLinksBlock!==null) {
    window.topLinkslider = '';
    let topLinksSliderBlock = document.querySelector('.top-links-wrapper');
    let btnOpenTopLinks = document.querySelector('.tag-btn-more');
    let btnCloseTopLinks = document.querySelector('.tag-btn-close');

    btnOpenTopLinks.addEventListener('click', ()=>{
        btnOpenTopLinks.classList.add('hidden');
        btnCloseTopLinks.classList.remove('hidden');
        topLinksBlock.classList.add('open');
    });
    btnCloseTopLinks.addEventListener('click', ()=>{
        btnOpenTopLinks.classList.remove('hidden');
        btnCloseTopLinks.classList.add('hidden');
        topLinksBlock.classList.remove('open');
    });

    document.addEventListener('DOMContentLoaded', () => {
        if(window.innerWidth < 1024){
            initSlider();
        }
    });

    window.addEventListener('resize', () => {
        if(window.innerWidth > 1023){
            topLinksSliderBlock.classList.contains('swiper') ? sliderDisable() : '';
        } else {
            !topLinksSliderBlock.classList.contains('swiper') ? initSlider() : '';
        }
    });

    function sliderDisable() {
        let topLinksSliderBlock = document.querySelector('.top-links-wrapper.swiper');
        let wrapperSlider = document.querySelector('.slider-wrapper');
        let slides = document.querySelectorAll('.top-links-wrapper .tag');

        if(window.topLinkslider instanceof Swiper){

            window.topLinkslider.setProgress(0, 0.2);
            topLinksSliderBlock.style.transform = 'translate3d(0px,0px,0px)';
            window.topLinkslider.disable();

            topLinksSliderBlock.classList.remove('swiper');
            wrapperSlider.classList.remove('swiper-wrapper');
            slides.forEach((slide) => {
                if(slide.classList.contains('tag-btn-close')){
                    wrapperSlider.append(slide);
                }
                slide.classList.remove('swiper-slide');
                slide.classList.remove(...[...slide.classList].filter(n => ((n !== 'tag') && (n !== 'tag-btn-close') )));
                slide.removeAttribute("style");
            });
        }
    }
}

function initSlider(){
    let btnOpenTopLinks = document.querySelector('.tag-btn-more');
    let btnCloseTopLinks = document.querySelector('.tag-btn-close');
    let topLinksSliderBlock = document.querySelector('.top-links-wrapper');
    let wrapperSlider = document.querySelector('.slider-wrapper');
    let slides = document.querySelectorAll('.top-links-wrapper .tag');

    btnOpenTopLinks.classList.remove('hidden');
    btnCloseTopLinks.classList.add('hidden');
    topLinksBlock.classList.remove('open');

    topLinksSliderBlock.classList.add('swiper');
    wrapperSlider.classList.add('swiper-wrapper');
    slides.forEach((slide)=>{
        slide.classList.add('swiper-slide');
    });

    window.topLinkslider = new Swiper(topLinksSliderBlock, {
        loop: true,
        breakpoints: {
            320: {
                slidesPerView: 'auto',
                spaceBetween: 8
            },
        }
    });
}
