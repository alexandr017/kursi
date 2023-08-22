// Get the card containers
const cardContainers = document.querySelectorAll('.kursi_slider-cont');
// Current index and page of the displayed card group
let currentIndex = 0;
const currentPage = document.getElementById('current-page');

const nextButton = document.querySelector('.slider_kursi_slider_970728d78bc2c2a36f99-button-next');
const prevButton = document.querySelector('.slider_kursi_slider_970728d78bc2c2a36f99-button-prev');

function showNextCards() {
    if (nextButton.attributes['aria-disabled'].value === 'true') return;

    cardContainers[currentIndex].classList.add('swiper-slide-pasive');
    currentIndex++;
    currentPage.innerHTML = currentIndex + 1;

    if (currentIndex + 4 === cardContainers.length) {
    nextButton.attributes['aria-disabled'].value = 'true';
    nextButton.classList.add('swiper-button-disabled');
}

    if (prevButton.attributes['aria-disabled'].value === 'true') {
        prevButton.attributes['aria-disabled'].value = 'false';
        prevButton.classList.remove('swiper-button-disabled');
    }
}

function showPrevCards() {
    if (prevButton.attributes['aria-disabled'].value === 'true') return;

    cardContainers[currentIndex - 1].classList.remove('swiper-slide-pasive');
    currentIndex--;
    currentPage.innerHTML = currentIndex + 1;

    if (nextButton.attributes['aria-disabled'].value === 'true') {
        nextButton.attributes['aria-disabled'].value = 'false';
        nextButton.classList.remove('swiper-button-disabled');
    }

    if (currentIndex <= 0) {
        prevButton.attributes['aria-disabled'].value = 'true';
        prevButton.classList.add('swiper-button-disabled');
    }
}
