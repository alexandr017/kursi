<?php
includeComponent("components/atoms/button-icon");
includeComponent("components/atoms/tabs");

includeComponent("components/organisms/header");
?>
<div style="background: var(--light_bg_primary, #F5F6F7)">

    <header class="header-main bg-dark blur-size-l">
        <div class="container">
            <div class="header-wrapper">
                <div class="header-wrapper-left">
                    <a class="header-logo header-menu-item" href="/">
                        <img src="images/header-logo.svg" alt="Курсы.ру">
                    </a>
                    <button class="btn btn-primary btn-md btn-catalog header-menu-item">
                        <span class="bi"></span>
                        <span class="btn-text">Каталог</span>
                    </button>
                </div>
                <nav class="header-wrapper-right header-menu">
                    <button class="btn btn-icon btn-search header-menu-item">
                        <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.491 15.3128L20.5116 20.3334M10.3571 17.4042C14.1507 17.4042 17.226 14.3289 17.226 10.5354C17.226 6.74182 14.1507 3.66653 10.3571 3.66653C6.56357 3.66653 3.48828 6.74182 3.48828 10.5354C3.48828 14.3289 6.56357 17.4042 10.3571 17.4042Z"
                                  stroke="#141414" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div class="header-btn-group">
                        <a class="btn btn-tertiary-secondary header-menu-item">Рейтинг школ</a>
                        <a class="btn btn-tertiary-secondary header-menu-item">Журнал</a>
                        <a class="btn btn-tertiary-secondary header-menu-item">О нас</a>
                    </div>
                    <button class="btn btn-hamburger header-menu-item">
                        <span class="hamburger-l-1"></span>
                        <span class="hamburger-l-2"></span>
                    </button>
                </nav>
                <div class="search-block with-links open-search-block">
                    <div class="" >
                        <input name="text" type="search" value="" class="" placeholder="Что хотите найти?" >
                        <input class="" type="button" value="Найти">
                    </div>

                    <button class="search-block__clear hidden">Очистить</button>
                    <button class="btn btn-cnv-square search-btn hidden" type="submit">Найти</button>
                    <div class="clear search-close">
                        <svg class="search-close-btn" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: block;">
                            <rect x="3.69147" y="19.2479" width="22" height="1.5" rx="0.75" transform="rotate(-45 3.69147 19.2479)" fill="#616263"></rect>
                            <rect x="4.75214" y="3.69141" width="22" height="1.5" rx="0.75" transform="rotate(45 4.75214 3.69141)" fill="#616263"></rect>
                        </svg>
                    </div>

                    <div class="search-block-links" style="top: 58px;">
                        <div class="container animate">
                            <div class="links-block-group">
                                <div class="links-block">
                                    <span class="h-title-small">Часто ищут</span>
                                    <div class="links-block-columns">
                                        <div class="links-block-column">

                                            <a class="search-link" href="/deposits/fizicheskim-licam" onclick="g('link_search')">
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="36" height="36" rx="8" fill="#F4F5F6"></rect>
                                                    <path d="M17.2187 21.8996C20.2953 21.8543 22.7528 19.3235 22.7075 16.2468C22.6623 13.1701 20.1314 10.7127 17.0547 10.7579C13.978 10.8032 11.5206 13.334 11.5659 16.4107C11.6111 19.4874 14.142 21.9448 17.2187 21.8996Z" stroke="#616263" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M24.5162 25.324L20.6831 20.7244" stroke="#616263" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Вклады физическим лицам
                                            </a>


                                            <a class="search-link" href="/deposits/vygodnye" onclick="g('link_search')">
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="36" height="36" rx="8" fill="#F4F5F6"></rect>
                                                    <path d="M17.2187 21.8996C20.2953 21.8543 22.7528 19.3235 22.7075 16.2468C22.6623 13.1701 20.1314 10.7127 17.0547 10.7579C13.978 10.8032 11.5206 13.334 11.5659 16.4107C11.6111 19.4874 14.142 21.9448 17.2187 21.8996Z" stroke="#616263" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M24.5162 25.324L20.6831 20.7244" stroke="#616263" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Выгодные вклады
                                            </a>


                                            <a class="search-link" href="/deposits/s-popolneniem" onclick="g('link_search')">
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="36" height="36" rx="8" fill="#F4F5F6"></rect>
                                                    <path d="M17.2187 21.8996C20.2953 21.8543 22.7528 19.3235 22.7075 16.2468C22.6623 13.1701 20.1314 10.7127 17.0547 10.7579C13.978 10.8032 11.5206 13.334 11.5659 16.4107C11.6111 19.4874 14.142 21.9448 17.2187 21.8996Z" stroke="#616263" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M24.5162 25.324L20.6831 20.7244" stroke="#616263" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                С пополнением
                                            </a>

                                        </div>
                                        <div class="links-block-column">

                                            <a class="search-link" href="/deposits/juridicheskim-licam" onclick="g('link_search')">
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="36" height="36" rx="8" fill="#F4F5F6"></rect>
                                                    <path d="M17.2187 21.8996C20.2953 21.8543 22.7528 19.3235 22.7075 16.2468C22.6623 13.1701 20.1314 10.7127 17.0547 10.7579C13.978 10.8032 11.5206 13.334 11.5659 16.4107C11.6111 19.4874 14.142 21.9448 17.2187 21.8996Z" stroke="#616263" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M24.5162 25.324L20.6831 20.7244" stroke="#616263" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Вклады юридическим лицам
                                            </a>


                                            <a class="search-link" href="/deposits/pensionnyj" onclick="g('link_search')">
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="36" height="36" rx="8" fill="#F4F5F6"></rect>
                                                    <path d="M17.2187 21.8996C20.2953 21.8543 22.7528 19.3235 22.7075 16.2468C22.6623 13.1701 20.1314 10.7127 17.0547 10.7579C13.978 10.8032 11.5206 13.334 11.5659 16.4107C11.6111 19.4874 14.142 21.9448 17.2187 21.8996Z" stroke="#616263" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M24.5162 25.324L20.6831 20.7244" stroke="#616263" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Вклады для пенсионеров
                                            </a>


                                            <a class="search-link" href="/deposits/v-rubljah" onclick="g('link_search')">
                                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="36" height="36" rx="8" fill="#F4F5F6"></rect>
                                                    <path d="M17.2187 21.8996C20.2953 21.8543 22.7528 19.3235 22.7075 16.2468C22.6623 13.1701 20.1314 10.7127 17.0547 10.7579C13.978 10.8032 11.5206 13.334 11.5659 16.4107C11.6111 19.4874 14.142 21.9448 17.2187 21.8996Z" stroke="#616263" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M24.5162 25.324L20.6831 20.7244" stroke="#616263" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                Вклады в рублях
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <div class="links-block">
                                    <a class="h-title-small" href="/deposits" onclick="g('link_search')">
                                        Вклады в банках
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M4 10L8 6L4 2" stroke="black" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
                                    <div class="links-block-list">
                                        <a class="search-link" href="/banks/vtb/deposits" onclick="g('link_search')">
                                            <img src="/v4/images/mini-logo/vtb.svg" alt="ВТБ">
                                            ВТБ
                                        </a>
                                        <a class="search-link" href="/banks/sberbank/deposits" onclick="g('link_search')">
                                            <img src="/v4/images/mini-logo/sber.svg" alt="Сбербанк">
                                            Сбербанк
                                        </a>
                                        <a class="search-link" href="/banks/rshb/deposits" onclick="g('link_search')">
                                            <img src="/v4/images/mini-logo/rshb.svg" alt="Россельхозбанк">
                                            Россельхозбанк
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search-blurred" onclick="searchToggle()"></div>
                    </div>
                </div>
                <div class="catalog-overlay"></div>
                <div class="flyout-background"></div>
                <div class="catalog-menu-wrapper">
                    <div class="catalog-submenu catalog-level-1">
                        <div class="catalog-menu-header">
                            <div class="catalog-title">Меню</div>
                        </div>
                        <div class="catalog-menu-list">
                            <div class="catalog-menu-item">
                                <div class="catalog-menu-i">
                                    <span>Каталог</span>
                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="catalog-submenu catalog-level-2">
                                    <div class="container">
                                        <div class="catalog-menu-header">
                                            <button class="btn btn-icon btn-back">
                                                <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                          stroke="#141414" stroke-width="1.5"
                                                          stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                            </button>
                                        </div>

                                        <div class="catalog-title">Каталог</div>

                                        <div class="tabs-wrapper">
                                            <button class="btn tab-label selected dark" data-catalog-category="all">
                                                Все
                                            </button>
                                            <button class="btn tab-label dark" data-catalog-category="children">Для
                                                детей
                                            </button>
                                        </div>

                                        <div class="catalog-menu-list catalog-menu-category"
                                             data-catalog-category="all">
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Администрирование</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Администрирование</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Аналитика данных</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Аналитика данных</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Дизайн</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Дизайн</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>Иллюстрация</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>Менеджмент</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>Программы и инструменты</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>Геймдизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>Motion-дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>Промышленный дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>Дизайн одежды</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>Дизайн интерьера</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>Ландшафтный дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>Архитектура</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Иностранные языки</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Иностранные языки</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Красота и здоровье</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Красота и здоровье</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Маркетинг</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Маркетинг</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Менеджмент</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Менеджмент</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Прикладные программы</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Прикладные программы</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Программирование</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Программирование</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Рукоделие</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Рукоделие</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Саморазвитие</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Саморазвитие</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Спорт</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Спорт</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Творчество и контент</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Творчество и контент</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Финансы</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Финансы</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Другое</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Другое</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="catalog-menu-list catalog-menu-category hidden"
                                             data-catalog-category="children">
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Дизайн</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="catalog-title">Дизайн</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Иностранные языки</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Иностранные языки</div>
                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Красота и здоровье</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Красота и здоровье</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Маркетинг</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Маркетинг</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Менеджмент</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Менеджмент</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Прикладные программы</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Прикладные программы</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Программирование</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Программирование</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Развитие</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Развитие</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Рукоделие</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Рукоделие</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Спорт</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Спорт</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Творчество и контент</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Творчество и контент</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="catalog-menu-item">
                                                <a href="#" target="_blank">
                                                    <span>Школа</span>
                                                    <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.25 15.5L12.75 10L7.25 4.5" stroke="#141414"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <div class="catalog-submenu catalog-level-3">
                                                    <div class="catalog-menu-header">
                                                        <button class="btn btn-icon btn-back">
                                                            <svg class="bi" width="24" height="24" viewBox="0 0 24 24"
                                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                      stroke="#141414" stroke-width="1.5"
                                                                      stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div class="catalog-title">Школа</div>

                                                    <div class="catalog-menu-list">
                                                        <div class="catalog-menu-item">
                                                            <a href="#all-courses" target="_blank">
                                                                <span>Все курсы категории</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#UX-UI" target="_blank">
                                                                <span>UX/UI дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#web-design" target="_blank">
                                                                <span>Веб-дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#graf-design" target="_blank">
                                                                <span>Графический дизайн</span>
                                                            </a>
                                                        </div>
                                                        <div class="catalog-menu-item">
                                                            <a href="#" target="_blank">
                                                                <span>3D-моделирование</span>
                                                                <svg class="arrow-right" width="20" height="20"
                                                                     viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.25 15.5L12.75 10L7.25 4.5"
                                                                          stroke="#141414" stroke-width="1.5"
                                                                          stroke-linecap="round"
                                                                          stroke-linejoin="round"/>
                                                                </svg>
                                                            </a>
                                                            <div class="catalog-submenu catalog-level-4">
                                                                <div class="catalog-menu-header">
                                                                    <button class="btn btn-icon btn-back">
                                                                        <svg class="bi" width="24" height="24"
                                                                             viewBox="0 0 24 24"
                                                                             fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12"
                                                                                  stroke="#141414" stroke-width="1.5"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <div class="catalog-title">3D-моделирование</div>

                                                                <div class="catalog-menu-list">
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#all-direction" target="_blank">
                                                                            <span>Все курсы направления</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-general" target="_blank">
                                                                            <span>3D-дженералист</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-animation" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="catalog-menu-item">
                                                                        <a href="#3d-visual" target="_blank">
                                                                            <span>3D-анимация</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="catalog-menu-item">
                                <a href="#Рейтинг-школ" target="_blank">Рейтинг школ</a>
                            </div>
                            <div class="catalog-menu-item">
                                <a href="#Журнал" target="_blank">Журнал</a>
                            </div>
                            <div class="catalog-menu-item">
                                <a href="#О-нас" target="_blank">О нас</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container" style="padding-top: 76px; padding-bottom: 76px;">
        <div class="row" style="gap: 20px;">
            <div style="background: var(--light_bg_secondary, #FFFFFF); width: 100%; height: 200px; border-radius: 10px; padding: 20px; display: flex;">
                <div style="margin-top: auto; margin-left: auto">
                    <button class="btn btn-primary btn-md">Смотреть курс</button>
                </div>
            </div>
            <div style="background: red; width: 100%; height: 200px; border-radius: 10px; padding: 20px; display: flex;">
                <div style="margin-top: auto; margin-left: auto">
                    <button class="btn btn-primary btn-md">Смотреть курс</button>
                </div>
            </div>
            <div style="background: var(--light_bg_secondary, #FFFFFF); width: 100%; height: 200px; border-radius: 10px; padding: 20px; display: flex;">
                <div style="margin-top: auto; margin-left: auto">
                    <button class="btn btn-primary btn-md">Смотреть курс</button>
                </div>
            </div>
            <div style="background: red; width: 100%; height: 200px; border-radius: 10px; padding: 20px; display: flex;">
                <div style="margin-top: auto; margin-left: auto">
                    <button class="btn btn-primary btn-md">Смотреть курс</button>
                </div>
            </div>
            <div style="background: var(--light_bg_secondary, #FFFFFF); width: 100%; height: 200px; border-radius: 10px; padding: 20px; display: flex;">
                <div style="margin-top: auto; margin-left: auto">
                    <button class="btn btn-primary btn-md">Смотреть курс</button>
                </div>
            </div>
            <div style="background: red; width: 100%; height: 200px; border-radius: 10px; padding: 20px; display: flex;">
                <div style="margin-top: auto; margin-left: auto">
                    <button class="btn btn-primary btn-md">Смотреть курс</button>
                </div>
            </div>
            <div style="background: var(--light_bg_secondary, #FFFFFF); width: 100%; height: 200px; border-radius: 10px; padding: 20px; display: flex;">
                <div style="margin-top: auto; margin-left: auto">
                    <button class="btn btn-primary btn-md">Смотреть курс</button>
                </div>
            </div>
            <div style="background: red; width: 100%; height: 200px; border-radius: 10px; padding: 20px; display: flex;">
                <div style="margin-top: auto; margin-left: auto">
                    <button class="btn btn-primary btn-md">Смотреть курс</button>
                </div>
            </div>
            <div style="background: var(--light_bg_secondary, #FFFFFF); width: 100%; height: 200px; border-radius: 10px; padding: 20px; display: flex;">
                <div style="margin-top: auto; margin-left: auto">
                    <button class="btn btn-primary btn-md">Смотреть курс</button>
                </div>
            </div>
        </div>

    </div>
</div>

