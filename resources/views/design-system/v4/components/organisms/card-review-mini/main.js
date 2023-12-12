let cardReviews = document.querySelectorAll('.card-review-md');

if (cardReviews !== null) {
    cardReviews.forEach((cardReview) => {
        cardReview.addEventListener('click', () => {
            if(!cardReview.classList.contains('open')){
                openReview(cardReview);
            }
        });
    });
}

window.addEventListener('DOMContentLoaded', function () {
    if (cardReviews !== null) {
        setDesignBtnReview();
    }
});

function setDesignBtnReview() {
    cardReviews.forEach((cardReview) => {
        let cardTextReview = cardReview.querySelector('.card-review-md_body-text');
        let btnOpenReview = cardReview.querySelector('.card-review-md_btn');
        if (cardTextReview.offsetHeight < 120) {
            btnOpenReview.classList.add('inline');
            cardTextReview.classList.add('short');
        }
    });
}

function openReview(e) {
    const className = 'card-review-md';

    let bg = document.createElement("div");
    bg.className = "card-review-md-cont_bg active";
    bg.addEventListener('click', (evt)=>closeReviewModal(evt, bg));
    let clone = e.cloneNode(true);

    // очистка атрибутов/стилей слайдера swiper
    clone.classList.remove(...[...clone.classList].filter(n => n !== className));
    clone.removeAttribute("style");

    clone.classList.add('open');
    clone.querySelector('.card-review-md_date').classList.remove('hidden');
    clone.querySelector('.btn-close-review').classList.remove('hidden');
    clone.querySelector('.card-review_logo-m').classList.remove('hidden');
    clone.querySelector('.card-review_logo-s').classList.add('hidden');
    clone.querySelector('.card-review-md_title').classList.add('h4-desk');
    clone.querySelector('.card-review-md_name-date').classList.remove('h-body-small');
    clone.querySelector('.card-review-md_name-date').classList.add('h-body-md');

    bg.appendChild(clone);
    document.body.appendChild(bg);
}

function closeReviewModal(evt, bg) {
    let target = evt.target;
    let isBtnClose = target.closest('.btn-close-review');
    if(!target.closest('.card-review-md.open') || isBtnClose){
        bg.remove();
    }
}

