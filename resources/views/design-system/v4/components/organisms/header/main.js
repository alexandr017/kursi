let headerBlock = document.querySelector('.header-wrapper');
let btnHamburger = document.querySelector('.btn-hamburger');
let listMenuItems = document.querySelectorAll('.catalog-menu-item');
let overlayCatalog = document.querySelector('.catalog-overlay');
let listSubmenu =  document.querySelectorAll('.catalog-submenu');
let firstCatalogMenu = document.querySelector('.catalog-level-1');
let secondCatalogMenu = document.querySelector('.catalog-level-2');
let thirdCatalogMenu = document.querySelectorAll('.catalog-level-3');
let fourthCatalogMenu = document.querySelectorAll('.catalog-level-4');
let btnsBack = document.querySelectorAll('.btn-back');
let tabs = document.querySelectorAll('.tab-label');
let catalogMenuCategories = document.querySelectorAll('.catalog-menu-category');
let btnCatalog = document.querySelector('.btn-catalog');

if (btnHamburger !== null && listSubmenu !== null && firstCatalogMenu !== null) {
    btnHamburger.addEventListener('click', function () {
        if(listMenuItems!==null){
            listMenuItems.forEach((el)=>{el.classList.remove('hovered') });
        }

        headerBlock.classList.toggle('open');
        firstCatalogMenu.classList.toggle('open');

        if(!headerBlock.classList.contains('open')){
            listSubmenu.forEach((submenu) => {
                submenu.classList.remove('open');
                submenu.classList.remove('passed');
            });
        }
    });
}

if (overlayCatalog !== null) {
    overlayCatalog.addEventListener('click', function () {
        if(window.innerWidth > 1023){
            headerBlock.classList.remove('search-show');
            searchBlockLinks.classList.remove('hidden');
            searchBlockLinksResult.classList.add('hidden');
            clearSearch();
            openSearchBlock();
        }
        headerBlock.classList.remove('open');
        firstCatalogMenu.classList.remove('open');

        listSubmenu.forEach((submenu) => {
            submenu.classList.remove('open');
            submenu.classList.remove('passed');
        });
    });
}

if(btnsBack !== null) {
    btnsBack.forEach((btnBack)=>{
        btnBack.addEventListener('click', function (e){
            e.preventDefault();
            e.stopImmediatePropagation();
            let currentMenu = btnBack.closest('.catalog-submenu.open');
            if(currentMenu !== null){
                let parentMenu = currentMenu.parentElement.closest('.catalog-submenu');
                if(parentMenu!== null ){
                    parentMenu.classList.add('open');
                    parentMenu.classList.remove('passed');
                }
                currentMenu.classList.remove('open');
            }
        });
    });
}

if(btnCatalog!==null){
    btnCatalog.addEventListener('click', function (){
        btnCatalog.classList.toggle('open');
        headerBlock.classList.toggle('open');
        collapseSubmenu();

        let scrollbarWidth = window.innerWidth - document.documentElement.clientWidth
        if (document.body.scrollHeight > window.innerHeight && headerBlock.classList.contains('open')) {
            secondCatalogMenu.style.paddingLeft = scrollbarWidth + 'px';
        } else {
            secondCatalogMenu.style.removeProperty('padding-left');
        }
    });
}

if(tabs !== null && catalogMenuCategories !== null){
    tabs.forEach((btnTab)=>{
        btnTab.addEventListener('click', function (){
            collapseSubmenu();
            tabs.forEach( (item) => { item.classList.remove('selected') });
            btnTab.classList.add('selected');
            let tabCatalogLabel = btnTab.getAttribute('data-catalog-category');
            if(tabCatalogLabel !== null && tabCatalogLabel !== ''){
                catalogMenuCategories.forEach((catalogMenuCategory)=>{
                    let catalogMenuLabel =  catalogMenuCategory.getAttribute('data-catalog-category');
                    if(catalogMenuLabel !== null && catalogMenuLabel !== '' && catalogMenuLabel === tabCatalogLabel){
                        catalogMenuCategory.classList.remove('hidden');
                    } else {
                        catalogMenuCategory.classList.add('hidden');
                    }
                });
            }
        });
    });
}

function changeMenuVisibility(elem, action, relatedElem){
    if(window.innerWidth <= 1023){ return;}

    let menuItem = elem.closest('.catalog-menu-item');
    if(menuItem !== null){
        let currentMenu = menuItem.closest('.catalog-submenu');
        let subMenu = menuItem.querySelector('.catalog-submenu');
        let itemsCurrentMenu = currentMenu.querySelectorAll('.catalog-menu-item');

        if(currentMenu.classList.contains('catalog-level-1')) { return; }

        if(action === "open"){
            itemsCurrentMenu.forEach((itemCurrentMenu)=>{
                itemCurrentMenu.classList.remove('hovered');
                let otherSubMenu = itemCurrentMenu.querySelectorAll('.catalog-submenu');

                if(otherSubMenu !== null && otherSubMenu !== undefined){
                    otherSubMenu.forEach((el)=>{el.classList.remove('open') });
                }
            });

            subMenu !== null ? subMenu.classList.add('open') : false;
            menuItem.classList.add('hovered');
        }

        // relatedElem может быть null
        // currentMenu и submenu - относится к предидущему
        if(action === "close"){

        }
    }
}

function collapseSubmenu(){
    if(listMenuItems!==null){
        listMenuItems.forEach((el)=>{
            el.classList.remove('open');
            el.classList.remove('hovered');
        });
    }
    if(listSubmenu!==null){
        listSubmenu.forEach((el)=>{
            el.classList.remove('hovered');
            el.classList.remove('open');
            el.classList.remove('passed');
        });
    }
}

window.addEventListener('resize', (e) => {
    headerBlock !==null ? headerBlock.classList.remove('open') : false;
    btnCatalog !==null ? btnCatalog.classList.remove('open') : false;
    collapseSubmenu();
});

if (listMenuItems !== null) {
    listMenuItems.forEach((menuItem) => {
        menuItem.addEventListener('click', function (e) {
            if (window.innerWidth > 1023) { return; }
            e.preventDefault();
            e.stopImmediatePropagation();

            let currentMenu = menuItem.closest(".catalog-submenu");
            let submenu = menuItem.querySelector(".catalog-submenu");
            let link = menuItem.querySelectorAll('a')[0];

            if (submenu !== null && currentMenu !== null) {
                currentMenu.classList.remove('open');
                submenu.classList.add('open');
                if (submenu.classList.contains('catalog-level-3') ||
                    submenu.classList.contains('catalog-level-4')) {
                    currentMenu.classList.add('passed');
                }
            } else if (link !== null) {
                let hrefAttr = link.getAttribute('href');
                if (hrefAttr !== null && hrefAttr !== '') {
                    location.href = hrefAttr;
                }
            }
        });
    });
}


if (secondCatalogMenu !== null) {
    secondCatalogMenu.addEventListener('mouseover', function (e) {
        changeMenuVisibility(e.target, 'open', e.relatedTarget);
    });
    secondCatalogMenu.addEventListener('mouseout', function (e) {
        changeMenuVisibility(e.target, 'close', e.relatedTarget);
    });
}


// поиск
let btnSearchClose = document.querySelector('.search-close-btn');
let btnSearchOpen = document.querySelector('.btn-search');
let searchBlock = document.querySelector('.search-block');
let searchInput = document.querySelector('.search-input-text');
let searchClearButton = document.querySelector('.search-block-clear');
let searchSubmitButton = document.querySelector('.search-block .search-btn');
let searchBlockLinks = document.querySelectorAll('.search-block-links .links-block')[0];
let searchBlockLinksResult = document.querySelectorAll('.search-block-links .links-block')[1];
let flyoutSearchBlock = document.querySelector('.search-block-links');

if (searchBlock!==null) {
    btnSearchOpen.addEventListener('click', function(){
        if(headerBlock.classList.contains('open')){
            btnCatalog.classList.remove('open');
            headerBlock.classList.remove('open');
            collapseSubmenu();
        }
        headerBlock.classList.add('search-show');
        searchInput.value = '';
        searchInput.focus();
        openSearchBlock();
    });

    btnSearchClose.addEventListener('click', function(){
        clearSearch();
        headerBlock.classList.remove('search-show');
        searchBlockLinks.classList.remove('hidden');
        searchBlockLinksResult.classList.add('hidden');
        openSearchBlock();
    });

    searchInput.addEventListener('input', () => {
        if (searchInput.value) {
            searchClearButton.classList.remove('hidden');
            searchSubmitButton.classList.remove('hidden');
        } else {
            searchClearButton.classList.add('hidden');
            searchSubmitButton.classList.add('hidden');
        }
    });

    searchInput.addEventListener("keyup", function(e) {
        if (e.keyCode === 13 && searchInput.value) {
            e.preventDefault();
            searchBlockLinks.classList.add('hidden');
            searchBlockLinksResult.classList.remove('hidden');
        }
    });

    searchClearButton.addEventListener('click', () => {
        clearSearch();
    });

    searchSubmitButton.addEventListener('click', () => {
        searchBlockLinks.classList.add('hidden');
        searchBlockLinksResult.classList.remove('hidden');
    });
}

function clearSearch(){
    if (searchBlock!==null) {
        searchInput.value = '';
        searchClearButton.classList.add('hidden');
        searchSubmitButton.classList.add('hidden');
    }
}

function openSearchBlock(){
    if (flyoutSearchBlock.style.maxHeight) {
        flyoutSearchBlock.style.maxHeight = null;
        searchBlockLinks.style.maxHeight = null;
    } else {
        flyoutSearchBlock.style.maxHeight = window.innerHeight + "px";
        searchBlockLinks.style.maxHeight = searchBlockLinks.scrollHeight + "px";
    }
}




