function sortPanel(evt, buttonsClassName) {
    const element = evt.target;
    const img = element.querySelector('img');

    sortOrder = element.getAttribute('data-sort-order');
    sortValue = element.getAttribute('data-sort-value');

    if (!sortOrder) {
        updateSortButtons(buttonsClassName);
    }

    if (!element.classList.contains('active')) {
        element.classList.add('active');
    }

    sortOrder = sortOrder === 'asc' ? 'desc' : 'asc';
    let src = sortOrder === 'desc' ? '/images/sort-panel/arrow_down_blue.svg' : '/images/sort-panel/arrow_up_blue.svg'
    element.setAttribute('data-sort-order', sortOrder);
    img.setAttribute('src', src)

    this.sendRequest()
}

function updateSortButtons (buttonsClassName) {
    const elements = document.querySelectorAll(`.${buttonsClassName}`);

    elements.forEach(element => {
        element.classList.remove('active');
        element.setAttribute('data-sort-order', '');
        element.querySelector('img').setAttribute('src', '/images/sort-panel/arrow_up_black.svg');
    });
}

function sendRequest () {

}
