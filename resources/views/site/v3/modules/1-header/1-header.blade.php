<header>
    <div class="top-cont">
        <div class="top max-width">
            @if(Request::path() != '/')
            <a href="/" class="logo">
                <img src="/v3/images/logo.svg" alt="Курсы.ру">
            </a>
            @else
                <img src="/v3/images/logo.svg" alt="Курсы.ру">
            @endif

            <div class="header_right_side-modile_open" onclick="showMobileMenu()">
                <img src="/v3/images/burger.svg" alt="Открыть меню" title="Открыть меню">
            </div>

            <div class="header_right_side " id="header-menu-cont">
                <a href="/" class="mobile-logo">
                    <img src="/v3/images/logo.svg" alt="Курсы.ру" title="Курсы.ру">
                </a>

                <div class="header_top_menu">
                    <div class="ul first_lvl">
                        <div class="li kursy-top_menu-cont" id="catalogButton" onclick="handleCatalogOpen()">
                            <div class="header_top_menu-text">
                                <img
                                    src="/v3/images/menu_img.svg"
                                    alt=""
                                    class="kursy-open_btn-open-img active"
                                    id="openCatalog"
                                >
                                <img
                                    src="/v3/images/menu_close_img.svg"
                                    alt=""
                                    class="kursy-open_btn-close-img"
                                    id="closeCatalog"
                                >
                                <a class="catalog">
                                    Каталог
                                </a>
                            </div>

                            <div class="ul_cont" id="catalog_body_wrapper">
                                <div class="categories-buttons-wrapper">
                                    <input type="radio" id="menu-all" class="menu-tabs_label" checked name="menu-tabs_label">
                                    <label for="menu-all" class="kursy-top_menu-tab_label selected">
                                        Все
                                    </label>

                                    <input type="radio" id="menu-free" class="menu-tabs_label" name="menu-tabs_label">
                                    <label for="menu-free" class="kursy-top_menu-tab_label">
                                        Бесплатные
                                    </label>

                                    <input type="radio" id="menu-kids" class="menu-tabs_label" name="menu-tabs_label">
                                    <label for="menu-kids" class="kursy-top_menu-tab_label">
                                        Для детей
                                    </label>
                                </div>

                                @include('site.v3.modules.1-header.header-catalog-all')
                            </div>
                        </div>

                        <div class="open_search close">
                            <div class="search_page-main_cont" id="search-popup-cont">
                                <div class="search_page-header">
                                    <form action="/search" method="get" onsubmit="return validateSearch()">
                                        <label for="search_page_submit" class="search_page-submit_label">
                                            <img src="/v3/images/search.svg" alt="Поиск" title="Поиск">
                                            <input type="submit" value="Искать" id="search_page_submit">
                                        </label>

                                        <iframe style="width:0px; height:0px; border: 0px;" src="javascript:''" name="qplSKIW_div_frame" id="qplSKIW_div_frame"></iframe>
                                        <input
                                            size="40"
                                            name="q"
                                            id="qplSKIW"
                                            value=""
                                            placeholder="Поиск"
                                            class="search-suggest"
                                            type="text"
                                            autocomplete="off"
                                            oninput="handleSearch(value)"
                                            onchange="handleSearch(value)"
                                        >

                                        <label for="search_page_reset" id="search_page_reset_label" style="display: none">
                                            <img src="/v3/images/close.svg" class="search_page_reset_img" style="" alt="Сбросить поиск" title="Сбросить поиск">
                                            <input type="reset" id="search_page_reset" value="Очистить" onclick="clearSearch()">
                                        </label>
                                    </form>

                                    <div class="search_page-close_btn mobile" onclick="hideSearchPopup()">
                                        <img src="/v3/images/closepage.svg" alt="Закрыть поиск" title="Закрыть поиск">
                                        <p>Отмена</p>
                                    </div>

                                    <script data-skip-moving="true">
                                        function hideSearchPopup(e) {
                                            let search = document.querySelector('.open_search');
                                            search.classList.add("close");
                                            document.querySelector(".header_right_side.open")?.classList.remove("open");
                                        }
                                        if( !(window.openedFormsCallbacks instanceof Object)  ){
                                            window.openedFormsCallbacks = {};
                                        }
                                        window.openedFormsCallbacks.search = hideSearchPopup;
                                    </script>
                                </div>
                            </div>
                        </div>

                        <div class="menu">
                            <div class="header_top_menu">
                                <div class="ul first_lvl info">
                                    <div class="li">
                                        <div class="header_top_menu-text ">
                                            <a href="/schools/">Рейтинг школ</a>
                                        </div>
                                    </div>
                                    <div class="li">
                                        <div class="header_top_menu-text ">
                                            <a href="/znaniya/">Блог</a>
                                        </div>
                                    </div>
                                    <div class="li">
                                        <div class="header_top_menu-text selected">
                                            <a href="/about/">О нас</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="header_right_side-modile_close" onclick="hideMobileMenu()">
                    <img src="/local/templates/kursi/img/close_mobile_menu.svg" alt="Назад" title="Назад">
                </div>
            </div>
        </div>
    </div>
    @include('site.v3.modules.3-breadcrumbs.3-breadcrumbs')
</header>

<style>
    a:hover {
        color: unset;
    }

    #catalog_body_wrapper {
        padding: 0 calc((100% - 1120px) / 2);
        max-width: unset
    }

    @media screen and (max-width: 1440px) {
        #catalog_body_wrapper {
            padding: 0 160px;
            max-width: 1440px
        }
    }

    @media screen and (max-width: 1200px) {
        #catalog_body_wrapper {
            padding: 0 80px;
        }
    }

    @media (min-width: 861px){
        .kursy-top_menu-body {
            border-top: 1px solid #F5F5F5;
        }
    }

    input.kursy-top_menu_cb:checked ~ .kursy-top_menu-body {
        display: flex;
    }

    .kursy-top_menu-body {
        position: absolute;
        left: 0;
        top: 100%;
        display: none;
        width: 100%;
        justify-content: center;
        z-index: 1000000;
        background: white;
        padding-bottom: 32px;
    }

    .ul_cont {
        display: flex;
        width: 100%;
        flex-flow: wrap;
        max-width: 1440px;
        padding: 0 160px;
    }

    .menu {
        height: 100%;
        margin-left: 16px;
    }

    .header_top_menu .ul.info {
        list-style: none;
        height: 100%;
        display: inline-flex;
        flex-direction: row;
        gap: 40px;
    }

    .header_top_menu > .ul {
        align-items: center;
    }

    .max-width.top {
        justify-content: flex-start;
        padding: 32px 160px;
    }

    @media (max-width: 1200px) {
        .max-width.top {
            padding: 32px 80px;
        }
    }

    @media (max-width: 1000px) {
        .max-width.top {
            padding: 28px;
        }
    }

    @media (max-width: 860px) {
        .max-width.top {
            padding: 24px 16px;
            justify-content: space-between;
        }

        .header_top_menu > a {
            display: inline-flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
        }

        .header_top_menu a {
            font-size: 32px;
            line-height: 46px;
            font-weight: 600;
        }
    }

    .header_top_menu > .ul > .kursy-top_menu-cont {
        grid-area: list_menu;
        margin-left: 32px;
        background: #469ED7;
        padding: 8px 16px;
        border-radius: 50pc;
        color: white;
        font-size: 16px;
        font-family: Inter;
        font-weight: 500;
        line-height: 24px;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
    }


    .kursy-open_btn-close-img,
    .kursy-open_btn-open-img {
        display: none;
    }

    .header_top_menu .catalog {
        color: white;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        font-size: 16px;
        font-weight: 500;
        line-height: 24px;
    }

    .header_top_menu a {
        color: #101820;
        font-weight: bolder;
        text-wrap: nowrap;
    }

    .search_page-header form input[type="text"] {
        border: 1px solid #D9D9D9;
        border-radius: 100px;
        padding: 8px 56px;
        width: 100%;
        display: inline-flex;
        height: 40px;
        align-items: center;
    }

    .search_page-header form input[type="text"]:focus {
        border: 1px solid #469ED7;
    }

    label.search_page-submit_label {
        width: max-content;
        left: 24px;
        right: unset;
    }

    .search_page-header label {
        display: flex;
        cursor: pointer;
        position: absolute;
        right: 24px;
    }

    .search_page-header label {
        display: flex;
        cursor: pointer;
        position: absolute;
        right: 24px;
    }

    .search_page-header form {
        width: 100%;
        position: relative;
        margin-right: 40px;
        display: inline-flex;
        height: 40px;
        align-items: center;
    }

    .search_page-close_btn img, .search_page-close_btn p {
        display: none;
    }

    .open_search {
        margin: 0 16px;
        max-width: 360px;
        margin-right: auto;
    }

    .active {
        display: block;
    }

    #search_page_reset_label {
        width: 24px;
        height: 24px;
    }

    .kursy-top_menu-body > * {
        max-width: 1440px;
        padding: 0 160px;
    }
    .kursy-top_menu-tabs_cont {
        margin-top: 24px;
    }
    .kursy-top_menu-tabs_cont {
        display: flex;
        width: 100%;
        flex-flow: wrap;
    }

    .menu-tabs_label {
        display: none;
    }

    .menu-tabs_label:checked + .kursy-top_menu-tab_label {
        color: #2185C6;
    }

    .kursy-top_menu-tab_label {
        /* margin-bottom: 16px; */
        padding: 8px 16px;
        background: #F5F5F5;
        border-radius: 32px;
        cursor: pointer;
        color: #101820;
        margin-right: 16px;
        font-weight: 500;
    }

    .categories-buttons-wrapper {
        display: flex;
        padding: 24px 0;
        width: 100%;
    }

    .ul.second_lvl .header_top_menu-text  a {
        font-weight: 400;
    }

    .kursy-top_menu-tab_label {
        font-weight: 500;
        font-family: Inter, Montserrat, sans-serif;
    }
</style>

@push('scripts')
    <script type="text/javascript" src="{{ Vite::asset('resources/js/header/header.js') }}"></script>
@endpush

<script>
    function handleSearch(value) {
        const resetButton = document.getElementById('search_page_reset_label');
        resetButton.style.display = value ? 'block' : 'none';
    }

    function handleCatalogOpen() {
        document.getElementById('catalogButton').classList.toggle('active');;
        document.getElementById('closeCatalog').classList.toggle('active');
        document.getElementById('openCatalog').classList.toggle('active');
    }

    function validateSearch() {
        const inputValue = document.getElementById('qplSKIW').value.trim();
        if (inputValue === '') {
            return false;
        }
        return true;
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', getCatalogs);

    const radioButtons = {
        'menu-all': 'catalog_all',
        'menu-free': 'besplatnye',
        'menu-kids': 'dlya-detej'
    };

    for (const [buttonId, catalogName] of Object.entries(radioButtons)) {
        const radioButton = document.getElementById(buttonId);
        radioButton.addEventListener('change', () => openMenu(catalogName));
    }

    function getCatalogs() {
        const catalogRoutes = ['/catalog/listings/besplatnye', '/catalog/listings/dlya-detej'];
        catalogRoutes.forEach((route, index) => sendCatalogRequest(route, Object.values(radioButtons)[index + 1]));
    }

    function openMenu(menuName) {
        closeOtherCatalogs();
        document.getElementById(menuName).style.display = '';
        setMenuActiveParent(menuName);
    }

    function closeOtherCatalogs() {
        Object.values(radioButtons).forEach(catalogName => {
            const catalogElement = document.getElementById(catalogName);
            if (catalogElement && catalogElement.style.display !== 'none') {
                catalogElement.style.display = 'none';
            }
        });
    }

    function sendCatalogRequest(url, catalogName) {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch(url, {
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
            }
        })
            .then(response => response.text())
            .then(data => {
                addInCatalogWrapperBlock(catalogName, data);
                handleActiveMenu(catalogName);
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Something went wrong');
            });
    }

    function addInCatalogWrapperBlock(catalogName, data) {
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = data;
        const catalogContent = tempDiv.querySelector(`#${catalogName}`);

        if (catalogContent) {
            document.getElementById('catalog_body_wrapper').appendChild(catalogContent);
        }
    }

    function handleActiveMenu(catalogName) {
        if (window.location.pathname.includes(catalogName)) {
            const menuButtonId = Object.keys(radioButtons).find(key => radioButtons[key] === catalogName);
            if (menuButtonId) {
                document.getElementById(menuButtonId).checked = true;
            }

            openMenu(catalogName);
        }
    }

    function setMenuActiveParent(menuName) {
        const menu = document.getElementById(menuName);
        const parents = menu.getElementsByClassName('header_menu_parents');

        const activeParent = Array.from(parents).find(par => par.getAttribute('name') === window.location.pathname);
        if (activeParent) {
            activeParent.classList.add('header_menu-selected_parent');
        }
    }

</script>


