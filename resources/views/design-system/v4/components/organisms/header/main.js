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
let btnSearch = document.querySelector('.btn-search');

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
        headerBlock.classList.remove('search-show');
        headerBlock.classList.add('search-hide');
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

                console.log(currentMenu);
                console.log(parentMenu);
                // if(currentMenu.classList.contains('catalog-level-4')) {
                //     fourthCatalogMenu.forEach((el) => { el.classList.remove('open'); });
                // }
                // if(currentMenu.classList.contains('catalog-level-3')){
                //     thirdCatalogMenu.forEach((el) => { el.classList.remove('open'); });
                // }
            }

            console.log(document.querySelectorAll('.catalog-level-4.open'));
        });
    });
}

if(btnCatalog!==null){
    btnCatalog.addEventListener('click', function (){
        btnCatalog.classList.toggle('open');
        headerBlock.classList.toggle('open');
        collapseSubmenu();
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
        listMenuItems.forEach((el)=>{el.classList.remove('open');});
    }
    if(listSubmenu!==null){
        listSubmenu.forEach((el)=>{el.classList.remove('hovered');});
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

if(btnSearch!==null){
    btnSearch.addEventListener('click', function(){
        headerBlock.classList.remove('search-hide');
        headerBlock.classList.add('search-show');
    })
}

