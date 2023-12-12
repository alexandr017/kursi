let cardReviews = document.querySelectorAll('.card-review');

if (cardReviews !== null) {
    cardReviews.forEach((cardReview) => {
        let btnOpenCardReview = cardReview.querySelector('.card-review_btn');
        let cardTextReview = cardReview.querySelector('.card-review_body-text');
        let btnMobOpenReview = cardReview.querySelector('.card-review-mob_btn');
        if (btnOpenCardReview && cardTextReview) {
            btnOpenCardReview.addEventListener('click', () => {
                cardTextReview.classList.toggle('open');
                if (cardTextReview.classList.contains('open')) {
                    btnOpenCardReview.innerHTML = 'Свернуть';
                } else {
                    btnOpenCardReview.innerHTML = 'Читать';
                    if(document.documentElement.clientWidth <= 767){
                        changeDesignBtnReview();
                    }
                }
            });
            btnMobOpenReview.addEventListener('click', () => {
                cardReview.classList.toggle('card-review_mob-open');
                cardTextReview.classList.toggle('open');
                if (cardTextReview.classList.contains('open')) {
                    btnMobOpenReview.innerHTML = 'Свернуть';
                } else {
                    btnMobOpenReview.innerHTML = 'Читать';
                    if(document.documentElement.clientWidth <= 767){
                        changeDesignBtnReview();
                    }
                }
            });
        }
    });
}

window.addEventListener('DOMContentLoaded', function () {
    if (cardReviews !== null) {
        changeDesignBtnReview();
    }
});

window.addEventListener('resize', ()=>{
    if (cardReviews !== null) {
        cardReviews.forEach((cardReview) => {
            cardReview.classList.remove('card-review_mob-open');
            cardReview.querySelector('.card-review_body-text').classList.remove('open');
        });
    }
    changeDesignBtnReview();
});

function changeDesignBtnReview() {
    let isMobScreen = document.documentElement.clientWidth <= 767;
    cardReviews.forEach((cardReview) => {
        let btnOpenCardReview = cardReview.querySelector('.card-review_btn');
        let btnMobOpenReview = cardReview.querySelector('.card-review-mob_btn');
        let cardTextReview = cardReview.querySelector('.card-review_body-text');
        if (isMobScreen) {
            btnOpenCardReview.classList.add('hidden');
            btnMobOpenReview.classList.remove('hidden');
            if (cardReview.offsetHeight < 260) {
                btnMobOpenReview.classList.add('hidden');
                cardTextReview.classList.add('card-review_text-short');
            }
        } else {
            btnOpenCardReview.classList.remove('hidden');
            btnMobOpenReview.classList.add('hidden');
            if (cardReview.offsetHeight < 244) {
                btnOpenCardReview.classList.add('hidden');
                cardTextReview.classList.add('card-review_text-short');
            }
        }
    });
}
