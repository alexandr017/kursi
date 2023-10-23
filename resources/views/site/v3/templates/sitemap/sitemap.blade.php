<?php
//$ampLink = linkToAMP();
?>
@extends('site.v3.layouts.main')
<?php /*
@section ('title', Shortcode::compile($page->title))
@section ('og_title', Shortcode::compile($page->h1))
@section ('meta_description', Shortcode::compile($page->meta_description))

*/ ?>

@section('content')

    <link rel="stylesheet" href="/v3/css/html-sitemap.css"> <?php // todo подключение стилей не должно быть в body ?>

    <div class="content max-width">


        <h1 class="sitemap_block-section_title"> Карта сайта</h1>
        <div class="sitemap_cont">

            <div class="sitemap_block-sections_cont">



                <h2 class="sitemap_block-section_sub_title">
                    Все категории	</h2>

                <div class="sitemap_block-sections_cont ">





                    <ul class="second_lvl">
                        <li id="bx_1847241719_45">
                            <h2 class="bx_sitemap_li_title"><a href="/sitemap/kursy/administrirovanie/">Администрирование					</a></h2></li>
                        <li id="bx_1847241719_106">
                            <h2 class="bx_sitemap_li_title"><a href="/sitemap/kursy/analitika/">Аналитика					</a></h2></li>
                        <li id="bx_1847241719_44">
                            <h2 class="bx_sitemap_li_title"><a href="/sitemap/kursy/dizajn/">Дизайн					</a></h2></li>
                        <li id="bx_1847241719_460">
                            <h2 class="bx_sitemap_li_title"><a href="/sitemap/kursy/dlya-detej/">Для детей					</a></h2></li>
                        <li id="bx_1847241719_46">
                            <h2 class="bx_sitemap_li_title"><a href="/sitemap/kursy/inostrannye-yazyki/">Иностранные языки					</a></h2></li>
                        <li id="bx_1847241719_108">
                            <h2 class="bx_sitemap_li_title"><a href="/sitemap/kursy/krasota-i-zdorove/">Красота и здоровье					</a></h2></li>
                        <li id="bx_1847241719_15">
                            <h2 class="bx_sitemap_li_title"><a href="/sitemap/kursy/marketing/">Маркетинг					</a></h2></li>
                        <li id="bx_1847241719_4">
                            <h2 class="bx_sitemap_li_title"><a href="/sitemap/kursy/menedzhment/">Менеджмент					</a></h2></li>
                        <li id="bx_1847241719_109">
                            <h2 class="bx_sitemap_li_title"><a href="/sitemap/kursy/prikladnye-programmy/">Прикладные программы					</a></h2></li>
                        <li id="bx_1847241719_1">
                            <h2 class="bx_sitemap_li_title"><a href="/sitemap/kursy/programmirovanie/">Программирование					</a></h2></li>
                        <li id="bx_1847241719_110">
                            <h2 class="bx_sitemap_li_title"><a href="/sitemap/kursy/rukodelie/">Рукоделие					</a></h2></li>
                        <li id="bx_1847241719_119">
                            <h2 class="bx_sitemap_li_title"><a href="/sitemap/kursy/samorazvitie/">Саморазвитие					</a></h2></li>
                        <li id="bx_1847241719_122">
                            <h2 class="bx_sitemap_li_title"><a href="/sitemap/kursy/sport/">Спорт					</a></h2></li>
                        <li id="bx_1847241719_127">
                            <h2 class="bx_sitemap_li_title"><a href="/sitemap/kursy/tvorchestvo-i-kontent/">Творчество и контент					</a></h2></li>
                        <li id="bx_1847241719_125">
                            <h2 class="bx_sitemap_li_title"><a href="/sitemap/kursy/finansy/">Финансы					</a></h2></li>
                        <li id="bx_1847241719_107">
                            <h2 class="bx_sitemap_li_title"><a href="/sitemap/kursy/drugoe/">Другое					</a></h2></li>
                    </ul>
                </div>
            </div>








            <div class="sitemap_block-sections_cont">

                <h2 class="sitemap_block-section_sub_title">Онлайн-школы</h2>

                <div class="sitemap_block-sections_cont ">
                    <div class="sitemap_block-section_nav">
                        <a href="/schools/">Страница раздела</a>
                        <a href="/sitemap/schools/?show_elements=Y">Все элементы</a>
                    </div>
                </div>
            </div>






            <div class="sitemap_menu-cont">
                <h2 class="sitemap_menu-section_sub_title">Служебные</h2>
                <ul class="sitemap_menu-ul_cont">
                    <li><a class="bx_sitemap_li_title" href="/about/">О нас</a></li>
                    <li><a class="bx_sitemap_li_title" href="/about/">Сотрудники</a></li>
                    <li><a class="bx_sitemap_li_title" href="/contacts/">Контакты</a></li>
                    <li><a class="bx_sitemap_li_title" href="/privacy/">Политика обработки персональных данных</a></li>
                    <li><a class="bx_sitemap_li_title" href="/rules/">Пользовательское соглашение</a></li>
                    <li><a class="bx_sitemap_li_title" href="/disclaimer/">Отказ от ответственности</a></li>
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
                                <a class="bx_sitemap_li_title" href="{{linkWithSlash($postCategory->url)}}">{{$postCategory->h1}}</a>
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




