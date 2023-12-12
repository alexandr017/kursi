<?php
includeComponent('components/atoms/button');
includeComponent("components/atoms/tabs");
includeComponent("components/molecules/input");
includeComponent("components/organisms/header");
?>
<div style="background: var(--light_bg_primary, #F5F6F7)">

    <header class="header-main bg-dark blur-size-l">
        <div class="container">
            <div class="header-wrapper">
                <div class="header-wrapper-left">
                    <a class="header-logo" href="/">
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
                <div class="search-block open-search-block">
                    <div class="search-input-wrapper">
                        <input class="form-control search-input-text" type="search" name="" value="" placeholder="Что хотите найти?">
                    </div>
                    <button class="btn btn-tertiary-label search-block-clear hidden">Очистить</button>
                    <button class="btn btn-primary search-btn hidden">Найти</button>

                    <button class="btn btn-icon btn-icon-close search-close-btn">
                        <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3.96973" y="19.2781" width="22" height="1.5" rx="0.75" transform="rotate(-45 3.96973 19.2781)" fill="#141414"></rect>
                            <rect x="5.03027" y="3.7218" width="22" height="1.5" rx="0.75" transform="rotate(45 5.03027 3.7218)" fill="#141414"></rect>
                        </svg>
                    </button>

                    <div class="search-block-links" >
                        <div class="container animate">
                            <div class="links-block-group">
                                <div class="links-block ">
                                    <div class="h-title-small">Часто ищут</div>
                                    <div class="links-block-columns">
                                        <div class="links-block-column">
                                            <a class="btn btn-tertiary-light search-link" href="/dlya-detej" target="_blank">
                                                <svg class="btn-tertiary-icon"  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.9093 12.7607L17.0931 16.9445M8.63102 14.5036C11.7923 14.5036 14.3551 11.9408 14.3551 8.77952C14.3551 5.61822 11.7923 3.05548 8.63102 3.05548C5.46972 3.05548 2.90698 5.61822 2.90698 8.77952C2.90698 11.9408 5.46972 14.5036 8.63102 14.5036Z" stroke="black" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="btn-tertiary-text">Для детей</span>
                                            </a>
                                            <a class="btn btn-tertiary-light search-link" href="/programmirovanie" target="_blank">
                                                <svg class="btn-tertiary-icon"  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.9093 12.7607L17.0931 16.9445M8.63102 14.5036C11.7923 14.5036 14.3551 11.9408 14.3551 8.77952C14.3551 5.61822 11.7923 3.05548 8.63102 3.05548C5.46972 3.05548 2.90698 5.61822 2.90698 8.77952C2.90698 11.9408 5.46972 14.5036 8.63102 14.5036Z" stroke="black" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="btn-tertiary-text">Программирование</span>
                                            </a>
                                            <a class="btn btn-tertiary-light search-link" href="/dizajn" target="_blank">
                                                <svg class="btn-tertiary-icon"  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.9093 12.7607L17.0931 16.9445M8.63102 14.5036C11.7923 14.5036 14.3551 11.9408 14.3551 8.77952C14.3551 5.61822 11.7923 3.05548 8.63102 3.05548C5.46972 3.05548 2.90698 5.61822 2.90698 8.77952C2.90698 11.9408 5.46972 14.5036 8.63102 14.5036Z" stroke="black" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="btn-tertiary-text">Дизайн</span>
                                            </a>
                                        </div>
                                        <div class="links-block-column">
                                            <a class="btn btn-tertiary-light search-link" href="/analitika" target="_blank">
                                                <svg class="btn-tertiary-icon"  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.9093 12.7607L17.0931 16.9445M8.63102 14.5036C11.7923 14.5036 14.3551 11.9408 14.3551 8.77952C14.3551 5.61822 11.7923 3.05548 8.63102 3.05548C5.46972 3.05548 2.90698 5.61822 2.90698 8.77952C2.90698 11.9408 5.46972 14.5036 8.63102 14.5036Z" stroke="black" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="btn-tertiary-text">Аналитика</span>
                                            </a>
                                            <a class="btn btn-tertiary-light search-link" href="/inostrannye-yazyki" target="_blank">
                                                <svg class="btn-tertiary-icon"  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.9093 12.7607L17.0931 16.9445M8.63102 14.5036C11.7923 14.5036 14.3551 11.9408 14.3551 8.77952C14.3551 5.61822 11.7923 3.05548 8.63102 3.05548C5.46972 3.05548 2.90698 5.61822 2.90698 8.77952C2.90698 11.9408 5.46972 14.5036 8.63102 14.5036Z" stroke="black" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="btn-tertiary-text">Иностранные языки</span>
                                            </a>
                                            <a class="btn btn-tertiary-light search-link" href="/marketing" >
                                                <svg class="btn-tertiary-icon"  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.9093 12.7607L17.0931 16.9445M8.63102 14.5036C11.7923 14.5036 14.3551 11.9408 14.3551 8.77952C14.3551 5.61822 11.7923 3.05548 8.63102 3.05548C5.46972 3.05548 2.90698 5.61822 2.90698 8.77952C2.90698 11.9408 5.46972 14.5036 8.63102 14.5036Z" stroke="black" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="btn-tertiary-text">Маркетинг</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="links-block hidden">
                                    <div class="h-title-small result">Результаты поиска</div>
                                    <div class="links-block-list search-links-result">
                                        <a class="link tertiary-label search-link" href="#" target="_blank">Курсы UX/UI дизайна</a>
                                        <a class="link tertiary-label search-link" href="#" target="_blank">Курсы графического дизайна</a>
                                        <a class="link tertiary-label search-link" href="#" target="_blank">Курсы графического дизайна</a>
                                        <a class="link tertiary-label search-link" href="#" target="_blank">Курсы 3D-дженералист</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                <a href="kursy.ru" target="_blank">
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
                                                            <a href="kursy.ru" target="_blank">
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

