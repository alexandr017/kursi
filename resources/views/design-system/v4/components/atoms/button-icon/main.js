let buttonsDisabled = document.querySelectorAll('.btn.disabled');
if(buttonsDisabled !== null) {
    buttonsDisabled.forEach(btn => {
        btn.addEventListener('click', (evt) => {
            evt.preventDefault();
        })
    })
}

let btnFilter = document.querySelector('.btn-filter');
if(btnFilter !== null) {
    btnFilter.addEventListener('click', function (){
        btnFilter.classList.toggle('success');
    });
}
