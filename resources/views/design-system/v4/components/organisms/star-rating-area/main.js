let ratingAreaWrap = document.querySelectorAll('.rating-wrap')[0];
if(ratingAreaWrap!==null) {
    let ratingStars = ratingAreaWrap.getElementsByTagName('svg');
    for(let i=0; i < ratingStars.length; i++) {
        ratingStars[i].addEventListener('click', function (e) {
            let elem = e.target.closest('svg');
            e.preventDefault();
            let data = {
                // '_token': document.getElementsByName('csrf-token')[0].attributes[1].nodeValue,
                'rating_value': elem.attributes['data-item'].value,
                'entity_id': elem.parentElement.attributes['data-id'].value,
                'entity_type' : elem.parentElement.attributes['data-type'].value,
            };
            if(elem.parentElement.attributes['data-id']) {
                /*
                fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json;charset=utf-8',
                    },
                    body: JSON.stringify(data)
                }).then((res) => {
                    return res.text().then((value) => {
                        document.querySelectorAll('.rating-wrap')[0].remove();
                        document.querySelectorAll('.rating-val')[0].remove();
                        document.querySelectorAll('.rating-area-container')[0].innerHTML = '<div class="result-rating-vote h-body-md">' + value + '</div>';
                    }).catch((err) => {
                        console.log(err);
                    });
                });
                */
                document.querySelectorAll('.rating-area-container')[0].innerHTML = '<div class="result-rating-vote h-body-md">' + 'Спасибо, ваш голос учтен!' + '</div>';
                console.log(data);
            }
            return false;
        })
    }
}
