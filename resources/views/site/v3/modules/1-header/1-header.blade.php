<header class="">
    <div class="top-cont">
        <div class="top max-width">
            <a href="/" class="logo">
                <img src="/v3/images/logo.svg" alt="Курсы.ру">
            </a>

            <div class="header_right_side-modile_open" onclick="showMobileMenu()">
                <img src="/v3/images/burger.svg" alt="Открыть меню" title="Открыть меню">
            </div>

            <div class="header_right_side" id="header-menu-cont">
                <a href="/" class="mobile-logo">
                    <img src="/v3/images/logo.svg" alt="Курсы.ру" title="Курсы.ру">
                </a>

                <div class="kursy-top_menu-cont ">
                    <input type="checkbox" onchange="toggleContentBlurMenu();" id="kursy-top_menu_cb-7c6f4d5a4834d2cee479" class="kursy-top_menu_cb">
                    <div class="kursy-top_menu">
                        <label class="kursy-open_btn" for="kursy-top_menu_cb-7c6f4d5a4834d2cee479">
                            <img src="/v3/images/menu_img.svg" alt="" class="kursy-open_btn-open-img">
                            <img src="/v3/images/menu_close_img.svg" alt="" class="kursy-open_btn-close-img">
                            <span>Каталог</span>
                        </label>
                    </div>
                    <div class="kursy-top_menu-body">
                        <div class="kursy-top_menu-tabs_cont" id="top_menu" onclick="closeOpenedMenu(event);">
                            <input type="radio" id="menu-all" class="menu-tabs_label" checked="" name="menu-tabs_label-cb2bac0c8f2b08cf45ec">
                            <label for="menu-all" class="kursy-top_menu-tab_label selected">
                                Все
                            </label>
                            <style>
                                #menu-all:checked ~ .kursy-top_menu-tab_list > #all{
                                    display: grid;
                                }

                                @media(max-width: 860px){
                                    #menu-all:checked ~ .kursy-top_menu-tab_list > #all{
                                        display: inline-flex;
                                    }
                                }
                            </style>
                            <input type="radio" id="menu-free" class="menu-tabs_label" name="menu-tabs_label-cb2bac0c8f2b08cf45ec">
                            <label for="menu-free" class="kursy-top_menu-tab_label ">
                                Бесплатные
                            </label>
                            <style>
                                #menu-free:checked ~ .kursy-top_menu-tab_list > #besplatnye{
                                    display: grid;
                                }

                                @media(max-width: 860px){
                                    #menu-free:checked ~ .kursy-top_menu-tab_list > #besplatnye{
                                        display: inline-flex;
                                    }
                                }
                            </style>
                            <input type="radio" id="menu-kids" class="menu-tabs_label" name="menu-tabs_label-cb2bac0c8f2b08cf45ec">
                            <label for="menu-kids" class="kursy-top_menu-tab_label ">
                                Для детей
                            </label>
                            <style>
                                #menu-kids:checked ~ .kursy-top_menu-tab_list > #dlya-detej{
                                    display: grid;
                                }

                                @media(max-width: 860px){
                                    #menu-kids:checked ~ .kursy-top_menu-tab_list > #dlya-detej{
                                        display: inline-flex;
                                    }
                                }
                            </style>
                            <div class="kursy-top_menu-tab_list" id="catalog_body_wrapper"></div>
                        </div>
                    </div>
                </div>
                <script data-skip-moving="true">
                    function toggleContentBlurMenu(e){
                        if( document.getElementById("kursy-top_menu_cb-7c6f4d5a4834d2cee479").checked){
                            const content = document.querySelector(".content");

                            content.classList.add("blur_bg");
                            content.addEventListener('click', () => {
                                document.getElementById("kursy-top_menu_cb-7c6f4d5a4834d2cee479").checked = false;
                                document.querySelector(".content").classList.remove("blur_bg");
                            });

                            hideSearchPopup();
                        }
                        else{
                            document.querySelector(".content").classList.remove("blur_bg");
                        }
                    }

                    function closeOpenedMenu(e){
                        if(e){
                            if( e.target.classList.contains("kursy-top_menu-tabs_cont") ){
                                e.preventDefault();
                                document.getElementById("kursy-top_menu_cb-7c6f4d5a4834d2cee479").checked = false;
                                toggleContentBlurMenu();
                            }
                        }
                        else{
                            document.getElementById("kursy-top_menu_cb-7c6f4d5a4834d2cee479").checked = false;
                            toggleContentBlurMenu();
                        }
                    }
                </script>
                <div class="open_search close">
                    <div class="search_page-main_cont" id="search-popup-cont">
                        <div class="search_page-header">
                            <div class="search-form">
                                <label for="search_page_submit" class="search_page-submit_label">
                                    <img src="/v3/images/search.svg" alt="Поиск" title="Поиск">
                                </label>
                                <input type="submit" value="Искать" id="search_page_submit">

                                <input size="40" name="q" id="qplSKIW" value="" placeholder="Поиск" class="search-suggest" type="text" autocomplete="off">

                                <label for="search_page_reset">
                                    <img src="/v3/images/close.svg" class="search_page_reset_img" style="" alt="Сбросить поиск" title="Сбросить поиск">
                                </label>
                                <input type="reset" id="search_page_reset" value="Очистить" onclick="clearSearch()">
                            </div>

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
                        <div class="ul first_lvl">
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
                                <div class="header_top_menu-text ">
                                    <a href="/about/">О нас</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <img src="/v3/images/search.svg" alt="Поиск по сайту" title="Поиск по сайту" onclick="showSearchPopup()" class="search_page-open_btn mobile">

                <div class="header_right_side-modile_close" onclick="hideMobileMenu()">
                    <img src="/images/contacts/close_mobile_menu.svg" alt="Назад" title="Назад">
                </div>
            </div>
        </div>
    </div>
    @include('site.v3.modules.3-breadcrumbs.3-breadcrumbs')

</header>

<style>
    .kursy-top_menu-right_label.hide-item {
        display: none;
    }

    .kursy-top_menu-right_label.has_child_label.hide-item {
        display: none;
    }

    /* Start:/local/templates/kursi/admin_styles.css?16905244512714*/
    .shortcode_btn i {
        background-position: center !important;
        background-size: contain !important;
    }

    .input_params_dialog > table {
        width: 100%;
    }

    .snippet_edit_panel-input_grid {
        display: table;
        width: 100%;
    }

    .snippet_edit_panel-input_cont {
        display: table-row;
    }

    .snippet_edit_panel-input_title {
        display: table-cell;
        padding-right: 10px;
    }

    .snippet_edit_panel-input {
        display: table-cell;
    }

    .snippet_edit_panel-cont {
        font-family: Verdana;
    }

    .snippet_edit_panel-header {
        margin: 20px 0;
        text-align: center;
        background: lightblue;
        padding: 10px;
        font-weight: 600;
    }

    .snippet_edit_panel-input_cont > * {
        padding-bottom: 20px;
    }
    .snippet_edit-imput_radio-button_wrapper{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
        gap: 10px;
        margin-bottom: 5px;
    }

    .snippet_edit_panel-hidden_editors{
        display: none;
    }

    .snippet_edit_panel-input_grid {
        display: table;
    }

    .snippet_edit_panel-input_grid > div {
        display: table-row;
    }

    .snippet_edit_panel-input_grid > div > div {
        display: table-cell;
    }

    .snippet_edit_panel-input_grid > div > div:first-child {
        width: 100px;
    }

    .snippet_edit_panel-input.text img {
        max-width: 100%;
    }

    .snippet_edit_panel-header_btns {
        display: grid;
        grid-template-columns: repeat(4, 25px);
        grid-gap: 10px;
    }

    .snippet_edit_panel-header {
        display: inline-flex;
        width: calc(100% - 20px);
        justify-content: space-between;
    }

    .snippet_edit_panel-header_btn {
        cursor: pointer;
    }

    .snippet_edit_panel-input_grid #close_btn{
        cursor: pointer;
    }

    .custom_section_inputs {
        border: 1px solid #a3a5a5;
        border-radius: 4px;
        background: #fff;
        box-shadow: 0 1px 0 0 rgb(255 255 255 / 30%), inset 0 2px 2px -1px rgb(180 188 191 / 70%);
        color: #000;
        /* padding: 5px; */
    }

    .custom_section_inputs {
        display: inline-flex;
        flex-direction: column;
        max-height: 300px;
        overflow: hidden;
        overflow-y: scroll;
        margin-bottom: 20px;
    }

    /* #bx-admin-prefix .custom_section_inputs .adm-designed-checkbox {
    display: block !important;
} */

    .custom_section_inputs > div {
        /* margin-bottom: 10px; */
        padding: 5px;
    }

    .custom_section_inputs label {
        cursor: pointer;
    }

    .custom_section_cont {
        display: inline-flex;
        flex-direction: column;
    }


    tr.input_params_row td {
        padding-bottom: 18px;
    }

    span.colored_text {
        font-size: 16px;
        background: #D9D9D9;
        border-radius: 3px;
        padding: 0 6px;
        line-height: 24px;
    }
    /* End */


    /* Start:/local/components/sigodinweb/menu.sections/templates/.default/style.css?169052445120324*/
    /*static*/

    .kursy-top_menu-tabs_label_cont {
        display: flex;
        width: 100%;
    }

    .kursy-top_menu-tab {
        display: grid;
        grid-template-columns: 300px 1fr;
    }

    .kursy-top_menu-left_subitems {
        display: none;
    }

    .menu-tabs_label{
        display: none;
    }

    .kursy-top_menu-tab {
        display: none;
        padding-top: 16px;
        position: relative;
    }



    .kursy-top_menu-tabs_cont {
        display: flex;
        width: 100%;
        flex-flow: wrap;
    }

    .kursy-top_menu-tab_list {
        width: 100%;
        margin-top: 16px;
    }

    .kursy-top_menu-tab_label{
        /* margin-bottom: 16px; */
        padding: 8px 16px;
        background: #F5F5F5;
        border-radius: 32px;
        cursor: pointer;
        color: #101820;
        margin-right: 16px;
        font-weight: 500;
    }

    .kursy-top_menu-tab_label:hover{
        color: #2E8FCE;
    }

    .menu-tabs_label:checked + .kursy-top_menu-tab_label{
        color: #2185C6;
    }

    .kursy-top_menu-block {
        margin-bottom: 20px;
        width: calc(33% - 20px);
        min-width: 240px;
        margin-right: 10px;
        display: inline-flex;
        flex-direction: column;
        float: left;
        justify-content: space-between;
    }

    .kursy-top_menu-left_label {
        display: inline-flex;
        align-items: center;
        grid-column: 1;
        position: relative;
        cursor: pointer;
        padding: 12px 20px;
    }

    .kursy-top_menu-left_label  .kursy-top_menu-left_img_blue {
        display: none;
    }

    .kursy-top_menu-left_label  .kursy-top_menu-left_img_grey {
        display: none;
    }

    .kursy-top_menu-left_img {
        margin-right: 12px;
        height: 28px;
        width: 28px;
    }

    .kursy-top_menu-left_img img {
        width: 100%;
        height: 100%;
    }

    .kursy-top_menu-tabs_cont {
        margin-top: 24px;
    }

    .kursy-top_menu-body_item a {
        width: 100%;
        color: #101820;
        font-weight: 400;
        font-size: 14px;
        line-height: 20px;
        display: flex;
        white-space: normal;
    }

    .kursy-top_menu-body_item {
        margin-bottom: 8px;
    }

    .kursy-top_menu-right_subitems {
        grid-column: 2;
        display: none;
    }

    .kursy-top_menu-right_label {
        grid-column: 1;
    }

    .kursy-top_menu-right_fill {
        grid-column: 1;
    }

    .kursy-top_menu-tab > .kursy-top_menu-left_subitems.second {
        padding-left: 12px;
    }

    .kursy-top_menu-right_label {
        padding: 8px 0;
    }

    .kursy-top_menu-body {
        display: none;
    }

    input.kursy-top_menu_cb {
        display: none;
    }

    input.kursy-top_menu_cb:checked ~ .kursy-top_menu-body {
        display: flex;
    }

    label.kursy-open_btn {
        background: #469ED7;
        padding: 8px 16px;
        border-radius: 50pc;
        color: white;
        font-weight: bold;
        font-size: 16px;
        font-family: Inter;
        font-weight: 500;
        line-height: 24px;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
    }

    label.kursy-open_btn:hover{
        background: #2E8FCE;

    }

    label.kursy-open_btn:active{
        background: #2185C6;

    }

    .kursy-open_btn-close-img{
        display: none;
    }

    input.kursy-top_menu_cb:checked ~ .kursy-top_menu .kursy-open_btn-close-img {
        display: block;
    }

    input.kursy-top_menu_cb:checked ~ .kursy-top_menu .kursy-open_btn-open-img {
        display: none;
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

    .kursy-top_menu-body > * {
        max-width: 1440px;
        padding: 0 160px;
    }

    .kursy-top_menu-right_label a{
        color: #101820;
        font-weight: 400;
        font-size: 14px;
        white-space: initial;
        word-break: break-word;
        line-height: 20px;
    }

    .kursy-top_menu-right_label.has_child_label {
        display: inline-flex;
        justify-content: space-between;
        align-items: center;
        gap: 8px;
        padding-right: 20px;
    }

    .kursy-top_menu-right_label {
        display: inline-flex;
        justify-content: space-between;
        align-items: center;
        padding-left: 20px;
    }

    .kursy-top_menu-left_label + .kursy-top_menu-left_subitems.second {
        z-index: 10;
    }


    /*hovering*/

    /*left_part*/




    /*sub_part*/

    .kursy-top_menu-right_label-grey_chevron{
        display: none;
    }


    .kursy-top_menu-left_label a{
        color: #101820;
    }

    @media(min-width: 861px){
        .kursy-top_menu-tab > .kursy-top_menu-left_label.selected + .kursy-top_menu-left_subitems,
        .kursy-top_menu-tab:not(.hoveredChild) > .kursy-top_menu-left_label.selected + .kursy-top_menu-left_subitems{
            display: block;
            grid-column: 2;
            z-index: 10;
            padding-left: 32px;
            background: white;
        }

        .kursy-top_menu-tab.hovered .kursy-top_menu-left_label.default_selected:not(.hoveredItem) {
            background: none;
        }

        .kursy-top_menu-tab.hovered .kursy-top_menu-left_label.default_selected:not(.onHoveredChild):after {
            content: none;
        }

        .kursy-top_menu-tab.hovered .kursy-top_menu-left_label.default_selected:not(.hoveredItem) .kursy-top_menu-left_img_black {
            display: block;
        }

        .kursy-top_menu-tab.hovered .kursy-top_menu-left_label.default_selected:not(.hoveredItem) .kursy-top_menu-left_img_blue {
            display: none;
        }

        .kursy-top_menu-right_cont.hoveredDropdown .kursy-top_menu-right_label a {
            color: #101820;
        }



        .kursy-top_menu-body{
            border-top: 1px solid #F5F5F5;
        }

        .kursy-top_menu-tab:after {
            content: "";
            position: absolute;
            height: calc(100% + 32px);
            width: 1px;
            background: #F5F5F5;
            z-index: 1000;
            top: 0;
            left: 299px;
            z-index: -1;
        }

        .content.blur_bg:before {
            position: absolute;
            content: "";
            top: 0;
            left: 50%;
            width: 100vw;
            height: 100%;
            background: rgba(0,0,0,0.2);
            z-index: 100000;
            transform: translateX(-50%);
        }

        .content.blur_bg{
            position: relative;
        }

        .has_selected_childs > div > div > a,
        .has_selected_childs > div > a {
            color: #A9AAAA;
        }

        div:not(.hoveredChild) > div > .kursy-top_menu-body_item.selected a {
            color: #101820;
        }

        .kursy-top_menu-left_label.selected:not(.mobileClickedItem):after,
        .kursy-top_menu-left_label.onHoveredChild:after{
            background: #469ED7;
            border-radius: 2px;
            content: "";
            width: 7px;
            height: 24px;
            right: -1px;
            position: absolute;
        }


        .kursy-top_menu-left_label.selected:not(.mobileClickedItem),
        .kursy-top_menu-left_label.hoveredItem{
            background: #469ED714;
            border-radius: 2px;
        }


        .only_mobile{
            display: none;
        }

        .kursy-top_menu-right_label.has_child_label.only_mobile{
            display: none;
        }

        .kursy-top_menu-left_label.selected .kursy-top_menu-left_img_black,
        .kursy-top_menu-left_label.hoveredItem .kursy-top_menu-left_img_black{
            display: none;
        }

        .kursy-top_menu-left_label.selected .kursy-top_menu-left_img_blue,
        .kursy-top_menu-left_label.hoveredItem .kursy-top_menu-left_img_blue{
            display: block;
        }

        .kursy-top_menu-left_label.selected + .kursy-top_menu-left_subitems,
        .kursy-top_menu-left_label.hoveredItem + .kursy-top_menu-left_subitems{
            display: block;
            grid-column: 2;
            z-index: 10;
            padding-left: 32px;
            background: white;
        }
        .kursy-top_menu-left_label.hoveredItem ~ .kursy-top_menu-left_label.selected + .kursy-top_menu-left_subitems{
            display: none;
        }

        .kursy-top_menu-right_label.selected + .kursy-top_menu-left_subitems,
        .kursy-top_menu-right_label.hoveredItem + .kursy-top_menu-left_subitems {
            display: grid;
            grid-column: 2;
            background: white;
        }

        .kursy-top_menu-right_label.hoveredItem ~ .kursy-top_menu-right_label.selected + .kursy-top_menu-left_subitems{
            display: none;
        }

        .kursy-top_menu-right_cont.has_child {
            display: grid;
            grid-template-columns: 200px 1fr;
        }

        /* .selected + .second:not(.hoveredChild) a,
    .hoveredChild a{
        color: #A9AAAA;
    } */

        .selected + .second:not(.hoveredChild) .selected a,
        .hoveredChild.first  a:hover,
        .hoveredChild .hoveredItem a{
            color: #101820;
        }

        /* .selected + .second:not(.hoveredChild) > div > div > a, */
        .hoveredChild > div > div > a{
            color: #A9AAAA;
        }

        .selected + .second:not(.hoveredChild) .selected .kursy-top_menu-right_label-black_chevron,
        .hoveredChild.first .kursy-top_menu-right_label:hover .kursy-top_menu-right_label-black_chevron,
        .hoveredChild .hoveredItem .kursy-top_menu-right_label-black_chevron{
            display: block;
        }

        .selected + .second:not(.hoveredChild) .selected .kursy-top_menu-right_label-grey_chevron,
        .hoveredChild.first .kursy-top_menu-right_label:hover .kursy-top_menu-right_label-grey_chevron,
        .hoveredChild .hoveredItem .kursy-top_menu-right_label-grey_chevron{
            display: none;
        }

        .selected + .second:not(.hoveredChild) .kursy-top_menu-right_label-black_chevron,
        .hoveredChild .kursy-top_menu-right_label-black_chevron{
            display: none;
        }

        .selected + .second:not(.hoveredChild) .kursy-top_menu-right_label-grey_chevron,
        .hoveredChild .kursy-top_menu-right_label-grey_chevron{
            display: block;
        }

        div:not(.openDropdown) > .dropdown ~ * {
            display: none;
        }

        div > .kursy-top_menu-right_label  ~ .kursy-top_menu-right_dropdown {
            font-size: 14px;
            display: inline-flex;
            gap: 8px;
            padding-right: 20px;
            line-height: 20px;
        }

        .openDropdown .kursy-top_menu-right_dropdown,
        .kursy-top_menu-right_dropdown:hover {
            color: #469ED7;
            cursor: pointer;
        }

        .openDropdown .kursy-top_menu-right_dropdown svg path,
        .kursy-top_menu-right_dropdown:hover svg path{
            fill:#469ED7;
        }

        /* penDropdown .kursy-top_menu-right_dropdown svg, */
        .openDropdown .kursy-top_menu-right_dropdown svg{
            transform: rotateZ(180deg);
        }

        .kursy-top_menu-right_dropdown:active {
            color: #469ED7;
        }

        .kursy-top_menu-right_dropdown:active svg path{
            fill:#469ED7;
        }
    }

    @media( max-width: 1200px ){
        .kursy-top_menu-body > * {
            padding: 0 80px;
        }
    }

    @media( max-width: 1000px ){
        .kursy-top_menu-body > * {
            padding: 0 28px;
        }
    }

    @media((min-width: 861px) and (max-width: 950px)) {
    label.kursy-open_btn span {
        display: none;
    }

    .header_top_menu .ul{
        gap: 16px;
    }

    .open_search {
        max-width: 244px;
    }
    }

    @media (max-width: 860px){
        .kursy-top_menu-left_label a {
            word-break: break-word;
            white-space: normal;
        }

        .mobileClickedItem.kursy-top_menu-left_label .kursy-top_menu-left_img_black {
            display: none;
        }

        .mobileClickedItem.kursy-top_menu-left_label .kursy-top_menu-left_img_blue {
            display: block;
        }

        .mobileClickedItem {
            color: #469ed7;
        }

        .kursy-top_menu-right_dropdown{
            display: none;
        }

        .kursy-top_menu-cont {
            grid-area: list_menu;
        }

        .kursy-top_menu-tab_list {
            margin-top: 0;
        }

        .kursy-top_menu-body > * {
            padding: 24px 16px;
        }

        .kursy-top_menu-cont.selected{
            grid-area: list_menu;
        }

        .kursy-top_menu-body {
            display: block;
        }

        .kursy-top_menu-body {
            position: relative;
            left: unset;
            top: unset;
            display: block;
        }

        .kursy-top_menu-tabs_cont {
            padding: 0 16px;
        }

        .kursy-top_menu-body {
            padding-bottom: 0;
        }

        label.kursy-top_menu-tab_label {
            margin: 0;
            padding: 0;
            font-size: 32px;
            line-height: 46px;
            font-weight: 600;
            color: #101820;
            background: none;
            margin-bottom: 16px;
        }

        label.kursy-top_menu-tab_label:active {
            color: #469ED7;

        }

        label.kursy-top_menu-left_label.only_mobile svg {
            transform: rotateZ(180deg);
            margin-right: 16px;
        }

        label.kursy-top_menu-left_label.only_mobile p {
            font-size: 16px;
            line-height: 28px;
            font-weight: 400;
        }

        .kursy-top_menu-tabs_cont {
            flex-direction: column;
        }

        .kursy-top_menu-tab {
            grid-template-columns: 1fr;
            position: fixed;
            background: white;
            top: 88px;
            left: 0;
            right: 0;
        }

        .kursy-top_menu-left_label.selected, .kursy-top_menu-left_label.hoveredItem{
            overflow: hidden;
        }

        .kursy-top_menu-left_label:nth-child(2) {
            border-top: 1px solid #F5F5F5;
        }

        .kursy-top_menu-left_label {
            margin-left: 56px;
            /* pointer-events: none; */
            overflow: hidden;
            border-bottom: 1px solid #F5F5F5;
        }

        label.kursy-top_menu-left_label {
            margin-left: 16px;
            border-bottom: 0;
        }

        .kursy-top_menu-left_label {
            font-size: 16px;
            line-height: 28px;
            padding-left: 0;
        }

        .kursy-top_menu-left_label.mobileClickedItem {
            border-bottom: 0;
            margin-left: 0;
        }

        img.kursy-top_menu-left_img_black {
            display: none;
        }

        .kursy-top_menu-left_label .kursy-top_menu-left_img_black {
            display: block;
        }

        .kursy-top_menu-left_img {
            margin-right: 16px;
            min-width: 28px;
        }


        .kursy-top_menu-tab {
            flex-direction: column;
            height: calc(100% - 88px);
        }

        .kursy-top_menu-tab.hideItems > .kursy-top_menu-left_label {
            display: none;
        }

        .kursy-top_menu-left_label.mobileClickedItem + .kursy-top_menu-left_subitems {
            display: inline-flex;
        }

        .kursy-top_menu-tab {
            display: none;
            overflow: auto;
        }


        .kursy-top_menu-left_label.mobileClickedItem + .kursy-top_menu-left_subitems {
            grid-row: unset!important;
            flex-direction: column;
            padding-left: 40px;
        }

        .kursy-top_menu-block {
            width: 100%;
            margin: 0;
            min-width: unset;
        }

        .kursy-top_menu-body_item a {
            font-size: 16px;
            line-height: 28px;
            padding: 12px 16px;
            border-bottom: 1px solid #F5F5F5;
        }

        .kursy-top_menu-tab.hideItems > .kursy-top_menu-left_label.mobileClickedItem {
            display: inline-flex;
            min-height: 30px;
            box-sizing: content-box;
        }

        .kursy-top_menu-left_label.mobileClickedItem ~ label {
            display: none;
        }

        .kursy-top_menu-block:first-child {
            border-top: 1px solid #F5F5F5;
        }

        .kursy-top_menu-body_item {
            margin: 0;
        }

        .kursy-top_menu-left_label.mobileClickedItem .section_back_btn{
            transform: rotateZ(180deg);
            margin-right: 16px;
            display: flex;
        }

        .kursy-top_menu-left_label.mobileClickedItem {
            padding-left: 16px;
        }

        .section_back_btn{
            display: none;
        }

        .kursy-top_menu-right_cont.has_child{
            display: inline-flex;
            width: 100%;
            flex-direction: column;
        }

        .kursy-top_menu-right_label a {
            font-size: 16px;
            line-height: 28px;
        }

        .kursy-top_menu-right_label {
            align-items: center;
            padding: 16px 12px;
            padding-left: 0;
            margin-left: 16px;
            border-bottom: 1px solid #F5F5F5;
        }

        .kursy-top_menu-right_label svg {
            width: 24px;
            height: 24px;
        }

        .kursy-top_menu-tab.hideItems > .kursy-top_menu-left_label.mobileClickedItem.openedChildHide,
        .kursy-top_menu-right_label.openedChildHide{
            display: none;
        }

        .kursy-top_menu-left_label.mobileClickedItem.openedChildHide + .kursy-top_menu-left_subitems{
            padding-left: 0;
            padding-top: 0;
        }

        .kursy-top_menu-right_label.openedChildHide + .kursy-top_menu-left_subitems > .kursy-top_menu-right_cont > .kursy-top_menu-right_label:not(.mobileClickedItem),
        .kursy-top_menu-left_label.openedChildHide + .kursy-top_menu-left_subitems > .kursy-top_menu-right_cont > .kursy-top_menu-right_label:not(.mobileClickedItem){
            display: none;
        }

        .kursy-top_menu-right_label.mobileClickedItem + .kursy-top_menu-left_subitems{
            display: flex;
            padding-left: 40px;
        }

        .kursy-top_menu-right_label.mobileClickedItem {
            width: max-content;
            flex-direction: row-reverse;
            align-self: flex-start;
            padding: 12px 16px;
            border-bottom: 0;
            margin-left: 0;
        }

        .kursy-top_menu-right_label:first-child {
            border-top: 1px solid #F5F5F5;
        }

        .selected + .second:not(.hoveredChild) .kursy-top_menu-right_label.mobileClickedItem .kursy-top_menu-right_label-grey_chevron {
            display: none;
        }

        .selected + .second:not(.hoveredChild) .mobileClickedItem .kursy-top_menu-right_label-black_chevron,
        .mobileClickedItem .kursy-top_menu-right_label-black_chevron {
            display: block;
            transform: rotate(180deg);
            display: flex;
            margin-right: 16px;
        }

        .kursy-top_menu-left_label:active {
            color: #469ED7;
        }

        .kursy-top_menu-left_label:active img.kursy-top_menu-left_img_black {
            display: none;
        }

        .kursy-top_menu-left_label:active img.kursy-top_menu-left_img_blue {
            display: block;
        }

        .kursy-top_menu-body_item a:active {
            color: #469ED7;
        }

        .kursy-top_menu-right_label a:active {
            color: #469ED7;
        }
    }

    /* End */
    /* Start:/local/components/sigodinweb/search/templates/.default/style.css?16905244514445*/
    .open_search.close .search_page-content{
        display: none;
    }


    .search_page-content .search-form {
        padding-bottom: 30px;
    }

    .search_page-content {
        position: absolute;
        top: 100%;
        z-index: 100000;
        background: white;
        left: 0;
        display: flex;
        flex-direction: column;
        right: 0;
        box-shadow: 0px 9px 10px -3px rgb(0 0 0 / 5%);
    }

    .search_page-close_btn,
    .search_page-open_btn{
        cursor: pointer;
    }

    .search_page-open_btn.mobile{
        display: none;
    }

    .search_page-header .search-form {
        width: 100%;
        position: relative;
        margin-right: 40px;
        display: inline-flex;
        height: 40px;
        align-items: center;
    }

    .search_page-header .search-form input[type="reset"], .search_page-header .search-form input[type="submit"] {
        display: none;
    }

    .search_page-header .search-form input[type="text"] {
        width: 100%;
        font-weight: 400;
        font-size: 18px;
        line-height: 21px;
        color: #101820;
        border: none;
        outline: none;
    }


    .search_page-header .search-form input[type="text"] {
        border: 1px solid #D9D9D9;
        border-radius: 100px;
        padding: 8px  56px;
        width: 100%;
        display: inline-flex;
        height: 40px;
        align-items: center;
    }

    .search_page-header .search-form input[type="text"]:focus {
        border: 1px solid #469ED7;
    }

    .search_page-header label {
        display: flex;
        cursor: pointer;
        position: absolute;
        right: 24px;
        /* width: 16px;
  height: 16px; */
    }

    .search_head {
        font-weight: 600;
        font-size: 32px;
        line-height: 42px;
        color: #101820;
        margin-bottom: 32px;
        margin-top: 42px;
    }

    .search_page-content_close {
        position: relative;
        bottom: -42px;
        display: flex;
        cursor: pointer;
    }

    .search_page-close_cont {
        display: inline-flex;
        height: 0;
        justify-content: flex-end;
    }

    .search_page-content_close:hover path {
        fill: #469ED7;
    }

    .search_page-content_close {
        position: relative;
        bottom: -42px;
        display: flex;
        cursor: pointer;
    }

    .search_page-close_cont {
        display: inline-flex;
        height: 0;
        justify-content: flex-end;
    }

    .search_page-content{
        padding-bottom: 100px;
        max-width: unset;
        z-index: 1000000;
        width: 100%;
        margin: auto;

    }

    .schools_search_sections .row,
    .blog_search_sections .row {
        display: grid;
        grid-gap: 20px;
        grid-template-columns: 1fr 1fr;
    }

    .schools_search_sections .row .product-item-container, .schools_search_sections .row .product-item {
        height: 100%;
    }

    p.search_page-empty_filler{
        font-weight: 600;
        font-size: 32px;
        line-height: 46px;
        color: #101820;
        margin-top: 80px;
    }

    img.search_page_reset_img {
        opacity: 0;
        width: 0px;
    }

    label.search_page-submit_label {
        left: 24px;
        right: unset;
    }

    @media (min-width: 860px) {
        .search_page-close_btn img,
        .search_page-close_btn p{
            display: none;
        }
    }

    @media (max-width: 860px) {

        .search_page-close_cont{
            display: none;
        }

        .search_page-open_btn.mobile{
            display: block;
        }

        .search_page-main_cont {
            height: 100%;
        }

        .search_page-content {
            position: unset;
            height: 100%;
            box-shadow: none;
        }

        .kurses_search_sections .product-item-list-col-3 {
            white-space: initial;
            display: block;
        }

        .search_page-close_btn p{
            display: block;
        }

        .search_page-close_btn.mobile p{
            margin: 0;
            padding: 0;
        }

        .search_page-content .max-width {
            overflow: auto;
        }

        .search_page-content .max-width{
            padding-bottom: 40px;
        }

        .search_page-close_btn img{
            display: none;
        }

        p.search_page-empty_filler{
            font-weight: 600;
            font-size: 24px;
            line-height: 32px;
            color: #101820;
            margin-top: 20px;
        }

        .search_page-content.max-width {
            overflow: auto;
        }

        .search_page-header .search-form input[type="text"]{
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            color: #101820;
        }


        .schools_search_sections .row,
        .blog_search_sections .row {
            grid-template-columns: 1fr;
        }


        .catalog-section.kurses_search_sections .kurse_card.card_pc {
            width: 100%;
            max-width: unset;
        }

        .search_page-header {
            display: inline-flex;
            width: 100%;
            align-content: center;
            padding: 30px 16px;
        }

        .search_page-close_btn.mobile {
            display: flex;
            align-items: center;
        }

        .search_page-header .search-form {
            margin-right: 12px;
        }
    }

    /* End */


    /* Start:/local/templates/kursi/components/bitrix/search.suggest.input/.default/style.css?1690524452501*/
    input.search-suggest {}
    div.search-popup{border: 1px solid #333333;background: #FFFFFF;padding: 2px;margin: 0px;}
    div.search-popup-row, div.search-popup-row-active{position: relative; padding: 2px 4px;margin: 0px;cursor: hand;cursor: pointer;}
    div.search-popup-row{background:#FFFFFF;}
    div.search-popup-row-active{background:#EEEEEE;}
    div.search-popup-el-name, div.search-popup-el-cnt{position: relative; margin:0px;padding:0px;text-align:left;}
    div.search-popup-el-cnt{text-align:right; float:right;}
    /* End */


    /* Start:/local/templates/kursi/components/bitrix/menu/header_top/style.css?169052445210566*/
    .header_top_menu > .ul{
        align-items: center;
    }

    .header_top_menu .ul {
        list-style: none;
        height: 100%;
        display: inline-flex;
        flex-direction: row;
        gap: 40px;
    }

    .header_top_menu > .ul > .li {
        height: 100%;
        display: flex;
    }

    .header_top_menu a,
    .header_top_menu p {
        color: #101820;
        text-decoration: none;
        font-size: 16px;
        font-weight: 500;
    }

    .header_top_menu a:active,
    .header_top_menu p:active {
        color: #469ED7;
    }


    .header_top_menu-text.selected a{
        color: #101820;
    }

    .header_top_menu .ul.second_lvl {
        display: none;
    }

    .first_lvl > .li > .header_top_menu-text{
        display: flex;
    }

    .ul.second_lvl > .li > .ul_cont{
        position: absolute;
        height: 100%;
        display: none;
        top: 88px;
        right: 160px;
        left: 160px;
        grid-template-columns: minmax(250px, 25%) auto;

        overflow: auto;
    }

    .ul.second_lvl > .li > .header_top_menu-text {
        position: relative;
        z-index: 100000;
    }

    .header_top_menu-text a {
        color: #101820;
    }

    .header_top_menu-text a:hover {
        color: #469ED7;
    }

    .block {
        margin-bottom: 20px;
        width: calc(33% - 20px);
        min-width: 240px;
        margin-right: 10px;
        display: inline-flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .menu_filler{
        height: 28px;
    }

    .li {
        cursor: pointer;
    }
    .ul.third_lvl a {
        line-height: 20px;
        font-size: 14px;
        margin-bottom: 8px;
    }

    .ul.third_lvl a {
        color: #101820;
    }
    .ul.second_lvl > .li > .header_top_menu-text > a, .ul.second_lvl > .li > .header_top_menu-text > p {
        padding: 14px;
        /* display: block; */
        overflow-wrap: anywhere;
        color: #101820;
    }

    .first_lvl > .li > .ul_cont:before {
        content: "";
        background: rgba(16, 24, 32, 0.08);
        position: absolute;
        z-index: 10000;
        width: 100%;
        top: 48px;
        height: 1px;
    }

    .ul.third_lvl {
        grid-column-start: 2;
        grid-column-end: 2;
        display: inline-flex;
        justify-content: flex-start;
        align-self: baseline;
        align-content: start;
        margin: 0 20px;
        flex-flow: wrap;
        margin-left: 60px;
    }

    .header_top_menu-text{
        display: flex;
        align-items: center;
    }

    .mobile_next_btn, .header_top_menu-mobile_back_btn{
        display: none;
    }


    .ul.first_lvl > .li > .ul_cont{
        position: absolute;
        top: calc(100% - 48px);
        left: 0;
        overflow: hidden;
        display: none;
        background: white;
        height: auto;
        right: 0;
        padding-bottom: 200px;
        box-shadow: 0px 9px 10px -3px rgb(0 0 0 / 5%);
    }


    img.section_img {
        display: none;
        width: 28px;
        height: 28px;
    }

    .header_top_menu-mobile_subback_btn{
        display: none;
    }

    .ul.first_lvl > .li > .ul_cont {
        background: white;
        z-index: 10000000;
    }


    @media( max-width: 1000px ){
        .first_lvl > .li > .ul_cont:before {
            top: 28px;
        }

        .ul.first_lvl > .li > .ul_cont{
            top: calc(100% - 28px);
            height: calc(100vh - 100% + 28px);
        }
    }

    @media(min-width:860px){
        img.section_img.black_img{
            display: block;
        }




        .ul.second_lvl:not(:hover) > .li.header_menu-selected_parent > .header_top_menu-text > .section_img.black_img,
        .ul.second_lvl > .li:hover > .header_top_menu-text > .section_img.black_img{
            display:none;
        }

        .ul.second_lvl:not(:hover) > .li.header_menu-selected_parent > .header_top_menu-text > .section_img.blue_img,
        .ul.second_lvl > .li:hover > .header_top_menu-text > .section_img.blue_img{
            display:block;
        }

        .ul.second_lvl:not(:hover) > .li.header_menu-selected_parent > .ul_cont,
        .ul.second_lvl > .li:hover > .ul_cont {
            background: white;
            display: grid;
        }

        .ul.second_lvl > .li:hover > .ul_cont {
            display: grid;
            z-index: 1000;
        }

        .ul.third_lvl a:hover {
            color: #469ED7;
        }
        .ul.second_lvl:not(:hover) > .li.header_menu-selected_parent > .header_top_menu-text > a:after, .ul.second_lvl > .li.header_menu-selected_parent > .header_top_menu-text > p:after,
        .ul.second_lvl > .li:hover > .header_top_menu-text > a:after, .ul.second_lvl > .li:hover > .header_top_menu-text > p:after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            min-width: calc(100% + 160px);
            width: calc(((100vw - 1440px) / 2) + (100% + 160px));
            right: 0;
            max-width: 500px;
            background: rgba(70, 158, 215, 0.08);
            border-radius: 2px;
        }
        .ul.second_lvl:not(:hover) > .li.header_menu-selected_parent > .header_top_menu-text > a:before, .ul.second_lvl > .li.header_menu-selected_parent > .header_top_menu-text > p:before,
        .ul.second_lvl > .li:hover > .header_top_menu-text > a:before, .ul.second_lvl > .li:hover > .header_top_menu-text > p:before {
            content: "";
            position: absolute;
            width: 7px;
            height: 24px;
            background: green;
            right: 0;
            top: 50%;
            background: #469ED7;
            border-radius: 2px;
            transform: translateY(-50%);
        }
        .header_top_menu .li:hover > .ul_cont > .second_lvl {
            display: grid;
            max-width: 1440px;
            margin: auto;
            width: 100%;
            padding: 48px 160px;
            flex-direction: column;
            grid-template-columns: minmax(250px, 25%);
            position: relative;
            padding-top: calc(48px + 40px - 14px);
            height: calc(100vh - 100%);
            background: white;
            height: auto;
            margin-top: 0;
        }
        .header_top_menu .first_lvl > .li:hover > .ul_cont{
            display: inline-flex;
        }

        @media( max-width: 1000px ){
            .header_top_menu .li:hover > .ul_cont > .second_lvl {
                padding: 28px;
                padding-top: calc(28px + 40px - 14px);
            }

            .ul.second_lvl > .li:hover > .ul_cont{
                right: 28px;
                left: 28px;
                top: calc(28px + 40px);
            }
        }

        .block.mobile_show_all{
            display: none;
        }

    }

    @media(max-width:860px){

        .header_top_menu a, .header_top_menu p {
            font-size: 32px;
            line-height: 46px;
            font-weight: 600;
        }

        .header_top_menu > .ul > .li {
            margin-bottom: 16px;
            width: 100%;
        }

        .header_top_menu > .ul {
            flex-direction: column;
            width:  calc(100% - 16px);
            align-items: flex-start;
            font-size: 32px;
            gap: 0;
            height: auto;
            /* position: relative; */
            overflow: auto;
            overflow-x: hidden;
        }

        .header_top_menu {
            height: 100%;
        }

        .header_top_menu .li > .ul_cont > .second_lvl {
            grid-template-columns: 1fr;
            width: 100%;
            position: relative;
            height: unset;
        }

        .ul.first_lvl > .li > .ul_cont > .ul > .li > * {
            left: 16px;
        }

        .ul.first_lvl > .li > .ul_cont {
            top: 0;
            left: 0;
            overflow: auto;
            right: 0;
            bottom: 0;
            padding-bottom: 20px;
            height: auto;
        }


        .ul.second_lvl {
            flex-direction: column;
        }


        .ul.second_lvl > .li > .header_top_menu-text > a, .ul.second_lvl > .li > .header_top_menu-text > p {
            padding: 14px 28px;
            width: 100%;
            border-bottom: 1px solid #f5f5f5;
            padding-left: 0;
            font-size: 16px;
            line-height: 28px;
            font-weight: 400;
        }

        .first_lvl > .li > .ul_cont:before{
            display: none;
        }

        img.section_img.grey_img {
            display: block;
            width: calc(28px + 16px);
            padding-right: 16px;
        }

        .ul.second_lvl > .li > .ul_cont {
            z-index: 1000000000;
            top: 57px;
            left: 0;
            background: white;
            right: 0px;
            min-height: 100%;
            overflow: unset;
            /* bottom: 0; */
        }

        .ul.second_lvl.open_submenu > .li {
            display: none;
        }

        .ul.second_lvl.open_submenu > .header_top_menu-mobile_back_btn {
            display: none;
        }

        .ul.second_lvl.open_submenu > .showed_submenu {
            display: unset;
        }

        .ul.second_lvl.open_submenu > .showed_submenu > .ul_cont {
            display: unset;
            position: unset;
        }

        .header_top_menu-mobile_subback_btn {
            display: none;
        }

        .li.showed_submenu .header_top_menu-mobile_subback_btn {
            display: unset;
        }

        body.menu_no_scroll {
            overflow: hidden;
        }

        .ul.first_lvl.open_menu > .li > .header_top_menu-text {
            display: none;
        }

        .li.showed_menu > .ul_cont {
            display: unset;
        }

        .ul.first_lvl > .li.showed_menu > .ul_cont, .ul.first_lvl > .li.showed_menu > .ul_cont > .ul {
            display: unset;
            overflow-x: hidden;
        }

        .mobile_next_btn{
            transform: rotateZ(180deg);
        }

        .header_top_menu-text > a {
            display: inline-flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
        }

        .li.showed_submenu > div > a > .mobile_next_btn {
            display: none;
        }

        .li.showed_submenu > .header_top_menu-text .black_img {
            display: block;
            width: calc(28px + 16px);
            padding-right: 16px;
        }

        .header_top_menu-mobile_subback_btn img {
            height: 100%;
            display: flex;
        }

        .li.showed_submenu > .header_top_menu-text .grey_img {
            display: none;
        }

        .li.showed_submenu > .ul_cont > .ul {
            display: block;
            margin: 0;
            margin-left: 56px;
        }

        .li.showed_submenu > .ul_cont > .ul > .block {
            margin: 0;
            width: 100%;
        }

        .li.showed_submenu > .ul_cont > .ul > .block > .li {
            padding: 14px 0;
            padding-right: 54px;
            font-weight: 400;
            font-size: 16px;
            line-height: 28px;
            color: #101820;
            border-bottom: 1px solid #F5F5F5;
        }

        .li.showed_submenu > a {border: none;}

        .ul.second_lvl > .li.showed_submenu > .header_top_menu-text > a {
            border: none;
        }

        .li.showed_submenu > .header_top_menu-text:after {
            border-bottom: 1px solid #F5F5F5;
            position: absolute;
            content: "";
            width: 100vw;
            bottom: 0;
            right: 8px;
        }

        .header_top_menu-mobile_back_btn {
            font-weight: 400;
            font-size: 16px;
            line-height: 28px;
            display: inline-flex;
            color: #101820;
            align-items: center;
        }

        .header_top_menu-mobile_back_btn img {
            margin: 0 12px;
        }

    }

    /* End */


    /* Start:/local/templates/kursi/components/bitrix/breadcrumb/breadChumb/style.css?16905244511030*/
    .bx-breadcrumb {
        /* margin: 0 auto;
    padding: 0 160px;
    max-width: 1440px; */
        margin-bottom: 10px;
    }
    .separator {
        margin: 0 5px;
    }
    .bx-breadcrumb .bx-breadcrumb-item.last-element span {
        color: black;
    }

    .bx-breadcrumb i {
        color: #b5bdc2;
        line-height: 13px;
        font-size: 12px;
        vertical-align: middle;
        margin-right: 5px;
    }
    .bx-breadcrumb .bx-breadcrumb-item {
        /* float: left; */
        /* margin-bottom: 10px; */
        /* white-space: nowrap; */
        line-height: 13px;
        /* vertical-align: middle; */
        /* display: inline-flex; */
    }

    .bx-breadcrumb .bx-breadcrumb-item span, .bx-breadcrumb .bx-breadcrumb-item .separator, .bx-breadcrumb .bx-breadcrumb-item a {
        color: #A9AAAA;
        text-decoration: none;
    }

    .bx-breadcrumb .bx-breadcrumb-item span, .bx-breadcrumb .bx-breadcrumb-item .separator {
        font-size: 16px;
        white-space: normal;
        line-height: 24px;
        font-weight: 500;
    }
    .bx-breadcrumb .bx-breadcrumb-item a {border-bottom: none;}
    .bx-breadcrumb .bx-breadcrumb-item a:hover { text-decoration: underline;}

    /* End */


    /* Start:/local/templates/kursi/components/bitrix/menu/footer_left/style.css?1690524452346*/
    .footer_left_menu ul {
        list-style: none;
    }

    .footer_left_menu a {
        color: white;
        margin-bottom: 12px;
        display: block;
        text-decoration: none;
        font-size: 18px;
        font-weight: 500;
        line-height: 28px;
    }

    .footer_left_menu a:hover {
        color: #469ED7;
    }

    .footer_left_menu-text{
        display: flex;
    }
    /* End */

    /* Start:/local/templates/kursi/components/bitrix/sender.subscribe/kursy_subscribe/style.css?16843010502805*/
    label.sub_section_id {
        display: none;
    }

    .subscribe-form {
        color: white;
        background: #101820;
    }

    .subscribe-form button {
        width: 48px;
        height: 48px;
        background: url(/local/templates/kursi/components/bitrix/sender.subscribe/kursy_subscribe/images/send.svg);
        border: none;
        background-size: contain;
        cursor: pointer;
    }

    .subscribe-form form {
        display: grid;
        grid-template-columns: 1fr 48px;
        column-gap: 12px;
    }

    label.bx-input_error {
        font-size: 12px;
        line-height: 15px;
        color: #E75050;
    }

    .subscribe-form input[type="email"],
    .subscribe-form input[type="text"] {
        /* margin-right: 12px; */
        width: 100%;
        border-radius: 8px;
        border: 1px solid rgba(217, 217, 217, 0.2);
        background: rgba(255, 255, 255, 0.1);
        font-size: 16px;
        line-height: 24px;
        padding: 12px;
        height: 46px;
        outline: none;
    }

    p.subscribe_form-title {
        margin-bottom: 24px;
        font-weight: 600;
        font-size: 18px;
        line-height: 24px;
    }

    .subscribe-form input[type="email"]:hover, .subscribe-form input[type="email"]:not(:placeholder-shown),
    .subscribe-form input[type="text"]:hover, .subscribe-form input[type="text"]:not(:placeholder-shown),
    .subscribe-form input[type="email"]:active, .subscribe-form input[type="email"]:focus,
    .subscribe-form input[type="text"]:active, .subscribe-form input[type="text"]:focus {
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(217, 217, 217, 0.5);
        color: white;
    }

    .subscribe-form button:hover {
        background: url(/local/templates/kursi/components/bitrix/sender.subscribe/kursy_subscribe/images/send_hover.svg);
        border-radius: 8px;
        background-color: #2E8FCE;
    }

    .subscribe-form button:active {
        background: url(/local/templates/kursi/components/bitrix/sender.subscribe/kursy_subscribe/images/send_hover.svg);
        border-radius: 8px;
        background-color: #2185C6;
    }

    #sender_subscribe_component {
        border-radius: 20px;
        padding: 32px;
        color: #101820;
        font-size: 24px;
        line-height: 30px;
        font-weight: 500;
        text-align: center;
        margin:  0 20px;
    }

    #sender_subscribe_component .popup-window-buttons {
        padding-bottom: 0;
        padding-top: 24px;
    }

    .subscribe-popup_close {
        background: #469ED7;
        border-radius: 100px;
        border: none;
        color: white;
        text-transform: capitalize;
        font-size: 18px;
        line-height: 24px;
        padding: 12px 42px;
        font-weight: 500;
        height: auto;
        box-shadow: none;
    }

    .subscribe-popup_close:hover {
        background: #2E8FCE;
        color: white;
    }

    .subscribe-popup_close:active {background: #2185C6;color: white;}


    .subscribe-form input[type="email"].input_error {
        border: 1px solid #E75050;
    }

    @media(max-width: 860px){
        #sender_subscribe_component {padding: 24px;}
    }

    /* End */


    /* Start:/local/templates/kursi/components/bitrix/news.list/footer_sociallist/style.css?1690524452446*/
    .social_links-list{
        display: inline-flex;
    }

    .social_links-list a, .social_links-list p {
        display: flex;
    }

    .social_links-list a {
        margin-right: 12px;
    }

    .social_links-list a img.blue_icon {
        display: none;
    }

    .social_links-list a:hover img.blue_icon {
        display: block;
    }

    .social_links-list a:hover img.white_icon {
        display: none;
    }

    .social_links-list a img {
        width: 40px;
        height: 40px;
    }

    /* End */


    /* Start:/local/templates/kursi/components/bitrix/menu/footer_bottom/style.css?1690524452614*/
    .footer_bottom_menu ul {
        list-style: none;
        display: inline-flex;
        flex-direction: row;
    }

    .footer_bottom_menu li {
        margin-right: 30px;
    }

    .footer_bottom_menu a {
        color: white;
        text-decoration: none;
        font-size: 12px;
        line-height: 15px;
        font-weight: 500;
    }

    .footer_bottom_menu a:hover {
        color: #469ED7;
    }

    @media(max-width: 700px){
        .footer_bottom_menu li{
            margin-right: 10px;
        }
    }

    @media(max-width: 640px){
        .footer_bottom_menu ul {
            flex-direction: column;
        }

        .footer_bottom_menu a {
            padding-bottom: 8px;
            display: block;
        }
    }

    /* End */


    /* Start:/bitrix/components/niges/cookiesaccept/templates/.default/style.css?16781139462729*/
    /* NIGES.COOKIESACCEPT */

    .nca-cookiesaccept-line {
        font-size: inherit;
        font-family: inherit;
        line-height: 1;
        padding: 10px;
    }


    .nca-cookiesaccept-line.style-1 .nca-cookiesaccept-line-text,
    .nca-cookiesaccept-line.style-3 .nca-cookiesaccept-line-text,
    .nca-cookiesaccept-line.style-5 .nca-cookiesaccept-line-text,
    .nca-cookiesaccept-line.style-7 .nca-cookiesaccept-line-text {
        color:#111;
    }
    .nca-cookiesaccept-line.style-2 .nca-cookiesaccept-line-text,
    .nca-cookiesaccept-line.style-4 .nca-cookiesaccept-line-text,
    .nca-cookiesaccept-line.style-6 .nca-cookiesaccept-line-text,
    .nca-cookiesaccept-line.style-8 .nca-cookiesaccept-line-text {
        color:#eee;
    }

    .nca-cookiesaccept-line.style-1 {
        /* background-position: center;
    background-repeat: repeat-x;
	background-image: url(/bitrix/components/niges/cookiesaccept/templates/.default/images/style-1-2.svg);
    background-size: contain; */
        background-color: rgb(61, 168, 255);
    }

    .nca-cookiesaccept-line.style-2 {
        background-color: rgb(13, 62, 102);
    }


    .nca-cookiesaccept-line.style-3 {
        background-color: rgb(197, 197, 197);
    }

    .nca-cookiesaccept-line.style-4 {
        background-color: rgb(71, 71, 71);
    }

    .nca-cookiesaccept-line.style-5 {
        background-color: rgb(61, 255, 158);
    }

    .nca-cookiesaccept-line.style-6 {
        background-color: rgb(9, 92, 50);
    }

    .nca-cookiesaccept-line.style-7 {
        background-color: rgb(84, 255, 61);
    }

    .nca-cookiesaccept-line.style-8 {
        background-color: rgb(92, 5, 5);
    }

    .nca-cookiesaccept-line.style-9 {
        background-color: rgb(203, 255, 61);
    }

    .nca-cookiesaccept-line.style-10 {
        background-color: rgb(70, 94, 4);
    }

    .nca-cookiesaccept-line.style-11 {
        background-color: rgb(255, 148, 61);
    }

    .nca-cookiesaccept-line.style-12 {
        background-color: rgb(138, 70, 14);
    }

    .nca-cookiesaccept-line.style-13 {
        background-color: rgb(255, 61, 61);
    }

    .nca-cookiesaccept-line.style-14 {
        background-color: rgb(119, 22, 22);
    }

    .nca-cookiesaccept-line.style-15 {
        background-color: rgb(255, 61, 152);
    }

    .nca-cookiesaccept-line.style-16 {
        background-color: rgb(85, 10, 45);
    }

    .nca-cookiesaccept-line.style-17 {
        background-color: rgb(83, 129, 255);
    }

    .nca-cookiesaccept-line.style-18 {
        background-color: rgb(6, 37, 122);
    }


    .nca-cookiesaccept-line.style-19 {
        background-color: rgb(255, 255, 255);
    }

    .nca-cookiesaccept-line.style-20 {
        background-color: rgb(0, 0, 0);
    }


    @media screen and (min-width:767.01px) {
        .nca-hidden-pc {display: none !important;}
    }
    @media screen and (max-width:767px) {
        .nca-hidden-mobile {display: none !important;}
    }
    /* End */


    /* Start:/local/templates/kursi/styles.css?16905244523722*/
    @font-face {
        font-family: "Emo";
        src: local("/local/templates/kursi/NotoEmoji-Regular.ttf");
    }

    .test {
        font-family: "Emo", serif;
    }

    /*---- ABOUT PAGE ----*/

    .about_head.page_head {
        margin-bottom: 120px;
    }

    .about-total {
        display: inline-flex;
        width: 100%;
        justify-content: space-between;
        margin-bottom: 55px;
        flex-flow: wrap;
    }

    .about-total_head {
        display: inline-flex;
        align-items: center;
    }

    .about-total_head img {
        margin-right: 16px;
    }

    .about-total_head p {
        font-weight: 600;
        font-size: 48px;
        line-height: 150%;
        color: #1C120B;
    }

    .about-total_text {
        font-weight: 500;
        font-size: 20px;
        line-height: 32px;
        color: #1C120B;
    }

    .about-total_cont {
        margin-right: 20px;
        margin-bottom: 65px;
    }

    @media(max-width: 860px){
        .about_head.page_head{
            margin-bottom: 32px;
            row-gap: 20px;
        }

        .about-total_cont{
            margin-bottom: 20px;
        }

        .about-total{
            margin-bottom: 40px;
        }

        .about-total_head p {
            font-size: 40px;
        }

        .about-total_text {
            font-size: 16px;
            line-height: 24px;
        }
    }


    /*---- 404 PAGE ----*/

    .page_404_sect {
        margin-bottom: 80px;
    }

    @media(min-width: 861px){
        .page_404-info_cont {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 85px 0;
        }

        img.page_404_img {
            margin-right: 80px;
        }

        p.page_404_text {
            font-weight: 400;
            font-size: 24px;
            line-height: 32px;
            color: #101820;
        }
    }

    @media(max-width: 860px){
        img.page_404_img {
            width: 100%;
            padding: 10vw;
        }

        p.page_404_text {
            text-align: center;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;
            text-align: center;
            color: #101820;
            padding: 10vw;
        }
    }

    /*---- INDEX PAGE ----*/

    .index_head.page_head {
        grid-template-columns: 5fr 5fr;
        margin-bottom: 80px;
    }

    .index_head-img.page_head-img img {
        width: 100%;
    }

    .index_subtitle {
        margin-top: 120px;
        margin-bottom: 60px;
        font-weight: 600;
        font-size: 32px;
        line-height: 46px;
        color: #101820;
    }

    @media(max-width: 860px){
        .index_subtitle {
            margin-top: 80px;
            margin-bottom: 40px;
            font-size: 24px;
            line-height: 31px;
        }


        .index_head.page_head{
            grid-template-areas: "title" "img" "desk";
            grid-template-columns: auto;
        }
    }

    /*---- TEXT PAGE ----*/

    .text_page > * {
        max-width: 68%;
    }

    .text_page h1 {
        font-weight: 700;
        font-size: 53px;
        line-height: 63px;
        color: #101820;
        margin: 80px 0;
        margin-bottom: 64px;
    }

    .text_page h2 {
        font-weight: 600;
        font-size: 32px;
        line-height: 42px;
        color: #101820;
        margin: 40px 0;
        margin-top: 56px;
    }

    .text_page p {
        font-weight: 400;
        font-size: 18px;
        line-height: 27px;
        color: #101820;
        margin: 24px 0;
    }

    .text_page a {
        color: #469ED7;
        text-decoration: none;
    }

    .text_page {
        margin-bottom: 100px;
    }

    @media(max-width: 860px){


        .text_page > * {
            max-width: unset;
        }

        .text_page h1 {
            font-size: 32px;
            line-height: 42px;
            margin: 28px 0;
        }

        .text_page h2 {
            font-size: 24px;
            line-height: 31px;
            margin: 24px 0;
            margin-top: 36px;
        }

        .text_page p {
            font-size: 16px;
            line-height: 24px;
            margin: 24px 0;
        }

        .text_page {
            margin-bottom: 80px;
        }

    }

    /*---- SITE MAP ----*/
    .sitemap_cont {
        display: flex;
        flex-flow: wrap;
        margin-bottom: 52px;
    }

    /* End */


    /* Start:/local/templates/kursi/template_styles.css?169077817443155*/
    /*---Main---*/


    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: Inter, Montserrat, sans-serif;
    }

    html {
        overflow-x: hidden;
    }

    a{
        color: #469ED7;
        text-decoration: none;
    }

    .max-width{
        max-width: 1440px;
        margin: 0 auto;
        width: 100%;
        padding: 0 160px;
    }

    @media (max-width: 1200px){
        .max-width {
            padding: 0 80px;
        }

    }

    @media (max-width: 1000px){
        .max-width {
            padding: 0 28px;
        }

    }

    @media (max-width: 860px){
        .max-width {
            padding: 0 16px;
        }

    }


    pre {
        display: block;
        padding: 9.5px;
        margin: 0 0 10px;
        font-size: 13px;
        line-height: 1.42857143;
        color: #333;
        word-break: break-all;
        word-wrap: break-word;
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    /*---Header---*/

    header .top{
        overflow-x: hidden;

    }

    header {
        flex-direction: column;
        display: inline-flex;
        width: 100%;
    }

    .top {
        display: inline-flex;
        width: 100%;
        justify-content: flex-start;
        padding: 32px 160px;
        align-items: center;
    }

    .top-cont {
        position: relative;
        display: flex;
    }


    .header_right_side {
        display: inline-flex;
        grid-template-columns: auto auto;
        width: 100%;
        align-items: center;
    }

    .menu {
        height: 100%;
        margin-left: 16px;;
    }

    .header_top_menu {
        height: 100%;
    }


    @media( min-width: 861px ){

        .mobile-logo,
        .header_right_side-modile_close,
        .header_right_side-modile_open{
            display: none;
        }
    }

    @media( max-width: 860px ){
        .header_right_side {
            position: fixed;
            display: none;
            top: 0;
            left: 0;
            background: white;
            right: 0;
            bottom: 0;
            height: 100%;
            z-index: 100000;
            grid-template-areas:
          "logo search close"
          "list_menu list_menu list_menu"
          "menu menu menu";
            grid-template-columns: 1fr auto auto;
            grid-template-rows: auto auto 1fr;
            align-items: flex-start;
        }

        .header_right_side.open {
            display: grid;
        }

        .header_right_side-modile_open {
            cursor: pointer;
            display: flex;
        }

        .mobile-logo {
            grid-area: logo;
            padding: 32px 20px;
        }

        .menu {
            grid-area: menu;
            /* margin-top: 26px; */
            /* height: calc(100% - 27px); */
            padding-top: 0;
            height: 100%;
            position: relative;
        }

        .open_search {
            grid-area: search;
            align-self: center;
            margin-right: 20px;
        }

        .header_right_side-modile_close {
            cursor: pointer;
            grid-area: close;
            align-self: center;
            display: flex;
            margin-right: 32px;
        }

        .kursy-top_menu{
            display: none;
        }
    }

    /*---Content---*/

    body {
        min-height: 100vh;
        display: flex;
        overflow-x: hidden;
        flex-direction: column;
    }

    .content {
        flex-grow: 1;
    }

    /*---Footer---*/


    footer{
        background: #101820;
    }

    .footer_content {
        color: white;
        display: grid;
        grid-template-columns: auto auto auto auto;
        padding-top: 62px;
        /* grid-gap: 40px; */
    }

    .footer-bottom_menu_block {
        grid-column-start: 2;
        grid-column-end: -1;
    }

    .footer-bottom_copy_block, .footer-bottom_menu_block {
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        padding: 12px 0;
        margin-top: 60px;
        font-size: 11px;
        line-height: 13px;
    }

    .footer-projects_menu_block, .footer-info_menu_block, .footer-company_info_block {
        margin-right: 40px;
    }

    p.footer_block_title {
        margin-bottom: 24px;
        font-weight: 600;
        font-size: 18px;
        line-height: 24px;
    }

    .footer-social_block .social_links-list {
        margin-top: 32px;
    }

    .footer-company_info_block .logo {
        height: 24px;
        margin-bottom: 40px;
    }

    .footer-company_info_block .phone a:hover,
    .footer-company_info_block .email a:hover,
    footer a:hover {
        color: #469ED7;
    }

    .footer-company_info_block .phone, .footer-company_info_block .phone a {
        font-size: 18px;
        line-height: 22px;
        margin-bottom: 12px;
        color: white;
        font-weight: 600;
    }

    .footer-company_info_block .phone_subtitle {
        font-size: 14px;
        line-height: 17px;
        margin-bottom: 24px;
    }

    .footer-company_info_block .email, .footer-company_info_block .email a {
        font-size: 18px;
        line-height: 22px;
        margin-bottom: 12px;
        color: white;
        font-weight: 600;
    }

    .footer-company_info_block .address {
        font-size: 14px;
        line-height: 17px;
    }

    @media(min-width: 640px) and (max-width: 900px){
        .footer-bottom_menu_block{
            margin-bottom: 16px;
        }
    }

    @media(max-width: 900px){
        .footer_content {
            grid-template-columns: 1fr;
            padding: 16px;
            padding-top: 60px;
            padding-bottom: 27px;
        }

        .footer-bottom_menu_block{
            grid-column-start: unset;
            grid-column-end: unset;
            margin-top: 40px;
            padding: 0;
            padding-top: 16px;
        }

        .footer-bottom_copy_block{
            grid-row-start: 6;
            margin-top: 0;
            border: none;
            padding: 0;
            font-size: 11px;
            line-height: 13px;
            font-weight: 400;
        }

        .footer-info_menu_block, .footer-company_info_block{
            margin-bottom: 40px;
            margin-left: 0;
        }

        .footer-projects_menu_block{
            margin-bottom: 27px;
        }
    }

    .blue_button_template{
        font-weight: 500;
        font-size: 18px;
        line-height: 22px;
        text-align: center;
        color: #FFFFFF;
        background: #469ED7;
        border: 1px solid #469ED7;
        padding: 16px 80px;
        border-radius: 42px;
        cursor: pointer;
        outline: none;
    }

    .blue_button_template:hover{
        color: #FFFFFF;
        background: #2E8FCE;
    }

    .blue_button_template:active{
        color: #FFFFFF;
        background: #2185C6;
    }

    .white_button_template{
        font-weight: 500;
        font-size: 18px;
        line-height: 22px;
        text-align: center;

        border: 1px solid #469ED7;
        padding: 16px 80px;
        border-radius: 42px;
        cursor: pointer;
        outline: none;
        color: #469ED7;
        background: #FFFFFF;

    }

    .white_button_template:hover{
        color: #FFFFFF;
        background: #469ED7;
    }

    /*article-html-editor-styles*/




    /* .html_editor_body_cont >  p,
.html_editor_body_cont > ul,
.html_editor_body_cont > ol,
.html_editor_body_cont > h2{
  max-width: 50%;
} */

    .html_editor_body_cont img {
        max-width: 100%;
        width: 100%;
        height: auto;
    }

    .html_editor_body_cont img.not_as_text {
        width: revert;
        height: revert;
        max-width: calc(100vw - 80px);
    }

    .html_editor_body_cont img.full_width {
        width: 151%;
        max-width: 1920px;
    }

    .html_editor_body_cont img.border-radius {
        border-radius: 45px;
    }

    .html_editor_body_cont ul {
        list-style-type: none;
        margin: 25px;
        /* margin-top: -16px; */
        margin-left: 22px;
    }

    .html_editor_body_cont ol {
        margin: 25px;
        margin-left: 29px;
    }

    .html_editor_body_cont ul li:before {
        content: "";
        position: absolute;
        top: 10px;
        left: -15px;
        width: 4px;
        height: 4px;
        border-radius: 100%;
        background: black;
    }

    .html_editor_body_cont li {
        position: relative;
    }


    .html_editor_body_cont {
        font-weight: 400;
        font-size: 18px;
        line-height: 150%;
        width: 66%;
        color: #101820;
        margin-top: 120px;
    }

    .html_editor_body_cont h2 {
        font-weight: 600;
        font-size: 32px;
        margin: 64px 0;
        margin-bottom: 40px;
        line-height: 42px;
        color: #101820;
    }

    .html_editor_body_cont h3 {
        font-weight: 600;
        font-size: 24px;
        line-height: 30px;
        color: #101820;
        margin: 0;
        margin-top: 32px;
        margin-bottom: 28px;
    }

    .html_editor_body_cont ul p {
        margin: 0;
        margin-bottom: 5px;
    }
    .html_editor_body_cont p {
        margin: 0;
        margin-bottom: 32px;
        margin-top: 32px;

    }

    /* .html_editor_body_cont table:before {
    content: "";
    position: absolute;
    top: 0px;
    left: 1px;
    right: 1px;
    bottom: 1px;
    z-index: -1;
    border: 1px solid #D9D9D9;
    border-radius: 15px;
}
 */

    .html_editor_body_cont tbody {
        overflow: auto;
        display: block;
    }

    .html_editor_body_cont table {
        border-radius: 15px;
        border-collapse: collapse;
        border-spacing: 0;
        overflow: hidden;
        position: relative;

        display: block;
        overflow: hidden;
        border: 1px solid #D9D9D9;
    }

    .html_editor_body_cont table > * > * > * {
        padding: 16px 24px;
        border: 1px solid #D9D9D9;
    }

    .html_editor_body_cont table th {
        text-align: left;
        font-weight: 500;
        position: relative;
    }

    .html_editor_body_cont table th:before {
        content: "";
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: #F5F5F5;
        position: absolute;
        z-index: -2;
    }

    @media(max-width: 860px){
        .html_editor_body_cont{
            width: 100%;
            margin-top: 80px;
        }

        .html_editor_body_cont h2 {
            margin-top: 80px;
            margin-bottom: 40px;
            font-size: 24px;
            line-height: 31px;
        }

        .html_editor_body_cont p {
            font-size: 16px;
            line-height: 24px;
            margin: 32px 0;
        }

    }


    /*---- PAGE HEAD ----*/

    .page_head {
        display: grid;
        grid-template-areas:
        "title img"
        "desk img";
        grid-template-columns: 7fr 3fr;
        column-gap: 20px;
        row-gap: 56px;
        margin: 80px 0;
        align-items: center;
    }

    .page_head-title {
        grid-area: title;

        font-size: 53px;
        line-height: 63px;
        font-weight: 700;
        hyphens: auto;
        margin: 0;
    }

    .page_head-desk {
        grid-area: desk;
        display: inline-flex;
        flex-direction: column-reverse;
    }

    .page_head-img {
        grid-area: img;
    }

    .page_head-desk_text {
        font-size: 24px;
        /* max-height: 300px; */
        position: relative;
        overflow: hidden;
        line-height: 34px;
        /* box-shadow: 1px 1px 1px; */
    }

    @media(max-width: 860px){
        .page_head-title{
            font-size: 40px;
            line-height: 52px;
        }

        .page_head{
            grid-template-areas: "title" "img" "desk";
            grid-template-columns: auto;
            margin-top: 56px;
        }

        .page_head-desk_text{
            font-size: 20px;
            line-height: 30px;
        }
    }

    /*---- SLIDER BLOCK ----*/


    .swiper_styles-button-prev,
    .swiper_styles-button-next {
        background-image: url(../../../../../../public/images/system/slider_right_btn.svg);
    }

    .swiper_styles-button-prev.disable,
    .swiper_styles-button-next.disable {
        background-image: url(../../../../../../public/images/system/slider_disable_right_btn.svg);
    }

    .swiper_styles-button-prev:hover,
    .swiper_styles-button-next:hover {
        background-image: url(../../../../../../public/images/system/slider_hover_right_btn.svg);
    }



    .swiper_styles-button-prev,
    .swiper_styles-button-next {
        background-position: center;
        background-size: contain;
        width: 32px;
        height: 32px;
        cursor: pointer;
    }

    .swiper_styles-button-prev{
        transform: rotateZ(180deg);
    }

    .swiper_styles-pagination_cont {
        display: flex;
        flex-direction: row;
        width: 100%;
        align-items: flex-end;
        justify-content: center;
        position: absolute;
        bottom: 5px;
        align-items: center;
    }

    .swiper_styles-item.swiper-slide {
        user-select: none;
        display: flex;
        margin: 0 !important;
        height: auto;
    }

    .swiper_styles-wraper {
        display: flex;
        align-items: stretch;
    }

    .swiper_styles-pagination.swiper-pagination {
        position: relative;
        width: auto;
        top: 0;
        margin: 0 20px;

        display: grid;
        grid-template-columns: auto auto auto;
        grid-gap: 5px;

        font-weight: 500;
        font-size: 18px;
        /* line-height: 28px; */
        text-align: center;
        color: #101820;
        margin: 0 20px;
    }

    .swiper_styles-slider {
        padding-bottom: 80px;
    }

    .swiper_styles-button-next.swiper-button-disabled:hover,
    .swiper_styles-button-prev.swiper-button-disabled:hover,
    .swiper_styles-button-next.swiper-button-disabled,
    .swiper_styles-button-prev.swiper-button-disabled {
        background-image: url(../../../../../../public/images/system/slider_disable_right_btn.svg);
    }

    .swiper_styles-pagination.swiper-pagination.swiper-pagination-lock{
        display: none;
    }

    /*---- UL_LI_STYLES ----*/

    .c_styled.lc_blue li:before {
        background-color: #D8F5FF;
    }

    .c_styled.lc_green li:before {
        background-color: #DCFF03;
    }

    .c_styled.lc_black li:before {
        background-color: #101820;
        color: white;
    }

    .c_styled li {
        position: relative;
        font-size: 18px;
        line-height: 27px;
        overflow-wrap: break-word;
    }

    .c_styled li:before {
        content: counters(section,".");
        position:absolute;
        left: -28px;
        z-index:-1;
        display:inline-block;
        width: 24px;
        height: 24px;
        border-radius: 20px;
        counter-increment: section;
        font-size: 12px;
        line-height: 15px;
        justify-content: center;
        display: flex;
        align-items: center;
    }

    .c_styled {
        counter-reset: section;
        list-style: none;
    }
    /* правка для ul отступы для ненумерованных кругляков*/
    ul.c_styled:not(.ltp_arrow) li:before{
        width: 12px;
        height: 12px;
        left:-28px;
    }
    /*правка для ol с цифрами и большими кругляками*/
    ol.c_styled:not(.ltp_arrow) li:before{
        left:-40px;
    }
    /* мобильная версия*/


    /*arrows*/

    .c_styled.ltp_arrow.lc_black  li:before {
        content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32' fill='none'%3E%3Cpath d='M15.5 27L13.6297 25.1625L20.9797 17.8125H5V15.1875H20.9797L13.6297 7.8375L15.5 6L26 16.5L15.5 27Z' fill='%23101820'/%3E%3C/svg%3E");
        background: none;
    }

    .c_styled.ltp_arrow.lc_green  li:before {
        content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32' fill='none'%3E%3Cpath d='M15.5 27L13.6297 25.1625L20.9797 17.8125H5V15.1875H20.9797L13.6297 7.8375L15.5 6L26 16.5L15.5 27Z' fill='%23DCFF03'/%3E%3C/svg%3E");
        background: none;
    }

    .c_styled.ltp_arrow.lc_blue  li:before {
        content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32' fill='none'%3E%3Cpath d='M15.5 27L13.6297 25.1625L20.9797 17.8125H5V15.1875H20.9797L13.6297 7.8375L15.5 6L26 16.5L15.5 27Z' fill='%23469ED7'/%3E%3C/svg%3E");
        background: none;
    }

    ul.c_styled li:before {
        content: "";
        width: 24px;
        height: 24px;
        top: calc((27px - 12px) / 2);
        left: -28px;
    }
    /*корректировка для стрелок на десктоп*/
    ul.c_styled.ltp_arrow li:before,ol.c_styled.ltp_arrow li:before{
        width: 32px;
        height: 32px;
        left:-40px;
        /* top: 3px; */
    }
    @media(max-width:860px){
        .c_styled li{
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 150%; /* 24px */
            letter-spacing: 0.16px;
        }
        /* правка для ul отступы для ненумерованных кругляков в мобилке*/
        ul.c_styled:not(.ltp_arrow) li:before{
            width: 8px;
            height: 8px;
            left: -16px;

        }
        /* правка для ul отступы для нумерованных кругляков в мобилке*/
        ol.c_styled:not(.ltp_arrow) li:before{
            width: 16px;
            height: 16px;
            left: -24px;
            font-size: 10px;

        }
        /*стрелки*/
        .c_styled.ltp_arrow.lc_black  li:before {
            content: "";
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 32 32' fill='none'%3E%3Cpath d='M15.5 27L13.6297 25.1625L20.9797 17.8125H5V15.1875H20.9797L13.6297 7.8375L15.5 6L26 16.5L15.5 27Z' fill='%23101820'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
        }
        .c_styled.ltp_arrow.lc_green  li:before {
            content: "";
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 32 32' fill='none'%3E%3Cpath d='M15.5 27L13.6297 25.1625L20.9797 17.8125H5V15.1875H20.9797L13.6297 7.8375L15.5 6L26 16.5L15.5 27Z' fill='%23DCFF03'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
        }

        .c_styled.ltp_arrow.lc_blue  li:before {
            content: "";
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 32 32' fill='none'%3E%3Cpath d='M15.5 27L13.6297 25.1625L20.9797 17.8125H5V15.1875H20.9797L13.6297 7.8375L15.5 6L26 16.5L15.5 27Z' fill='%23469ED7'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
        }

        Montserrat
        Montserrat

        ul.c_styled.ltp_arrow li:before,
        ol.c_styled.ltp_arrow li:before{
            width: 24px;
            height: 24px;
            top:0;
            left:-32px;
        }
    }
    /*---- MESSAGE BLOCK ----*/
    .content_message_block .text {
        /* box-shadow: 2px 2px 10px 2px rgba(0, 0, 0, 0.05); */
        border-radius: 30px;
        padding: 40px;
        font-weight: 400;
        font-size: 16px;
        line-height: 24px;
        color: #101820;
        margin: 20px 0;
    }

    .content_message_block.cl_grey .text,
    .content_message_block.grey .text {
        border: 6px solid #417BBD;
        border-color: #d9d9d9;
    }

    .content_message_block.cl_blue .text,
    .content_message_block.blue .text {
        border: 6px solid #417BBD;
        border-color: #417BBD;
    }

    .content_message_block {
        /* width: 30%; */
        position: relative;
    }

    .content_message_block.left .text {
        width: 60%;
        position: absolute;
        left: calc(100% + 40px);
        margin-top: 0;
        top: 0;
    }

    .content_message_block.right .text {
        width: 100%;
        display: inline-block;
    }

    .html_editor_body_cont .content_message_block *:last-child {
        margin-bottom: auto;
    }

    .html_editor_body_cont .content_message_block *:first-child {
        margin-top: auto;
    }

    /*green*/
    .content_message_block.bgc_green .text{
        background: #F7FFC7;
    }

    .content_message_block.brc_green .text{
        border: 1px solid #DCFF03;
    }

    /*blue*/
    .content_message_block.bgc_blue .text{
        background: #E4F4FF;
    }

    .content_message_block.brc_blue .text{
        border: 1px solid #469ED7;
    }


    /*purpur*/
    .content_message_block.bgc_purpur .text{
        background: #EFF1FF;
    }

    .content_message_block.brc_purpur .text{
        border: 1px solid #B2BAFF;
    }


    /*grey*/
    .content_message_block.bgc_grey .text{
        background: #F5F5F5;
    }

    .content_message_block.brc_grey .text{
        border: 1px solid #D9D9D9;
    }

    /*template divider*/
    .content_message_block.cl_divider .text {
        border: none;
        padding: 0;
        box-shadow: none;
        padding-left: 24px;
        border-left: 2px solid #101820;
        border-radius: 0;
        font-size: 18px;
        line-height: 27px;
    }


    /*---- QUOTE BLOCK  ----*/

    .content_quote_block {
        display: grid;
        grid-template-columns: auto 1fr;
    }

    .content_quote_block .author_img {
        width: 56px;
        height: 56px;
        border-radius: 50%;
    }

    .content_quote_block .author_img img {
        width: 100%;
        border-radius: 50%;
    }

    .content_quote_block .text {
        font-weight: 400;
        font-size: 24px;
        line-height: 34px;
        color: #101820;
        margin-bottom: 40px;
    }

    .content_quote_block .content_cont {
        margin-top: 30px;
        display: flex;
        flex-direction: column-reverse;
        margin-left: 40px;
    }

    .content_quote_block .author_cont {
        display: inline-flex;
    }

    .content_quote_block .author_text {
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        display: flex;
        flex-direction: column;
        justify-items: center;
        align-self: center;
        margin-left: 20px;
        color: #469ED7;
    }

    .content_quote_block .author_post {
        font-weight: 400;
    }

    /*---- VIDEO BLOCK ----*/

    .content_video_block .iframe-shadow {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
    }

    .content_video_block {
        width: 100%;
        /* height: 440px; */
        padding-top: 63%;
        background-position: center;
        background-size: 100% auto;
        border-radius: 30px;
        transition: background-size 0.8s ease-in;
        transition: background-size 0.8s ease-in;
        -moz-transition: background-size 0.8s ease-in;
        -ms-transition: background-size 0.8s ease-in;
        -o-transition: background-size 0.8s ease-in;
        -webkit-transition: background-size 0.8s ease-in;
        background-repeat: no-repeat;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .content_video_block img {
        position: absolute;
        min-width: 100%;
        min-height: 100%;
        top: 0;
        transition: 1s;
        transform: scale(1);
    }

    .content_video_block {
        overflow: hidden;
        position: relative;
        isolation: isolate;
    }

    .content_video_block:hover img {
        /* min-width: 105%; */
        transform: scale(1.05);
        /* min-height: 105%; */
    }

    .content_video_block:hover {
        background-size: 105% auto;
    }

    .content_video_block:hover {
        background-size: 105% auto;
    }

    .content_video_block-play {
        width: 63px;
        border-radius: 50%;
        padding-top: 63px;
        /* height: 92px; */
        background-position: center;
        box-shadow: 0px 4px 4px rgb(0 0 0 / 25%);
        background-size: contain;
        background-color: #469ed7;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50% );
    }
    .content_video_block-play:hover {
        background-color: #2E8FCE;
    }
    .content_video_block-play:active {
        background-color: #2185C6;
    }
    .content_video_block .iframe-shadow{
        width: 100%;
    }
    /*----стили всплывающего блока(открывается видео через JS)----*/
    .video_page-wrapper{
        background-color: rgba(0,0,0,0.50) ;
        z-index: 1000000;
        display:flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        position: fixed;
        width: 100%;
        height: 100%;
    }

    .video_page-wrapper {
        width: 100%;
    }
    .border-radius{
        border: none;
        border-radius: 16px;
    }
    .wrapper_svg{
        margin-bottom: 16px;
        display: flex;
        flex-direction: row;
        justify-content: end;
        align-items: end;
        align-self: flex-start;
        position: absolute;
        right:-49px;
        top:0px;
        cursor:pointer;

    }
    .video-wrapper_position{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row-reverse;
        gap: 24px;
        padding-top: 50%;
        position: relative;
    }
    /*класс который навешивается для вертикального разрешения*/
    .video_orientation_vertical.vertical_position-wrapper-video  > div{
        width: 100%;
        padding-top: 170%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .video_orientation_vertical.vertical_position-wrapper-video {
        max-width: calc(60vh - 64px); /*делает видео вертикальным надо прописать через JS добавление через класс и комбинатор*/
    }
    .content_video_block.video_orientation_vertical{
        width: 252px;
        padding-top: 0;
    }
    .content_video_block.video_orientation_vertical img{
        height: 352px;
    }
    .vertical_position-wrapper-video{
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .video_wrapper_vertical-render{
        height:406px ;
    }
    .radiobutton_active{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row-reverse;
        gap: 24px;
        padding-left: 50%;
        position: relative;
    }
    .iframe-shadow{
        width:100% ;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
    }
    .wrapper_svg svg circle{
        fill:#E4E4E2;
    }
    .wrapper_svg svg path {
        fill: #343434;
    }

    .wrapper_svg:hover svg circle{
        fill:#343434;
    }
    .wrapper_svg:hover svg path {
        fill: #F5F5F4;
    }
    .wrapper_svg:active svg circle{
        fill:#F5F5F4;
    }
    .wrapper_svg:active svg path{
        fill:#979797;
    }
    /*при использовании класса max-width задний фон не растягивался адаптивно,что помешало в работе закрывания*/
    .video_optional-width{
        padding: 0 160px;
        width: 100%;
        margin: 0 auto;
    }
    .video_wrapper_vertical-render{
        padding-top: 161%;
    }


    @media(max-width: 860px){
        .content_video_block-play {
            width: 42px;
            padding-top: 42px;
        }
        .video_wrapper_vertical-render{
            height:352px ;
        }
        .content_video_block {
            border-radius: 14px;
        }
    }
    @media(max-width:860px){

        .wrapper_svg{
            align-self: flex-end;
        }
        .video-wrapper_position{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0px;
        }
        .border-radius{
            border-radius: 8px;
        }
    }
    /*стили для отступов на брейкпоинтах*/
    @media(max-width:1200px){
        .video_optional-width{
            padding:0px 80px;
        }
        .content_video_block.video_orientation_vertical{
            width: 252px;/*фиксированное число которое ломало внутреннее наполнение.Я пофиксил на 100% чтобы было всегда по ширине контейнера*/
            padding-top: 0;
        }

        .content_video_block.video_orientation_vertical:after {
            content: "";
            padding-top: 161%;
        }


        .video_wrapper_vertical-render{/*витя ебейше смотри на эту оболочку*/
            /* height:352px ; */
            width: 252px;
            height: 406px;

        }
    }
    @media(max-width:1000px){
        .video_optional-width{
            padding: 0 28px;
        }
        .wrapper_svg{
            right:1px;
            top:-41px;
        }
    }
    @media(max-width:860px){
        .video_optional-width{
            padding: 0 20px;
        }
        .england_6bl-item.england_6bl-video_item.swiper-slide{
            width: 220px;
            height: 352px;
        }
        .england_6bl-item.england_6bl-video_item.swiper-slide .content_video_block{
            width: 220px;
            height: 352px;
        }
    }
    /*---- Accordion Block ----*/

    .content_accordion_block .accordion_item input[type="checkbox"]:checked ~ .accordion_item-title:active .arrow {
        background-image: url(/local/templates/kursi/img/faq_arrows/checkedClick.svg);
    }

    .content_accordion_block .accordion_item input[type="checkbox"]:checked ~ .accordion_item-title:hover .arrow {
        background-image: url(/local/templates/kursi/img/faq_arrows/checkedHover.svg);
    }

    .content_accordion_block .accordion_item input[type="checkbox"]:checked ~ .accordion_item-title .arrow {
        background-image: url(/local/templates/kursi/img/faq_arrows/checkedArrow.svg);
    }

    .content_accordion_block .accordion_item-title:active .arrow {
        background-image: url(/local/templates/kursi/img/faq_arrows/hideClick.svg);
    }

    .content_accordion_block .accordion_item-title:hover .arrow {
        background-image: url(/local/templates/kursi/img/faq_arrows/hideHover.svg);
    }

    .content_accordion_block .arrow {
        width: 24px;
        height: 24px;
        background-image: url(../../../../../../public/images/system/hideArrow.svg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
        transition: 0.1s;
    }

    .accordion_item .text h3, .content_accordion_block .arrow{
        margin: auto;
    }

    .content_accordion_block .accordion_item-title {
        display: grid;
        grid-template-columns: 1fr 24px;
        grid-gap: 20px;
        align-items: center;
        font-weight: 500;
        font-size: 24px;
        line-height: 29px;
        cursor: pointer;
        color: #101820;
        width: 100%;
    }

    .content_accordion_block  .accordion_item input {
        display: none;
    }

    .content_accordion_block  .accordion_item-text {
        font-weight: 400;
        font-size: 18px;
        line-height: 150%;
        color: #101820;
        margin-top: 28px;
        display: none;
    }

    .content_accordion_block .accordion_item input[type="checkbox"]:checked ~ .accordion_item-text {
        display: block;
    }



    .content_accordion_block .accordion_item {
        border: 1.5px solid #D9D9D9;
        /* box-shadow: 2px 2px 10px 2px rgba(0, 0, 0, 0.05); */
        border-radius: 30px;
        margin-bottom: 20px;
        padding: 32px;
        padding-right: 40px;
    }

    .content_accordion_block .accordion_item-text img{
        width: 100%;
    }

    @media(max-width: 860px){
        .content_accordion_block .accordion_item{
            padding: 16px;
            border-radius: 20px;
        }

        .content_accordion_block .accordion_item-title {
            font-size: 20px;
            line-height: 24px;
        }

        .content_accordion_block .accordion_item-text {
            margin-top: 16px;
            font-size: 16px;
            line-height: 24px;
        }
    }

    /*---- Timeline Block ----*/
    /* */

    .timeline_items.swiper-wrapper {
        display: grid;
        grid-template-rows: auto auto;
        grid-auto-flow: column;
    }

    .timeline_items > .timeline_element-title_filler,
    .timeline_items > .timeline_element-text_filler{
        width: 20px;
    }


    .timeline_items > .timeline_element-title,
    .timeline_items > .timeline_element-text {
        min-width: 250px;
        user-select: none;
    }

    .html_editor_body_cont .slider_buttons_cont p{
        margin: 0;
    }

    .timeline_element-title_filler {
        min-width: 100px;
        width: 100px;
    }

    .content_timeline_block{
        position: relative;
    }

    .content_timeline_block .slider_buttons_cont {
        margin: 20px 0;
    }

    .timeline_element-text {
        min-width: 190px;
        width: 190px;
        font-weight: 400;
        font-size: 20px;
        line-height: 150%;
        vertical-align: baseline;
        color: #101820;
        padding: 20px;
    }

    .timeline_element-title {
        font-weight: 600;
        font-size: 18px;
        line-height: 150%;
        color: #101820;
        padding: 0 20px;
        padding-bottom: 35px;
    }

    .timeline_element-title, .timeline_element-text {
        border-left: 1px solid #469ED7;
    }

    .content_timeline_block.swiper{
        overflow: visible;
        padding-bottom: 80px;
    }

    .timeline_items > .timeline_element-title_filler:after,
    .timeline_items > .timeline_element-title:after {
        /* border-bottom: 10px solid #DCFF03; */
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 10px;
        background: #DCFF03;
    }

    .timeline_element-title_filler:after {
        /* border-radius: 10px; */
        border-radius: 10px 0 0 10px;
    }

    .timeline_element-title_cont > td {
        position: relative;
        vertical-align: baseline;
    }

    @media(max-width: 860px){

        .timeline_items > .timeline_element-title, .timeline_items > .timeline_element-text {
            max-width: 90vw;
            width: 100%;
            min-width: unset;
        }

        .timeline_element-title_filler {
            min-width: 20px;
            width: 20px;
        }

        .timeline_element-text {
            min-width: 300px;
            width: 300px;
        }

        .content_timeline_block {
            position: relative;
            left: -17px;
        }
    }



    .tagpage-ajax_container {
        position: relative;
    }

    .kursi_template-loader_bg img {
        animation: spin 2s linear 0s infinite;
        width: 40px;
        height: 40px;
        position: absolute;
        top: 190px;
    }

    @keyframes spin {
        from {transform:rotate(0deg);}
        to {transform:rotate(360deg);}
    }

    .kursi_template-loader_bg {
        position: absolute;
        width: 100%;
        align-items: center;
        display: flex;
        top: 0;
        height: 100%;
        background: rgba(255, 255,255, 0.5);
        justify-content: center;
    }

    .show_more_btn_color{
        color: #469ED7;
        border: 1px solid #469ED7;
        background: #FFFFFF;
    }

    .show_more_btn_color:hover{
        color: white;
        border: 1px solid #66B7EC;
        background: #66B7EC;
    }

    .show_more_btn_color:active{
        color: white;
        border: 1px solid #2185C6;
        background: #2185C6;
    }

    .show_more_btn_color.disable{
        color: #FFFFFFCC;
        border: 1px solid #469ED780;
        background: #469ED780;
    }



    .custom_checkbox input{
        display: none;
    }

    .custom_checkbox input + label:before{
        content: "";
    }

    .custom_checkbox input + label:hover:before {
        border: 1px solid #469ED7;
    }

    .custom_checkbox input + label {
        padding-left: 24px;
        position: relative;
        cursor: pointer;
    }

    .custom_checkbox input + label:before {
        content: "";
        width: 16px;
        height: 16px;
        position: absolute;
        left: 0;
        top: 10px;
        transform: translateY(-50%);
        border-radius: 5px;
        border: 1px solid #F5F5F5;
    }

    .custom_checkbox input:checked+ label:after {
        content: "";
        width: 18px;
        height: 18px;
        position: absolute;
        left: 0;
        top: 1px;
        background-image: url("data:image/svg+xml,%3Csvg width='10' height='8' viewBox='0 0 10 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M3.20628 5.53812L8.49776 0.246636C8.66218 0.0822119 8.87145 0 9.12556 0C9.37967 0 9.58894 0.0822119 9.75336 0.246636C9.91779 0.411061 10 0.620328 10 0.874439C10 1.12855 9.91779 1.33782 9.75336 1.50224L3.83408 7.42152C3.65471 7.6009 3.44544 7.69058 3.20628 7.69058C2.96711 7.69058 2.75785 7.6009 2.57848 7.42152L0.246636 5.08969C0.0822119 4.92526 0 4.71599 0 4.46188C0 4.20777 0.0822119 3.9985 0.246636 3.83408C0.411061 3.66966 0.620329 3.58744 0.874439 3.58744C1.12855 3.58744 1.33782 3.66966 1.50224 3.83408L3.20628 5.53812Z' fill='white'/%3E%3C/svg%3E%0A");
        background-repeat: no-repeat;
        background-position: center;
        background-size: inherit;
        background-color: #469ED7;
        border-radius: 5px;
    }

    /*---- COOKIES ----*/


    .nca-cookiesaccept-line.style-1 {
        display: flex;
        justify-content: center;
        background-color: rgba(0,0,0,0);
    }

    .nca-cookiesaccept-line > div {
        margin-bottom: 20px;
        padding: 24px;
        background: #FFFFFF;
        box-shadow: 0px 1px 10px rgba(15, 25, 40, 0.05);
        border-radius: 10px;
        font-size: 18px;
        line-height: 150%;
        color: #1D1D1F;
        max-width: 580px;
        padding-right: 8px;
    }

    .nca-cookiesaccept-line button {
        background: #1D1D1F;
        color: #F1F1F1;
        padding: 6px 20px;
        border-radius: 20px;
        font-size: 18px;
        line-height: 100%;
        cursor: pointer;
    }

    .nca-cookiesaccept-line button:hover {
        background: #469ED7;
        border-style: solid;
        border-color: #469ED7;
        color: #F1F1F1;
    }


    .nca-cookiesaccept-line button:active {
        background: #2185C6;
        border-style: solid;
        border-color: #2185C6;
        color: #F1F1F1;
    }

    .nca-cookiesaccept-line > div > div {
        padding-left: 0 !important;
        padding-right: 16px !important;
    }

    .nca-cookiesaccept-line-text .land_text {
        display: none;
    }

    .nca-cookiesaccept-line-text .site_text {
        display: inline-flex;
        font-size: 12px;
        align-items: center;
        line-height: 15px;
    }

    .nca-cookiesaccept-line-text .site_text > img {
        margin-right: 10px;
    }

    .nca-cookiesaccept-line-text .site_text a:hover {
        color: #469ED7;
    }

    /*---- BUTTONS ----*/

    .blue_btn {
        background: #3A5EFB;
        border: 1px solid #3A5EFB;
        width: calc(100% - 40px);
        display: flex;
        padding: 16px;
        justify-content: center;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        font-size: 18px;
        line-height: 20px;
    }

    .blue_btn:hover {
        color: white;
        background: #234AF1;
        border: 1px solid #234AF1;
    }

    .blue_btn:active {
        color: white;
        background: #1137DD;
        border: 1px solid #1137DD;
    }

    /*---- CODE BLOCK ----*/

    .content_code_block {
        border-radius: 20px;
        overflow: hidden;
        margin: 24px 0px;
        font-size: 14px;
    }

    .content_code_block pre[class*=language-] {
        margin: 0;
        background: #2A2B3A;
        border-radius: 0;
        border: none;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
    }

    .content_code_block .code-toolbar>.toolbar {
        opacity: 1;
        margin-right: 10px;
    }

    .content_code_block .code-toolbar {
        position: relative;
        padding-bottom: 8px;
    }

    .content_code_block .code-toolbar>.toolbar {
        display: flex;
        top: 0;
        left: 0;
        margin: 0;
        margin-top: 10px;
        margin-left: 16px;
        margin-right: 4px;
        width: calc(100% - 32px);
        color: #9FA2B9;
        align-items: center
    }


    .content_code_block .code-toolbar {
        padding-top: 46px;
        background: #2A2B3A;
    }

    .content_code_block div.code-toolbar>.toolbar>.toolbar-item:last-child {
        margin-left: auto;
    }

    .content_code_block div.code-toolbar>.toolbar>.toolbar-item>button {
        padding: 5px 12px;
        border-radius: 12px;
        margin-right: 12px;
        background: none;
        color: #9FA2B9;
        font-size: 14px;
        line-height: 14px;
        box-shadow: none;
    }

    .content_code_block div.code-toolbar>.toolbar>.toolbar-item>button:hover, div.code-toolbar>.toolbar>.toolbar-item>button.clicked {
        background: #5E6077;
        cursor: pointer;
        color: #FFFFFF;
    }

    .content_code_block div.code-toolbar>.toolbar>.toolbar-item>button.copy-to-clipboard-button {
        border: 1px solid #9FA2B9;
        font-size: 13px;
        line-height: 13px;
        font-weight: 500;
        border-radius: 20px;
        padding: 4px 12px;
    }

    .content_code_block div.code-toolbar>.toolbar>.toolbar-item>button.copy-to-clipboard-button > span:before {
        content: url("data:image/svg+xml,%3Csvg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg clip-path='url(%23clip0_232_451)'%3E%3Cpath d='M10.0002 1.3335H6.00016C5.63197 1.3335 5.3335 1.63197 5.3335 2.00016V3.3335C5.3335 3.70169 5.63197 4.00016 6.00016 4.00016H10.0002C10.3684 4.00016 10.6668 3.70169 10.6668 3.3335V2.00016C10.6668 1.63197 10.3684 1.3335 10.0002 1.3335Z' stroke='%239FA2B9' stroke-width='1.33333' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M5.33317 2.6665H3.99984C3.64622 2.6665 3.30708 2.80698 3.05703 3.05703C2.80698 3.30708 2.6665 3.64622 2.6665 3.99984V13.3332C2.6665 13.6868 2.80698 14.0259 3.05703 14.276C3.30708 14.526 3.64622 14.6665 3.99984 14.6665H11.9998C12.3535 14.6665 12.6926 14.526 12.9426 14.276C13.1927 14.0259 13.3332 13.6868 13.3332 13.3332V11.9998' stroke='%239FA2B9' stroke-width='1.33333' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M10.6665 2.6665H11.9998C12.3535 2.6665 12.6926 2.80698 12.9426 3.05703C13.1927 3.30708 13.3332 3.64622 13.3332 3.99984V6.6665' stroke='%239FA2B9' stroke-width='1.33333' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M14.0002 9.3335H7.3335' stroke='%239FA2B9' stroke-width='1.33333' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M10.0002 6.6665L7.3335 9.33317L10.0002 11.9998' stroke='%239FA2B9' stroke-width='1.33333' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/g%3E%3Cdefs%3E%3CclipPath id='clip0_232_451'%3E%3Crect width='16' height='16' fill='white'/%3E%3C/clipPath%3E%3C/defs%3E%3C/svg%3E ");
        margin-right: 4px;
        height: 16px;
    }

    .content_code_block div.code-toolbar>.toolbar>.toolbar-item>button.copy-to-clipboard-button:hover > span:before {
        content: url("data:image/svg+xml,%3Csvg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg clip-path='url(%23clip0_227_1177)'%3E%3Cpath d='M10.0002 1.3335H6.00016C5.63197 1.3335 5.3335 1.63197 5.3335 2.00016V3.3335C5.3335 3.70169 5.63197 4.00016 6.00016 4.00016H10.0002C10.3684 4.00016 10.6668 3.70169 10.6668 3.3335V2.00016C10.6668 1.63197 10.3684 1.3335 10.0002 1.3335Z' stroke='white' stroke-width='1.33333' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M5.33317 2.6665H3.99984C3.64622 2.6665 3.30708 2.80698 3.05703 3.05703C2.80698 3.30708 2.6665 3.64622 2.6665 3.99984V13.3332C2.6665 13.6868 2.80698 14.0259 3.05703 14.276C3.30708 14.526 3.64622 14.6665 3.99984 14.6665H11.9998C12.3535 14.6665 12.6926 14.526 12.9426 14.276C13.1927 14.0259 13.3332 13.6868 13.3332 13.3332V11.9998' stroke='white' stroke-width='1.33333' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M10.6665 2.6665H11.9998C12.3535 2.6665 12.6926 2.80698 12.9426 3.05703C13.1927 3.30708 13.3332 3.64622 13.3332 3.99984V6.6665' stroke='white' stroke-width='1.33333' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M14.0002 9.3335H7.3335' stroke='white' stroke-width='1.33333' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M10.0002 6.6665L7.3335 9.33317L10.0002 11.9998' stroke='white' stroke-width='1.33333' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/g%3E%3Cdefs%3E%3CclipPath id='clip0_227_1177'%3E%3Crect width='16' height='16' fill='white'/%3E%3C/clipPath%3E%3C/defs%3E%3C/svg%3E%0A");
    }

    .content_code_block div.code-toolbar>.toolbar>.toolbar-item>button.copy-to-clipboard-button>span {
        display: inline-flex;
        align-items: center;
    }

    .content_code_block .line-numbers .line-numbers-rows{
        border-right: 0;
    }

    .content_code_block .line-numbers-rows>span:before{
        color: #5E6077;
    }

    .content_code_block code[class*=language-], .content_code_block pre[class*=language-]{
        font-size: 14px;
        /* line-height: 28px; */
    }

    .content_code_block div.code-toolbar>.toolbar>.toolbar-item>button.alone:hover,
    div.code-toolbar>.toolbar>.toolbar-item>button.clicked.alone,
    .content_code_block div.code-toolbar>.toolbar>.toolbar-item>button.alone:hover:after,
    div.code-toolbar>.toolbar>.toolbar-item>button.alone.clicked:after,
    .content_code_block div.code-toolbar>.toolbar>.toolbar-item>button.alone:hover:before,
    div.code-toolbar>.toolbar>.toolbar-item>button.alone.clicked:before {
        background: #5E6077;
        position: absolute;
        content: "";
        width: 12px;
        top: 0;
        height: 12px;
        bottom: 0;
        left: -25px;
        padding: 0;
        border-radius: 20px;
        color: transparent;
    }

    .content_code_block div.code-toolbar>.toolbar>.toolbar-item>button.alone:hover,
    div.code-toolbar>.toolbar>.toolbar-item>button.alone.clicked {
        left: 0;
        margin-left: 25px;
        margin-right: 25px;
        bottom: 6px;
        transform: translateY(-50%);
    }

    .content_code_block div.code-toolbar>.toolbar>.toolbar-item>button.alone:hover:before,
    div.code-toolbar>.toolbar>.toolbar-item>button.alone.clicked:before {
        left: 25px;
    }

    div.code-toolbar>.toolbar>.toolbar-item {
        display: inline-block;
        position: relative;
    }

    .content_code_block *::-webkit-scrollbar {
        width: 8px;               /* width of the entire scrollbar */
        height: 8px;               /* width of the entire scrollbar */
    }

    .content_code_block *::-webkit-scrollbar-track {
        background: transparent;        /* color of the tracking area */
    }

    .content_code_block *::-webkit-scrollbar-thumb {
        background-color: #5E6077;    /* color of the scroll thumb */
        border-radius: 20px;       /* roundness of the scroll thumb */
    }


    span.colored_text {
        font-size: 16px;
        background: #D9D9D9;
        border-radius: 3px;
        padding: 0 6px;
        line-height: 24px;
    }



    /*new-header-fixes*/


    .kursy-top_menu {
        margin-left: 32px;
    }

    .open_search {
        margin: 0 16px;
        max-width: 360px;
        margin-right: auto;
    }

    .header_right_side {
        margin-left: auto;
    }

    .top {
        justify-content: flex-start;
        padding: 32px 160px;
    }

    a.logo {
        display: flex;
    }

    .header_right_side{
        white-space: nowrap;
    }



    @media( max-width: 1200px ){
        .top {
            padding: 32px 80px;
        }
    }

    @media( max-width: 1000px ){
        .top {
            padding: 28px;
        }
    }

    @media (max-width: 860px){
        .top {
            padding: 24px 16px;
            justify-content: space-between;
        }

        .top-cont {
            position: unset;
        }

        .open_search.close{
            display: none;
        }

        .open_search {
            position: fixed;
            z-index: 10000000;
            width: 100%;
            top: 0;
            right: 0;
            left: 0;
            max-width: unset;
            background: white;
            bottom: 0;
            margin: 0;
        }

        img.search_page-open_btn.mobile {
            align-self: center;
            margin-right: 16px;
        }
    }
    /* стили для открывания - закрывания слишком большого отзыва*/
    /* .england_6bl-item-text{ */
    /* text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap; */
    /* } */

    .england_6bl-item-button{
        background: none;
        border: none;
        font-family: Inter;
        font-weight: 400px;
        font-size: 18px;
        line-height: 21px;
        color:#8E82FE;
        align-self: flex-start;
        margin-top: 20px;
        display: none;
    }

    .england_6bl-item.swiper-slide.england_6bl-item-button_active{
        text-overflow:clip;

    }
    .england_6bl-item-button_active{
        display: inline;
    }
    /*фикс свайпера попытка 1*/
    .england_6bl-items.swiper-wrapper{

    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        getCatalogs();
        handleSearch();
    });

    const menuCatalogs = {
        'menu-all': 'all',
        'menu-free': 'besplatnye',
        'menu-kids': 'dlya-detej'
    };

    function handleSearch() {
        const searchItem = document.getElementById('search_page_submit');
        const searchValueInput = document.getElementById('qplSKIW');

        setSearchValue(searchValueInput);
        handleShowRestSearchBtn(searchValueInput)
        searchValueInput.addEventListener('input', () => handleShowRestSearchBtn(searchValueInput));
        searchItem.addEventListener('click', handleSearchInput);
        document.addEventListener('keypress', () => {
            if (event.keyCode === 13) {
                handleSearchInput();
            }
        });
    }

    function getCatalogs() {
        const catalogRoutes = ['/catalog/listings/all', '/catalog/listings/besplatnye', '/catalog/listings/dlya-detej'];
        catalogRoutes.forEach((route, index) => sendCatalogGetRequest(route, Object.values(menuCatalogs)[index]));
    }

    function sendCatalogGetRequest(url, catalogName) {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch(url, {
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
            }
        })
            .then(response => response.text())
            .then(data => {
                addCatalogToMenu(catalogName, data);
                setActiveCatalogByLocationPath(catalogName);
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Something went wrong');
            });
    }

    function addCatalogToMenu(catalogName, data) {
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = data;
        const catalogContent = tempDiv.querySelector(`#${catalogName}`);

        if (catalogContent) {
          document.getElementById('catalog_body_wrapper').appendChild(catalogContent);
          setActiveCatalogByLocationPath();
          setActiveElementsByPathName();
          handleCatalogEvents();
          handleCatalogClose();
        }
    }

    function handleCatalogClose() {
        Array.from(document.querySelectorAll('.close-catalog')).forEach(el => {
            el.addEventListener('click', () => closeCatalog(el.parentElement.id))
        })
    }

    function closeCatalog(catalogName) {
        for (let catalog in menuCatalogs) {
            if (menuCatalogs[catalog] === catalogName) {
                document.getElementById(catalog).checked = false;
            }
        }
    };

    function setActiveCatalogByLocationPath() {
        for (let catalog in menuCatalogs) {
            if (window.location.href.includes(menuCatalogs[catalog])) {
                document.getElementById(catalog).checked = true;
            }
        }
    }

    function handleCatalogEvents() {
        const elems = document.querySelectorAll(".kursy-top_menu-left_subitems, .kursy-top_menu-left_label, .kursy-top_menu-right_label, .kursy-top_menu-right_cont, .kursy-top_menu-tab");
        Array.from(elems).forEach(elem => {
            if (window.innerWidth > 860) {
                elem.addEventListener("mouseover", onMouseOver);
                elem.addEventListener("mouseleave", onMouseOut);

                return;
            }

            /* Mobile menu */
            document.querySelectorAll("div.kursy-top_menu-left_label").forEach(element => {
                element.addEventListener('click', mobileLeftOpen);
            });

            document.querySelectorAll("div.kursy-top_menu-right_label.has_child_label.no_link").forEach(element => {
                if (Array.from(element.querySelectorAll('.no-childs')).length || element.classList.contains('no-childs')) return;
                element.addEventListener('click', mobileRightOpen);
            });
        })
    }

    function setActiveElementsByPathName() {
        Array.from(document.querySelectorAll('.check-active')).forEach(el => {
            const elRef = el.querySelectorAll('a')[0].href;

            if (window.location.href.includes(elRef)) {
                el.classList.add('selected');
                el.classList.remove('default_selected');

                if (!el.classList.contains('kursy-top_menu-left_label')) {
                    el.parentElement.parentElement.classList.add('has_selected_childs');
                }
            }
        })

        Array.from(document.querySelectorAll('.default_selected')).forEach(el => {
            const isSelectedElem = Array.from(el.parentElement.querySelectorAll('.kursy-top_menu-left_label')).find(el => el.classList.contains('selected'));

            if (!isSelectedElem) {
                el.classList.add('selected');
            }
        })
    }

    document.addEventListener('DOMContentLoaded', function(){
        let items = document.querySelectorAll(".second_lvl > .li > .header_top_menu-text");
        for (let item of items) {
          item.onclick = openSubSect;
        }

        let f_lvl_items = document.querySelectorAll(".first_lvl > .li > .header_top_menu-text");
        for (let f_lvl_item of f_lvl_items) {
          f_lvl_item.onclick = openSect;
        }
    });

    function onMouseOver(event) {
      doActiveClasses(event.target, 'open');
    }

    function onMouseOut(event) {
      doActiveClasses(event.target, 'close');
    }

    function doActiveClasses(elem, action){
      if(window.innerWidth > 860){
        if(action === "open"){
          if( elem.classList.contains("kursy-top_menu-tab") ){
            elem.classList.add("hovered");
          }

          if( elem.classList.contains("kursy-top_menu-left_label") ){
            elem.classList.add("hoveredItem");
          }

          if( elem.classList.contains("kursy-top_menu-left_subitems") ){
            elem.classList.add("hoveredChild");
            elem.previousElementSibling.classList.add("hoveredItem");
            elem.previousElementSibling.classList.add("onHoveredChild");
          }

          if( elem.classList.contains("kursy-top_menu-right_cont") ){
            // elem.classList.add("hoveredChild");
            elem.parentElement.previousElementSibling.classList.add("hoveredItem");
          }

          if( elem.classList.contains("kursy-top_menu-right_label") ){
            elem.classList.add("hoveredItem");

            if(elem.classList.contains("kursy-top_menu-right_dropdown")){
              elem.parentElement.classList.add("hoveredDropdown");
            }

            if( !elem.parentElement.parentElement.classList.contains("hoveredChild") ){
              elem.parentElement.parentElement.classList.add("hoveredChild");
              elem.parentElement.parentElement.previousElementSibling.classList.add("hoveredItem");
            }
          }
        }

        if(action === 'close'){
          if( elem.classList.contains("kursy-top_menu-tab") ){
            elem.classList.remove("hovered");
            elem.querySelectorAll(".hoveredItem, .hoveredChild").forEach(element => {
              element.classList.remove("hoveredItem");
              element.classList.remove("hoveredChild");
              element.classList.remove("onHoveredChild");
              element.classList.remove("hoveredDropdown");
            });
          }

          if(elem.classList.contains("kursy-top_menu-left_label") || elem.classList.contains("kursy-top_menu-right_label") ){
            elem.classList.remove("hoveredItem");
            elem.classList.remove("onHoveredChild");

            if(elem.classList.contains("kursy-top_menu-right_dropdown")){
              elem.parentElement.classList.remove("hoveredDropdown");
            }
          }

          if( elem.classList.contains("kursy-top_menu-left_subitems") ){
            elem.classList.remove("hoveredChild");
            elem.previousElementSibling.classList.remove("hoveredItem");
            elem.previousElementSibling.classList.remove("onHoveredChild");
            elem.querySelectorAll(".hoveredItem, .hoveredChild").forEach(element => {
              element.classList.remove("hoveredItem");
              element.classList.remove("hoveredChild");
              element.classList.remove("onHoveredChild");
              element.classList.remove("hoveredDropdown");
            });
          }

          if( elem.classList.contains("kursy-top_menu-right_cont") ){
            elem.classList.remove("hoveredChild");
            elem.parentElement.previousElementSibling.classList.remove("hoveredItem");
            elem.querySelectorAll(".hoveredItem, .hoveredChild").forEach(element => {
              element.classList.remove("hoveredItem");
              element.classList.remove("hoveredChild");
              element.classList.remove("onHoveredChild");
              element.classList.remove("hoveredDropdown");
            });
          }
         }
      }
    }

    function openMenuBackground(){
      document.querySelector(".content").classList.add("opened_menu");
    }

    function closeMenuBackground(){
      document.querySelector(".content").classList.remove("opened_menu");
    }

    function openDropdown(evt){
      const elem = evt.target.tagName === 'div' ? evt.target : evt.target.parentElement;

      elem.parentElement.classList.toggle("openDropdown");

        elem.parentElement.querySelectorAll('.items-for-hide').forEach(el => {
            el.classList.toggle('hide-item');
        })


      if(elem.parentElement.classList.contains("openDropdown")){
        elem.querySelector("span").innerText = "Свернуть";
      }
      else{
        elem.querySelector("span").innerText = "Показать все";
      }
    }

    function hideSect(e) {
        e.preventDefault();
        this.parentElement.parentElement.parentElement.classList.remove("showed_menu");
        this.parentElement.parentElement.parentElement.parentElement.classList.remove("open_menu");
        return false;
    }

    function openSect(e) {
        if (!this.parentElement.classList.contains('showed_menu')) {
            let hasChilds = false;
            for (let i = 0; i < this.parentElement.childNodes.length; i++) {
                if (this.parentElement.childNodes[i].classList) {
                    if(this.parentElement.childNodes[i].classList.contains('ul_cont')){
                        hasChilds = true;
                        break;
                    }
                }
            }

            if(hasChilds){
                this.parentElement.classList.add("showed_menu");
                this.parentElement.parentElement.classList.add("open_menu");
                return false;
            }
        }
    }

    function openSubSect(e) {
        if(document.documentElement.clientWidth < 861){
            e.preventDefault();

            if (!e.target.parentElement.classList.contains('showed_submenu')) {
                e.target.parentElement.classList.add("showed_submenu");
                e.target.parentElement.parentElement.classList.add("open_submenu");

            }
            else{
                e.target.parentElement.classList.remove("showed_submenu");
                e.target.parentElement.parentElement.classList.remove("open_submenu");
            }

            return false;
        }
    }

    /* Mobile menu*/
    function showMobileMenu() {
      let menu = document.getElementById('header-menu-cont');
      menu.classList.add("open");
      document.getElementsByTagName('body')[0].classList.add("menu_no_scroll");
      document.querySelectorAll(".menu-tabs_label").forEach((e) => {
        e.checked = false;
      });
    }

    function hideMobileMenu() {
      let menu = document.getElementById('header-menu-cont');
      menu.classList.remove("open");
      document.getElementsByTagName('body')[0].classList.remove("menu_no_scroll");
    }

    function mobileLeftOpen(e){
      e.stopPropagation();

      if(window.innerWidth < 860){
        e.preventDefault();

        this.parentElement.classList.toggle('hideItems');
        this.classList.toggle('mobileClickedItem');

        // this.parentElement.querySelectorAll(".mobileClickedItem").forEach(element => {
        //   element.classList.toggle('mobileClickedItem');
        //   this.parentElement.classList.remove("hideItems");
        // });
      }
    }

    function mobileRightOpen(e){
      if(window.innerWidth < 860){
        e.stopPropagation();
        e.preventDefault();
        this.parentElement.querySelectorAll(".mobileClickedItem").forEach(element => {
          if(element != this){
            element.classList.toggle('mobileClickedItem');
            this.parentElement.parentElement.previousElementSibling.classList.remove("openedChildHide");
          }
        });
        this.parentElement.parentElement.previousElementSibling.classList.toggle("openedChildHide");
        this.classList.toggle('mobileClickedItem');
      }
    }

    /* Search */
    function setSearchValue(searchValueInput) {
        const url = new URL(window.location.href);
        let searchText = url.searchParams.get('q');

        if (searchText) {
            searchText = searchText.endsWith('/') ? searchText.slice(0, -1) : searchText;
            searchValueInput.value = searchText;
        }
    }

    function handleSearchInput() {
        let searchItem = document.getElementById('qplSKIW');
        let searchValue = searchItem.value;

        if (!searchValue) return;

        window.location.href =  window.location.origin + `/search?q=${searchValue}`
    }

    function handleShowRestSearchBtn(elem) {
        const resetButton = Array.from(document.querySelectorAll('img.search_page_reset_img'))[0];

        if (elem.value && !(+resetButton.style.opacity)) {
            resetButton.style.opacity = 1;
            resetButton.style.width = 'auto';

            return;
        }

        if (!elem.value && resetButton.style.opacity) {
            resetButton.style.opacity = 0;
            resetButton.style.width = 0;
        }
    }

    function validateSearch() {
        const inputValue = document.getElementById('qplSKIW').value.trim();

        if (inputValue === '') {
            return false;
        }
        return true;
    }

    function showSearchPopup() {
      let search = document.querySelector('.open_search');

      if(search){
        search.classList.remove("close");
      }
    }

    function clearSearch() {
      let search = document.querySelector('input[name="q"]');
      search.value = "";

      window.location.href = new URL(window.location.href).origin;

      let form = document.querySelector('#search-popup-cont form');
      form.submit();
    }
</script>
