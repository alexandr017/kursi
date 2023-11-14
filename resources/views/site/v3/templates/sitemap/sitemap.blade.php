<?php
//$ampLink = linkToAMP();
?>

@extends('site.v3.layouts.main')
@section ('title', Shortcode::compile($page->title))
@section ('og_title', Shortcode::compile($page->h1))
@section ('meta_description', Shortcode::compile($page->meta_description))

@section('content')

<link rel="stylesheet" href="/v3/css/html-sitemap.css"> <?php // todo подключение стилей не должно быть в body ?>

<div class="content max-width">
    <h1 class="sitemap_block-section_title">Карта сайта</h1>
    <div class="sitemap_cont">
        <div class="sitemap_block-sections_cont">
            <h2 class="sitemap_block-section_sub_title">
                Все категории
            </h2>
            <div class="sitemap_block-sections_cont ">
                <ul class="second_lvl">
                    <li id="bx_1847241719_45">
                        <p class="bx_sitemap_li_title">
                            <a href="/sitemap/kursy/administrirovanie/">
                                Администрирование
                            </a>
                        </p>
                    </li>
                    <li id="bx_1847241719_106">
                        <p class="bx_sitemap_li_title">
                            <a href="/sitemap/kursy/analitika/">
                                Аналитика
                            </a>
                        </p>
                    </li>
                    <li id="bx_1847241719_796">
                        <p class="bx_sitemap_li_title">
                            <a href="/sitemap/kursy/besplatnye/">
                                Бесплатные
                            </a>
                        </p>
                    </li>
                    <li id="bx_1847241719_44">
                        <p class="bx_sitemap_li_title">
                            <a href="/sitemap/kursy/dizajn/">
                                Дизайн
                            </a>
                        </p>
                    </li>
                    <li id="bx_1847241719_460">
                        <p class="bx_sitemap_li_title">
                            <a href="/sitemap/kursy/dlya-detej/">
                                Для детей
                            </a>
                        </p>
                    </li>
                    <li id="bx_1847241719_46">
                        <p class="bx_sitemap_li_title">
                            <a href="/sitemap/kursy/inostrannye-yazyki/">
                                Иностранные языки
                            </a>
                        </p>
                    </li>
                    <li id="bx_1847241719_108">
                        <p class="bx_sitemap_li_title">
                            <a href="/sitemap/kursy/krasota-i-zdorove/">
                                Красота и здоровье
                            </a>
                        </p>
                    </li>
                    <li id="bx_1847241719_15">
                        <p class="bx_sitemap_li_title">
                            <a href="/sitemap/kursy/marketing/">
                                Маркетинг
                            </a>
                        </p>
                    </li>
                    <li id="bx_1847241719_4">
                        <p class="bx_sitemap_li_title">
                            <a href="/sitemap/kursy/menedzhment/">
                                Менеджмент
                            </a>
                        </p>
                    </li>
                    <li id="bx_1847241719_109">
                        <p class="bx_sitemap_li_title">
                            <a href="/sitemap/kursy/prikladnye-programmy/">
                                Прикладные программы
                            </a>
                        </p>
                    </li>
                    <li id="bx_1847241719_1">
                        <p class="bx_sitemap_li_title">
                            <a href="/sitemap/kursy/programmirovanie/">
                                Программирование
                            </a>
                        </p>
                    </li>
                    <li id="bx_1847241719_110">
                        <p class="bx_sitemap_li_title">
                            <a href="/sitemap/kursy/rukodelie/">
                                Рукоделие
                            </a>
                        </p>
                    </li>
                    <li id="bx_1847241719_119">
                        <p class="bx_sitemap_li_title">
                            <a href="/sitemap/kursy/samorazvitie/">
                                Саморазвитие
                            </a>
                        </p>
                    </li>
                    <li id="bx_1847241719_122">
                        <p class="bx_sitemap_li_title">
                            <a href="/sitemap/kursy/sport/">
                                Спорт
                            </a>
                        </p>
                    </li>
                    <li id="bx_1847241719_127">
                        <p class="bx_sitemap_li_title">
                            <a href="/sitemap/kursy/tvorchestvo-i-kontent/">
                                Творчество и контент
                            </a>
                        </p>
                    </li>
                    <li id="bx_1847241719_125">
                        <p class="bx_sitemap_li_title">
                            <a href="/sitemap/kursy/finansy/">
                                Финансы
                            </a>
                        </p>
                    </li>
                    <li id="bx_1847241719_107">
                        <p class="bx_sitemap_li_title">
                            <a href="/sitemap/kursy/drugoe/">
                                Другое
                            </a>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sitemap_block-sections_cont">
            <h2 class="sitemap_block-section_sub_title">Онлайн-школы</h2>

            <div class="sitemap_block-sections_cont ">
                <div class="sitemap_block-section_nav">
                    <a href="/schools/">Страница раздела</a>
                    <a href="/sitemap/schools/">Все элементы</a>
                </div>
            </div>
        </div>

        <div class="sitemap_menu-cont">
            <h2 class="sitemap_menu-section_sub_title">Служебные</h2>
            <ul class="sitemap_menu-ul_cont">
                <li>
                    <div class="sitemap_menu-element">
                        <a class="bx_sitemap_li_title" href="/about/">О нас</a>
                    </div>
                </li>
                <li>
                    <div class="sitemap_menu-element">
                        <a class="bx_sitemap_li_title" href="/about/">Сотрудники</a>
                    </div>
                </li>
                <li>
                    <div class="sitemap_menu-element">
                        <a class="bx_sitemap_li_title" href="/contacts/">Контакты</a>
                    </div>
                </li>
                <li>
                    <div class="sitemap_menu-element">
                        <a class="bx_sitemap_li_title" href="/privacy/">Политика обработки персональных данных</a>
                    </div>
                </li>
                <li>
                    <div class="sitemap_menu-element">
                        <a class="bx_sitemap_li_title" href="/rules/">Пользовательское соглашение</a>
                    </div>
                </li>
                <li>
                    <div class="sitemap_menu-element">
                        <a class="bx_sitemap_li_title" href="/disclaimer/">Отказ от ответственности</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="sitemap_block-sections_cont">
            <h2 class="sitemap_block-section_sub_title">Статьи</h2>

            <div class="sitemap_block-sections_cont ">
                <div class="sitemap_block-section_nav">
                    <a href="/znaniya/">Страница раздела</a>
                </div>

                <ul class="second_lvl">
                    @foreach($postCategories as $postCategory)
                        <li>
                            <p class="bx_sitemap_li_title">
                                <a class="bx_sitemap_li_title" href="{{linkWithSlash($postCategory->url)}}">{{$postCategory->h1}}</a>
                            </p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection


@section('additional-scripts')
    @parent

@endsection