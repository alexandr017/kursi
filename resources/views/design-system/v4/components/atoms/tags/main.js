let tagsDisabled = document.querySelectorAll('.tag.disabled');
if(tagsDisabled !== null) {
    tagsDisabled.forEach(tag => {
        tag.addEventListener('click', (evt) => {
            evt.preventDefault();
        })
    })
}