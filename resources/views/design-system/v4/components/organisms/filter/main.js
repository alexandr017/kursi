let filterContainer = document.querySelector('.filter-list');
let filterList = filterContainer.querySelectorAll('input');
let btnOpenMobFilter = document.querySelector('.btn-filter');
let filterCounter = document.querySelector('.btn-filter .counter');
let btnCloseFilter = document.querySelector('.filter-close');
let btnShowCourses = document.querySelector('.btn-show-courses');
let btnResetCourses = document.querySelector('.btn-reset-courses');

window.filterCounter = 0;
window.isMobScreen === undefined ? window.isMobScreen = false : false;

if (filterContainer.length != 0) {
    window.addEventListener('resize', (e) => {
        checkMobileFilterDesign(filterList);
    });

    checkMobileFilterDesign(filterList);
    setCategoryFilters(filterList);

    filterList.forEach((filterItem) => {

        filterItem.addEventListener('click', function () {
            updateFilterData(filterItem, window.filters);
        });

        // сброс всех фильтров
        // если бесплатные то редирект
        // при ресайзе не закрывать пункты
    })
}

function updateFilterData(filterItem, filterVars) {
    let filterKeys = Object.keys(filterVars);

    for(let i=0; i<filterKeys.length; i++) {
        let filterName = filterKeys[i];
        let filterAttributeExists = filterItem.hasAttribute("data-"+filterName);
        if(filterAttributeExists) {
            let filterItemValue = filterItem.getAttribute("data-"+filterName);
            switch (filterName){
                case 'price':
                case 'duration':
                case 'training':
                case 'format':
                    console.log(filterVars[filterName]);
                    filterArrayUpdate(filterVars[filterName], filterItemValue, 'select');
                    console.log(filterVars[filterName]);
                    break;
                case 'difficulty':
                case 'schedule':
                    console.log(filterVars[filterName]);
                    filterArrayUpdate(filterVars[filterName], filterItemValue, 'radio');
                    console.log(filterVars[filterName]);
                    break;
                case 'installment':
                case 'online':
                case 'certificate':
                case 'employment':
                    console.log(filterVars[filterName]);
                    filterArrayUpdate(filterVars, filterName, 'bool');
                    console.log(filterVars[filterName]);
                    break;
            }
        }
    }
}

// обновляется содержимое глобальной переменной фильтров
// обновляется счетчик фильтров
function filterArrayUpdate(arr, elem, type){
    switch (type){
        case 'select':
            let indexItem = arr.indexOf(elem);
            if(indexItem !== -1){
                arr.splice(indexItem, 1);
                updateFilterCounter('remove');
            } else {
                arr.push(elem);
                updateFilterCounter('add');
            }
            break;
        case 'radio':
            if(arr.indexOf('all') !== -1 && elem !== 'all'){ // был all стал не all
                updateFilterCounter('add');
            } else if(arr.indexOf('all') === -1 && elem === 'all') { // был не all стал all
                updateFilterCounter('remove');
            }
            arr.splice(0, 1);
            arr.push(elem);
            break;
        case 'bool':
            if(arr[elem] === false){
                arr[elem] = true
                updateFilterCounter('add');
            } else {
                arr[elem] = false;
                updateFilterCounter('remove');
            }
            break;
    }
}

// если в контейнере фильтра есть категория фильтров,
// устанавливается соответствующая глобальная переменная категории фильтров
// фильтры: сложность и график, по умолчанию устанавливается all
function setCategoryFilters(filterList){
    window.filters = {};
    let filterNames = [];
    filterList.forEach((filterItem) => {
        let categoryFilter = filterItem.getAttribute('data-filter-category');
        if(categoryFilter === null || categoryFilter === ''){
            categoryFilter = filterItem.closest('.list-controls').getAttribute('data-filter-category');
        }
        let indexItem = filterNames.indexOf(categoryFilter);
        if(indexItem === -1){
            filterNames.push(categoryFilter);
        }
    });
    filterNames.forEach((filterName)=>{
        switch (filterName){
            case 'installment':
                window.filters.installment = false;
                break;
            case 'online':
                window.filters.online = false;
                break;
            case 'certificate':
                window.filters.certificate = false;
                break;
            case 'employment':
                window.filters.employment = false;
                break;
            case 'price':
                window.filters.price = [];
                break;
            case 'duration':
                window.filters.duration = [];
                break;
            case 'difficulty':
                window.filters.difficulty = ['all'];
                break;
            case 'training':
                window.filters.training = [];
                break;
            case 'format':
                window.filters.format = [];
                break;
            case 'schedule':
                window.filters.schedule = ['all'];
                break;
        }
    })
}

// ДЕКОРАТИВНОЕ обновление счетчиков фильтров + кнопка очистить
function updateFilterCounter(operator = null){
    switch (operator){
        case 'add':
            window.filterCounter++;
            break;
        case 'remove':
            window.filterCounter--;
            break;
    }
    
    if(window.filterCounter === 0){
        filterCounter.innerHTML = '';
        filterCounter.closest('.btn-filter').classList.remove('success');
        btnShowCourses.querySelector('span').innerHTML = '&nbsp;все курсы';
        btnResetCourses.classList.add('hidden');
    } else {
        filterCounter.closest('.btn-filter').classList.add('success');
        filterCounter.innerHTML = window.filterCounter;
        btnResetCourses.classList.remove('hidden');
        let nounCourses = getNoun(window.filterCounter, 'курс', 'курса', 'курсов');
        btnShowCourses.querySelector('span').innerHTML = '&nbsp;' + window.filterCounter + '&nbsp;' + nounCourses;
    }
}

// при ширине эрана меньше 767 - мобильный дизайн для фильтра
function checkMobileFilterDesign(filterList) {
    window.isMobScreen = document.documentElement.clientWidth <= 767;
    // функция изменения

    if (window.isMobScreen) {
        filterContainer.classList.add('hidden');
        filterContainer.classList.add('filter-mobile');
        btnOpenMobFilter.classList.remove('hidden');
        btnShowCourses.classList.remove('hidden');

        btnResetCourses.classList.add('btn-tertiary-label');
        btnResetCourses.classList.remove('btn-secondary-dark');
        filterList.forEach((filterItem) => {
            let filterAccordionItem = filterItem.closest('.list-controls');
            let filterLabel = filterItem.closest('label');
            if(filterAccordionItem !== null){
                filterAccordionItem.setAttribute('open', '')
                filterAccordionItem.setAttribute('disabled', '')
            }
            filterLabel.classList.add('reverse');
        });
    } else {
        filterContainer.classList.remove('hidden');
        filterContainer.classList.remove('filter-mobile');
        btnOpenMobFilter.classList.add('hidden');
        btnShowCourses.classList.add('hidden');

        btnResetCourses.classList.add('btn-secondary-dark');
        btnResetCourses.classList.remove('btn-tertiary-label');
        filterList.forEach((filterItem) => {
            let filterAccordionItem = filterItem.closest('.list-controls');
            let filterLabel = filterItem.closest('label');
            if(filterAccordionItem !== null){
                filterAccordionItem.removeAttribute('open');
                filterAccordionItem.removeAttribute('disabled');
            }
            filterLabel.classList.remove('reverse');
        });
    }
}

function resetFilters(filterList){
    filterList.forEach((filterItem) => {
        filterItem.removeAttribute('checked');
        filterItem.checked = false
        let filterDifficulty = filterItem.getAttribute('data-difficulty');
        let filterSchedule = filterItem.getAttribute('data-schedule');
        if(filterDifficulty === 'all' || filterSchedule === 'all'){
            filterItem.checked = true;
        }
    });
}

if(btnCloseFilter.length != 0){
    btnCloseFilter.addEventListener('click', function (){
        filterContainer.classList.toggle('hidden');
    })
}

if(btnShowCourses.length != 0){
    btnShowCourses.addEventListener('click', function (){
        filterContainer.classList.toggle('hidden');
    })
}

if(btnOpenMobFilter.length != 0){
    btnOpenMobFilter.addEventListener('click', function(){
        filterContainer.classList.toggle('hidden');
    });
}

if(btnResetCourses.length != 0){
    btnResetCourses.addEventListener('click', function (){
        setCategoryFilters(filterList);
        resetFilters(filterList);
        window.filterCounter = 0;
        updateFilterCounter();
        console.log(window.filters);
        console.log(window.filterCounter);
    })
}

// получить суффикс от числительго
function getNoun(number, one, two, five) {
    let n = Math.abs(number);
    n %= 100;
    if (n >= 5 && n <= 20) {
        return five;
    }
    n %= 10;
    if (n === 1) {
        return one;
    }
    if (n >= 2 && n <= 4) {
        return two;
    }
    return five;
}
