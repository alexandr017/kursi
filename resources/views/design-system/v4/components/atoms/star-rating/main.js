let ratingBlock = document.querySelectorAll('.rating-wrap')[0];
if(ratingBlock.length != 0) {
    let ratingStars = ratingBlock.getElementsByTagName('svg');
    for (let i = 0; i < ratingStars.length; i++) {
        ratingStars[i].addEventListener('mouseenter', function (e) {
            let elemIndex = e.target.attributes['data-item'].nodeValue;
            for (let i = 0; i < 5; i++) {
                let fillOffset = ratingStars[i].getElementsByTagName('stop')[0].attributes['offset'].nodeValue;
                let fillColor = ratingStars[i].getElementsByTagName('stop')[0].attributes['stop-color'].nodeValue;
                ratingStars[i].setAttribute('fillOffset', fillOffset);
                ratingStars[i].setAttribute('fillColor', fillColor);
                ratingStars[i].getElementsByTagName('stop')[0].attributes['offset'].nodeValue = '100%';
                if (i < elemIndex) {
                    ratingStars[i].getElementsByTagName('stop')[0].attributes['stop-color'].nodeValue = '#141414';
                } else {
                    ratingStars[i].getElementsByTagName('stop')[0].attributes['stop-color'].nodeValue = '#00000033';
                }
            }
        })
        // ratingStars[i].addEventListener('mouseleave', function () {
        //     for (let i = 0; i < 5; i++) {
        //         ratingStars[i].getElementsByTagName('stop')[0].attributes['offset'].nodeValue = ratingStars[i].attributes['fillOffset'].nodeValue;
        //         ratingStars[i].getElementsByTagName('stop')[0].attributes['stop-color'].nodeValue = ratingStars[i].attributes['fillColor'].nodeValue;
        //     }
        // })
    }

    ratingBlock.addEventListener('mouseleave', function (){
        for (let i = 0; i < 5; i++) {
            ratingStars[i].getElementsByTagName('stop')[0].attributes['offset'].nodeValue = '100%';
            ratingStars[i].getElementsByTagName('stop')[0].attributes['stop-color'].nodeValue = '#00000033';
            ratingStars[i].removeAttribute('fillOffset');
            ratingStars[i].removeAttribute('fillColor');
        }
    });
}