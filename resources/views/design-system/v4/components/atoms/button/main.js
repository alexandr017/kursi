let buttonsDisabled = document.querySelectorAll('.btn.disabled');
if(buttonsDisabled !== null) {
    buttonsDisabled.forEach(btn => {
        btn.addEventListener('click', (evt) => {
            evt.preventDefault();
        })
    })
}
