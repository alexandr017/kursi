let btnLinksMore = document.querySelectorAll('.bottom-links_more');
if(btnLinksMore!==null){
    btnLinksMore.forEach((btnLink)=>{
        btnLink.addEventListener('click', (e)=>{
            let linksBlock = e.target.closest('.bottom-links_wrapper');
            if(linksBlock!==null && linksBlock!==''){
                let linksList = linksBlock.querySelector('.bottom-links_list');
                linksList.classList.toggle('open');

                if(linksList.classList.contains('open')){
                    e.target.innerHTML = 'Свернуть';
                } else{
                    e.target.innerHTML = 'Смотреть все';
                }
            }
        });
    })


    // скрыть кнопку для коротких блоков
    let linksLists = document.querySelectorAll('.bottom-links_list');
    linksLists.forEach((linksList)=>{
        let btnMore = linksList.nextElementSibling;
        let links = linksList.querySelectorAll('.bottom-links_item');
        if(links.length < 12){
            linksList.classList.add('short');
            btnMore.classList.add('hidden');
        }
    });
}

