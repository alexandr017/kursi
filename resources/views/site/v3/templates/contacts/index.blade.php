@extends('site.v3.layouts.main')
@section ('title', Shortcode::compile($page->title))
@section ('og_title', Shortcode::compile($page->h1))
@section ('meta_description', Shortcode::compile($page->meta_description))

@section('style')
    <link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap' rel='stylesheet' type='text/css'>

@endsection

@section('content')

    <div class="content max-width " onclick="contentCloseBlur(this)">
        <h1>
            Контакты
        </h1>

        <div class="contacts_page-big_person-cont contacts_page-big_person-line">
            <div class="contacts_page-big_person-card">
                <img src="/upload/iblock/007/2pxr25s6amljah9zqkeo6l1h8trjyate/DSCF6172-1-_1_.webp" class="contacts_page-pc_picture" alt="Валерия Левина" title="Валерия Левина">
                <img src="/upload/iblock/470/ufwcfv6l50gq6mo8ho7wst2d7wbov3p5/kruzhochki150_10.png" class="contacts_page-mobile_picture" alt="Валерия Левина" title="Валерия Левина">
                <div class="contacts_page-big_person-data">
                    <a class="contacts_page-big_person-name" href="/about/team/valeriya-levina/">
                        Валерия Левина			</a>
                    <p class="contacts_page-big_person-department">SMM-специалист</p>
                    <div class="contacts_page-big_person-link">
                        <a class="white_button_template" href="/about/team/valeriya-levina/">Подробнее</a>
                    </div>
                </div>
            </div>
            <!-- <div class="contacts_page-big_person-info"> -->
            <p class="contacts_page-big_person-title">Мессенджеры</p>
            <p class="contacts_page-big_person-subtitle">Быстро ответим на ваши вопросы в наших мессенджерах</p>
            <div class="contacts_page-big_person-contacts">
                <div class="contacts_page-big_person-contact">

                    <a href="https://vk.com/kursyru" target="_blank" rel="nofollow"><img src="/local/templates/kursi/img/social_icons/vk_black.svg" alt="VK Курсы.ру" title="VK Курсы.ру"></a>
                </div>
                <div class="contacts_page-big_person-contact">

                    <a href="https://t.me/kursy_ru_support_bot" target="_blank" rel="nofollow"><img src="/local/templates/kursi/img/social_icons/tg_black.svg" alt="Telegram Курсы.ру" title="Telegram Курсы.ру"></a>
                </div>
            </div>
            <script type="application/ld+json">
			{
				"@context": "http://schema.org/",
				"@type": "Person",
				"name": "Валерия Левина",
				"image": "-",
				"url": "https://kursy.ru/about/team/valeriya-levina/",
				"jobTitle": "SMM-специалист",
				"worksFor": {
					"@type": "Organization",
					"name": "Курсы.ру"
				},
				"sameAs": [
					"valeriya.levina@kursy.ru"				]
			}
		</script>
            <!-- </div> -->
        </div>

        <div class="contacts_page-big_person-cont">
            <div class="contacts_page-big_person-card">
                <img src="/upload/iblock/408/gw2bju94un04xzpoccatozxs5j7pqip8/Mihail-_1_.webp" class="contacts_page-pc_picture" alt="Михаил Парфенов" title="Михаил Парфенов">
                <img src="/upload/iblock/a8e/7bwtgjj816mb5sf2xaxxh9kp6jvqlhum/kruzhochki150_Montazhnaya_oblast_1.webp" class="contacts_page-mobile_picture" alt="Михаил Парфенов" title="Михаил Парфенов">
                <div class="contacts_page-big_person-data">
                    <a class="contacts_page-big_person-name" href="/about/team/mikhail-parfenov">
                        Михаил Парфенов			</a>
                    <p class="contacts_page-big_person-department">Менеджер по продажам</p>
                    <div class="contacts_page-big_person-link">
                        <a class="white_button_template" href="/about/team/mikhail-parfenov">Подробнее</a>
                    </div>
                </div>
            </div>
            <!-- <div class="contacts_page-big_person-info"> -->
            <p class="contacts_page-big_person-title">Телефон</p>
            <p class="contacts_page-big_person-subtitle">Бесплатный звонок и консультация по горячей линии</p>
            <div class="contacts_page-big_person-contacts">
                <img src="/local/templates/kursi/img/social_icons/ring_phone_black.svg" class="pc" alt="Телефон Курсы.ру" title="Телефон Курсы.ру">
                <img src="/local/templates/kursi/img/social_icons/ring_phone_blue.svg" class="mobile" alt="Телефон Курсы.ру" title="Телефон Курсы.ру">
                <div class="contacts_page-big_person-contact">
                    <a href="tel:+7 (804) 700-20-77">+7 (804) 700-20-77</a>
                    <p>горячая линия</p>
                </div>
            </div>
            <script type="application/ld+json">
			{
				"@context": "http://schema.org/",
				"@type": "Person",
				"name": "Михаил Парфенов",
				"image": "-",
				"url": "https://kursy.ru/about/team/mikhail-parfenov/",
				"jobTitle": "Менеджер по продажам",
				"worksFor": {
					"@type": "Organization",
					"name": "Курсы.ру"
				},
				"sameAs": [
					"mikhail.parfenov@kursy.ru"				]
			}
		</script>
            <!-- </div> -->
        </div>

        <div class="callback-result_form-cont" id="callback_form_1cbb8df9d0a703ba07e0">

            <form name="backcall" action="/contacts/" method="POST" enctype="multipart/form-data"><input type="hidden" name="sessid" id="sessid" value="ae0025ed83b4bca96efc4fd6a0026662"><input type="hidden" name="WEB_FORM_ID" value="3">

                <div class="callback-cont">
                    <div class="callback-form_title">
                        <h3>Заказать обратный звонок</h3>
                    </div>

                    <div class="callback-form_subtitle">
                        <p>Появился вопрос по нешему<br> сайту или онлайн-образованию?<br> Оставьте заявку, и мы перезвоним</p>
                    </div>

                    <div class="callback-form">

                        <div class="callback-form_cont">
                            <!--  -->
                            <!--  -->
                            <div class="callback-form_field_cont">
                                <div class="callback-form_field_title">
                                    Имя																	</div>
                                <div class="callback-form_field_input ">
                                    <input type="text" data-valid="empty" data-title="Имя" name="form_text_26" value="">					</div>
                            </div>
                            <div class="callback-form_field_cont">
                                <div class="callback-form_field_title">
                                    Телефон																	</div>
                                <div class="callback-form_field_input ">
                                    <input type="text" placeholder="+7___-___-____" id="phone_27" data-valid="phone" data-title="Телефон" name="form_text_27" value="">					</div>
                            </div>
                            <div class="callback-form_field_cont">


                                <div class="callback-agreement_cont custom_checkbox">
                                    <style media="screen">
                                        .custom_checkbox .custom_label:before {
                                            background-image: url("/local/templates/kursi/img/checkbox_arrow.svg");
                                        }
                                    </style>
                                    <input type="checkbox" checked="" id="28" name="form_checkbox_AGREEMENT[]" value="28"><label for="28"> Я даю согласие на <a href="/rules/" target="_blank">обработку персональных данных</a></label>						<!-- <label class="callback-agreement_text custom_label" for="28">
													</label> -->
                                </div>
                            </div>
                            <p style="margin-bottom: 24px;">
                            </p>
                            <div class="callback-form_buttons">
                                <input class="blue_button_template" type="submit" name="web_form_submit" value="Заказать">
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        </div>

        <div class="callback-result_form-cont" id="callback_form_ed47af957f23c4881ee3">

            <form name="backquestion" action="/contacts/" method="POST" enctype="multipart/form-data"><input type="hidden" name="sessid" id="sessid_1" value="ae0025ed83b4bca96efc4fd6a0026662"><input type="hidden" name="WEB_FORM_ID" value="4">

                <div class="callback-cont">
                    <div class="callback-form_title">
                        <h3>Задайте нам вопрос</h3>
                    </div>

                    <div class="callback-form_subtitle">
                        <p>Напишите свой вопрос, и мы ответим<br>
                            вам в кратчайшие сроки!</p>
                    </div>

                    <div class="callback-form">

                        <div class="callback-form_cont">
                            <!--  -->
                            <!--  -->
                            <div class="callback-form_field_cont">
                                <div class="callback-form_field_title">
                                    Имя																	</div>
                                <div class="callback-form_field_input ">
                                    <input type="text" data-title="Имя" name="form_text_29" value="">					</div>
                            </div>
                            <div class="callback-form_field_cont">
                                <div class="callback-form_field_title">
                                    Почта																	</div>
                                <div class="callback-form_field_input ">
                                    <input type="text" data-title="e-mail" name="form_email_30" value="" size="0">					</div>
                            </div>
                            <div class="callback-form_field_cont">
                                <div class="callback-form_field_title">
                                    Вопрос																	</div>
                                <div class="callback-form_field_input ">
                                    <textarea name="form_textarea_31" cols="40" rows="5" placeholder="Напишите свой вопрос" data-title="Вопрос"></textarea>					</div>
                            </div>
                            <div class="callback-form_field_cont">


                                <div class="callback-agreement_cont custom_checkbox">
                                    <style media="screen">
                                        .custom_checkbox .custom_label:before {
                                            background-image: url("/local/templates/kursi/img/checkbox_arrow.svg");
                                        }
                                    </style>
                                    <input type="checkbox" checked="" id="32" name="form_checkbox_AGREEMENT[]" value="32"><label for="32"> Я даю согласие на <a href="/rules/" target="_blank">обработку персональных данных</a></label>						<!-- <label class="callback-agreement_text custom_label" for="32">
													</label> -->
                                </div>
                            </div>
                            <p style="margin-bottom: 24px;">
                            </p>
                            <div class="callback-form_buttons">
                                <input class="blue_button_template" type="submit" name="web_form_submit" value="Отправить">
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        </div>

        <div class="contacts_page-text_block">
            <div class="contacts_page-text_title">
                <h2>Стать партнёром</h2>
            </div>
            <div class="contacts_page-text_subtitle">
                Мы открыты к сотрудничеству, все ваши предложения по партнерства вы можете писать нам на почту
            </div>
            <div class="contacts_page-text_link">
                <a href="mailto:partners@kursy.ru">partners@kursy.ru</a>
            </div>
        </div>

        <div class="contacts_page-text_block">
            <div class="contacts_page-text_title">
                <h2>Адрес</h2>
            </div>
            <div class="contacts_page-text_subtitle">
                Наш офис находится по адресу:<br>
                ул. Овражная, 8, оф. 8	</div>
            <div class="contacts_page-map_cont">


                <div class="bx-yandex-view-layout">
                    <div class="bx-yandex-view-map">
                        <div id="BX_YMAP_MAP_zKXRla" class="bx-yandex-map" style="height: 500px; width: 100%;max-width: 100%;"><ymaps class="ymaps-map ymaps-i-ua_js_yes" style="z-index: 0; width: 1116px; height: 500px;"><ymaps class="ymaps-glass-pane ymaps-events-pane" style="z-index: 500; position: absolute; width: 1116px; height: 500px; left: 0px; top: 0px; user-select: none; transform: translate3d(0px, 0px, 0px) scale(1, 1); cursor: url(&quot;https://api-maps.yandex.ru/2.0/./images/ef50ac9e93aaebe3299791c79f277f8e.cur&quot;) 16 16, url(&quot;https://api-maps.yandex.ru/2.0/./images/ef50ac9e93aaebe3299791c79f277f8e.cur&quot;), move;" unselectable="on"></ymaps><ymaps class="ymaps-layers-pane" style="z-index: 100; position: absolute; left: 558px; top: 250px;"><ymaps style="z-index: 150; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1);"><canvas style="position: absolute; width: 1372px; height: 756px; left: -686px; top: -378px;" height="756" width="1372"></canvas></ymaps></ymaps><ymaps class="ymaps-copyrights-pane" style="z-index: 1000; position: absolute;"><ymaps><ymaps class="ymaps-copyrights-logo"><ymaps class="ymaps-logotype-div"><a target="_blank" class="ymaps-logo-link ymaps-logo-link-ru" href="https://yandex.ru/maps/?origin=jsapi&amp;ll=82.920664,55.058997&amp;z=17&amp;l="><ymaps class="ymaps-logo-link-wrap"></ymaps></a></ymaps></ymaps><ymaps class="ymaps-copyrights-legend"><ymaps class="ymaps-copyright-legend-container"><ymaps class="ymaps-copyright-legend"><ymaps class="ymaps-copyright-legend-element ymaps-copyright-legend-element-black"><ymaps style="display: inline;">© Яндекс</ymaps></ymaps></ymaps><ymaps class="ymaps-copyright-agreement ymaps-copyright-agreement-black"><a href="https://yandex.ru/legal/maps_termsofuse/?lang=ru" target="_blank">Условия использования</a></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps style="z-index: 850; height: 0px; width: 0px; bottom: 0px; left: 0px; position: absolute;"><ymaps style="bottom: 5px; left: 140px; position: absolute;"><iframe src="https://api-maps.yandex.ru/services/inception/?lang=ru_RU&amp;iframe_id=id_1695381927539211035&amp;api_version=2.0&amp;url=%2Fmap&amp;data=%7B%22mapState%22%3A%7B%22origin%22%3A%22jsapi_2_0%22%2C%22source%22%3A%22api-maps%22%2C%22from%22%3A%22api-maps%22%2C%22host%22%3A%22kursy.ru%22%7D%7D" width="113" height="24" scrolling="no" frameborder="0" style="overflow: hidden;"></iframe></ymaps></ymaps><ymaps class="ymaps-controls-pane" style="z-index: 800; position: static;"><ymaps class="ymaps-controls-righttop" style="z-index: 800;"><ymaps style="top: 5px; right: 5px; position: absolute;"><ymaps><ymaps class="ymaps-b-select ymaps-b-select_control_listbox" style=""><ymaps class="ymaps-b-form-button ymaps-b-form-button_theme_grey-no-transparent-26 ymaps-b-form-button_height_26 ymaps-i-bem" role="button" unselectable="on" style="user-select: none;"><ymaps class="ymaps-b-form-button__left"></ymaps><ymaps class="ymaps-b-form-button__content"><ymaps class="ymaps-b-form-button__text"><ymaps id="id_169538192753921102_0" unselectable="on" style="user-select: none;"><ymaps><ymaps class="ymaps-b-select__title" style="display: block; width: 62px;">Схема</ymaps><ymaps class="ymaps-b-select__arrow" title="Развернуть"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-b-popupa ymaps-b-popupa_layout_yes ymaps-b-popupa_theme_white ymaps-i-bem"><ymaps class="ymaps-b-popupa__shadow"></ymaps><ymaps class="ymaps-b-popupa__body ymaps-b-popupa__body_theme_white"><ymaps class="ymaps-b-popupa__ie-gap">&nbsp;</ymaps><ymaps class="ymaps-b-listbox-panel" style=""><ymaps><ymaps class="ymaps-group"><ymaps><ymaps></ymaps><ymaps><ymaps class="ymaps-b-listbox-panel__item ymaps-b-listbox-panel__item_state_current"><ymaps class="ymaps-b-listbox-panel__item-link" unselectable="on" style="user-select: none;">Схема</ymaps><ymaps class="ymaps-b-listbox-panel__item-flag"></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps></ymaps><ymaps><ymaps class="ymaps-b-listbox-panel__item "><ymaps class="ymaps-b-listbox-panel__item-link" unselectable="on" style="user-select: none;">Спутник</ymaps><ymaps class="ymaps-b-listbox-panel__item-flag"></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps></ymaps><ymaps><ymaps class="ymaps-b-listbox-panel__item "><ymaps class="ymaps-b-listbox-panel__item-link" unselectable="on" style="user-select: none;">Гибрид</ymaps><ymaps class="ymaps-b-listbox-panel__item-flag"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-controls-lefttop" style="z-index: 800;"><ymaps class="ymaps-b-zoom_hints-pos_right" style="top: 75px; left: 5px; position: absolute;"><ymaps><ymaps class="ymaps-b-zoom"><ymaps class="ymaps-b-zoom__button ymaps-b-zoom__button_type_minus" unselectable="on" style="user-select: none;"><ymaps class="ymaps-b-form-button ymaps-b-form-button_size_sm ymaps-b-form-button_theme_grey-sm ymaps-b-form-button_height_26 ymaps-i-bem" role="button"><ymaps class="ymaps-b-form-button__left"></ymaps><ymaps class="ymaps-b-form-button__content"><ymaps class="ymaps-b-form-button__text"><ymaps class="ymaps-b-zoom__sprite"></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-b-zoom__scale" style="height: 132.667px; user-select: none;" unselectable="on"><ymaps class="ymaps-b-zoom__scale-bg"></ymaps><ymaps class="ymaps-b-zoom__mark" style="top: 122px;"><ymaps class="ymaps-b-zoom__mark-inner"><ymaps class="ymaps-b-zoom__sprite"></ymaps></ymaps></ymaps><ymaps class="ymaps-b-hint-placeholder"><ymaps><ymaps><ymaps class="ymaps-b-zoom__hint" style="top: 17px;"><ymaps class="ymaps-b-zoom__hint-left"><ymaps class="ymaps-b-zoom__sprite"></ymaps></ymaps><ymaps class="ymaps-b-zoom__hint-content"><ymaps class="ymaps-b-zoom__hint-text">мир</ymaps></ymaps><ymaps class="ymaps-b-zoom__hint-right"><ymaps class="ymaps-b-zoom__sprite"></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps class="ymaps-b-zoom__hint" style="top: 38px;"><ymaps class="ymaps-b-zoom__hint-left"><ymaps class="ymaps-b-zoom__sprite"></ymaps></ymaps><ymaps class="ymaps-b-zoom__hint-content"><ymaps class="ymaps-b-zoom__hint-text">страна</ymaps></ymaps><ymaps class="ymaps-b-zoom__hint-right"><ymaps class="ymaps-b-zoom__sprite"></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps class="ymaps-b-zoom__hint" style="top: 66px;"><ymaps class="ymaps-b-zoom__hint-left"><ymaps class="ymaps-b-zoom__sprite"></ymaps></ymaps><ymaps class="ymaps-b-zoom__hint-content"><ymaps class="ymaps-b-zoom__hint-text">город</ymaps></ymaps><ymaps class="ymaps-b-zoom__hint-right"><ymaps class="ymaps-b-zoom__sprite"></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps class="ymaps-b-zoom__hint" style="top: 94px;"><ymaps class="ymaps-b-zoom__hint-left"><ymaps class="ymaps-b-zoom__sprite"></ymaps></ymaps><ymaps class="ymaps-b-zoom__hint-content"><ymaps class="ymaps-b-zoom__hint-text">улица</ymaps></ymaps><ymaps class="ymaps-b-zoom__hint-right"><ymaps class="ymaps-b-zoom__sprite"></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps class="ymaps-b-zoom__hint" style="top: 115px;"><ymaps class="ymaps-b-zoom__hint-left"><ymaps class="ymaps-b-zoom__sprite"></ymaps></ymaps><ymaps class="ymaps-b-zoom__hint-content"><ymaps class="ymaps-b-zoom__hint-text">дом</ymaps></ymaps><ymaps class="ymaps-b-zoom__hint-right"><ymaps class="ymaps-b-zoom__sprite"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-b-zoom__button ymaps-b-zoom__button_type_plus" unselectable="on" style="user-select: none;"><ymaps class="ymaps-b-form-button ymaps-b-form-button_size_sm ymaps-b-form-button_theme_grey-sm ymaps-b-form-button_height_26 ymaps-i-bem" role="button"><ymaps class="ymaps-b-form-button__left"></ymaps><ymaps class="ymaps-b-form-button__content"><ymaps class="ymaps-b-form-button__text"><ymaps class="ymaps-b-zoom__sprite"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-controls-leftbottom" style="z-index: 800;"><ymaps class="ymaps-mini-map ymaps-mini-map_state_expanded" style="bottom: 5px; left: 5px; position: absolute;"><ymaps class="ymaps-map" style="z-index: 0; position: relative; display: block; width: 128px; height: 90px; cursor: url(&quot;https://api-maps.yandex.ru/2.0/./images/ef50ac9e93aaebe3299791c79f277f8e.cur&quot;) 16 16, url(&quot;https://api-maps.yandex.ru/2.0/./images/ef50ac9e93aaebe3299791c79f277f8e.cur&quot;), move;"><ymaps style="z-index: 0; position: absolute; left: 64px; top: 45px;"><ymaps style="z-index: 200; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1);"><canvas style="position: absolute; width: 128px; height: 90px; left: -64px; top: -45px;" height="90" width="128"></canvas></ymaps></ymaps><ymaps class="ymaps-mini-map-frame" style="z-index: 1; position: absolute; left: 47px; top: 37px; width: 37px; height: 18px; display: block;"><ymaps class="ymaps-mini-map-frame-background"></ymaps></ymaps></ymaps><ymaps class="ymaps-mini-map__switcher" title="Скрыть обзорную карту"></ymaps></ymaps></ymaps><ymaps class="ymaps-controls-rightbottom" style="z-index: 800;"><ymaps style="bottom: 50px; right: 7px; position: absolute;"><ymaps><ymaps id="id_169538192753921102_1"><ymaps><ymaps class="ymaps-scaleline-control" style="width:73px"><ymaps class="ymaps-scaleline-label">50&nbsp;м</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-overlay-stepwise-pane" style="z-index: 600; position: absolute; left: 558px; top: 250px;"><ymaps class="ymaps-point-overlay" unselectable="on" style="position: absolute; height: 0px; width: 0px; user-select: none; left: 0px; top: 0px; z-index: 650;"><ymaps><ymaps class="ymaps-image-with-content" style="position: absolute; left: -10px; top: -40px; width: 37px; height: 42px; background-position: 0px 0px; background-size: 37px 42px; background-image: url(&quot;https://api-maps.yandex.ru/2.0/./images/2c3d90d4e522c1f62b6cf3e59f7a877d.png&quot;);"><ymaps class="ymaps-image-with-content-content" style="font: 13px Arial,sans-serif;position: absolute;text-align: center;left: 6px;top: 6px;width: 16px;height: 16px;"><ymaps id="id_169538192753921102_2"><ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></div>	</div>
                </div>

            </div>
        </div>

        <div class="">

        </div>

        <div class="contacts_page-slider_block swiper_styles-slider swiper-initialized swiper-horizontal swiper-backface-hidden">
            <div class="swiper_styles-wraper swiper-wrapper" id="swiper-wrapper-3fbc69332053100c5" aria-live="polite">
                <div class="contacts_page-slider_item swiper-slide swiper-slide-active" role="group" aria-label="1 / 6">
                    <img src="/upload/iblock/38d/uoxkx40hzrt2weiuib2wxxjx19prlkbm/DSCF2801-1.png" alt="">
                </div>
                <div class="contacts_page-slider_item swiper-slide swiper-slide-next" role="group" aria-label="2 / 6">
                    <img src="/upload/iblock/fe0/9264wvt7mcm9nlx6w5dqali0xliv15z0/DSCF70832.jpg" alt="">
                </div>
                <div class="contacts_page-slider_item swiper-slide" role="group" aria-label="3 / 6">
                    <img src="/upload/iblock/880/nsdlo3tsp427gefvtoe5ysw4kz928zp5/DSCF7135-_1_.jpg" alt="">
                </div>
                <div class="contacts_page-slider_item swiper-slide" role="group" aria-label="4 / 6">
                    <img src="/upload/iblock/140/xxsbh2mjhia0ym776c2kxulfc59k37tf/DSCF7088-_2_.jpg" alt="">
                </div>
                <div class="contacts_page-slider_item swiper-slide" role="group" aria-label="5 / 6">
                    <img src="/upload/iblock/da3/fqr65rcx6y5agkcbx7dqafvqn1vc53dm/DSCF7127-_2_.jpg" alt="">
                </div>
                <div class="contacts_page-slider_item swiper-slide" role="group" aria-label="6 / 6">
                    <img src="/upload/iblock/0a4/kgwq41qi3rzv8u433olmv79hof59125t/DSCF7081-_3_.jpg" alt="">
                </div>
            </div>

            <div class="swiper_styles-pagination_cont">
                <div class="contacts_page-slider_block-button-prev swiper_styles-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-3fbc69332053100c5" aria-disabled="true"></div>
                <div class="contacts_page-slider_block-pagination swiper_styles-pagination swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">6</span></div>
                <div class="contacts_page-slider_block-button-next swiper_styles-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-3fbc69332053100c5" aria-disabled="false"></div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        <div class="universalrating" id="urating_961d4cda96153311ef8a">
            <div class="universalrating-title">
                Информация была полезна?  </div>
            <div class="universalrating-form">


                <form class="" action="/local/components/sigodinweb/universalrating/ajax.php" method="post" onchange="onSubmit(event);" onsubmit="return onSubmit(event);">

                    <style media="screen">

                        #half-stars-example .rating-group {
                            display: inline-flex;
                            margin-top: 40px;
                            margin-bottom: 16px;
                        }
                        #half-stars-example .rating__icon {
                            pointer-events: none;
                        }
                        #half-stars-example .rating__input {
                            position: absolute !important;
                            left: -9999px !important;
                        }
                        #half-stars-example .rating__label {
                            cursor: pointer;
                        }
                        #half-stars-example .rating__label--half {
                            z-index: 2;
                        }

                        #half-stars-example .star-right{
                            background-image: url(/local/templates/kursi/img/rating/RightBlue.svg);
                            color: orange;
                        }

                        #half-stars-example .rating__input:checked ~ .rating__label .star-right {
                            background-image: url(/local/templates/kursi/img/rating/RightGray.svg);
                            color: #ddd;
                        }

                        #half-stars-example.hovered .rating-group:hover .rating__label .star-right{
                            background-image: url(/local/templates/kursi/img/rating/RightBlue.svg);
                            color: orange;
                        }

                        #half-stars-example.hovered .rating__input:hover ~ .rating__label .star-right{
                            background-image: url(/local/templates/kursi/img/rating/RightGray.svg);
                            color: #ddd;
                        }

                        #half-stars-example .star-left{
                            background-image: url(/local/templates/kursi/img/rating/LeftBlue.svg);
                            color: orange;
                        }

                        #half-stars-example .rating__input:checked ~ .rating__label .star-left {
                            background-image: url(/local/templates/kursi/img/rating/LeftGray.svg);
                            color: #ddd;
                        }

                        #half-stars-example.hovered .rating-group:hover .rating__label .star-left{
                            background-image: url(/local/templates/kursi/img/rating/LeftBlue.svg);
                            color: orange;
                        }

                        #half-stars-example.hovered .rating__input:hover ~ .rating__label .star-left{
                            background-image: url(/local/templates/kursi/img/rating/LeftGray.svg);
                            color: #ddd;
                        }

                        #half-stars-example.hovered .rating-group:hover .rating__input--none:not(:hover) + .rating__label .rating__icon--none {
                            color: #eee;
                        }

                        #half-stars-example .rating__input--none:checked + .rating__label .rating__icon--none {
                            color: red;
                        }

                        #half-stars-example.hovered .rating__input--none:hover + .rating__label .rating__icon--none {
                            color: red;
                        }

                        .star-right, .star-left {
                            width: 18px;
                            height: 36px;
                            background-repeat: no-repeat;
                        }
                        .star-left {
                            background-image: url(/local/templates/kursi/img/rating/LeftGray.svg);
                            background-position: right;
                        }

                        .star-right {
                            background-image: url(/local/templates/kursi/img/rating/RightGray.svg);
                            background-position: left;
                            margin-right: 24px;
                        }

                    </style>

                    <div id="half-stars-example" class="hovered">
                        <div class="rating-group">
                            <input class="rating__input rating__input--none" checked="" name="rating" id="rating-0" value="0" type="radio">
                            <label aria-label="0 stars" class="rating__label" for="rating-0"></label>


                            <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating-0.5">
                                <div class="star-left"></div>
                                <i class="rating__icon rating__icon--star fa fa-star-half"></i>
                            </label>
                            <input class="rating__input" name="rating" id="rating-0.5" value="0.5" type="radio">

                            <label aria-label="1 stars" class="rating__label " for="rating-1">
                                <div class="star-right"></div>
                                <i class="rating__icon rating__icon--star fa fa-star"></i>
                            </label>
                            <input class="rating__input" name="rating" id="rating-1" value="1" type="radio">

                            <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating-1.5">
                                <div class="star-left"></div>
                                <i class="rating__icon rating__icon--star fa fa-star-half"></i>
                            </label>
                            <input class="rating__input" name="rating" id="rating-1.5" value="1.5" type="radio">

                            <label aria-label="2 stars" class="rating__label " for="rating-2">
                                <div class="star-right"></div>
                                <i class="rating__icon rating__icon--star fa fa-star"></i>
                            </label>
                            <input class="rating__input" name="rating" id="rating-2" value="2" type="radio">

                            <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating-2.5">
                                <div class="star-left"></div>
                                <i class="rating__icon rating__icon--star fa fa-star-half"></i>
                            </label>
                            <input class="rating__input" name="rating" id="rating-2.5" value="2.5" type="radio">

                            <label aria-label="3 stars" class="rating__label " for="rating-3">
                                <div class="star-right"></div>
                                <i class="rating__icon rating__icon--star fa fa-star"></i>
                            </label>
                            <input class="rating__input" name="rating" id="rating-3" value="3" type="radio">

                            <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating-3.5">
                                <div class="star-left"></div>
                                <i class="rating__icon rating__icon--star fa fa-star-half"></i>
                            </label>
                            <input class="rating__input" name="rating" id="rating-3.5" value="3.5" type="radio">

                            <label aria-label="4 stars" class="rating__label " for="rating-4">
                                <div class="star-right"></div>
                                <i class="rating__icon rating__icon--star fa fa-star"></i>
                            </label>
                            <input class="rating__input" name="rating" id="rating-4" value="4" type="radio">

                            <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating-4.5">
                                <div class="star-left"></div>
                                <i class="rating__icon rating__icon--star fa fa-star-half"></i>
                            </label>
                            <input class="rating__input" name="rating" id="rating-4.5" value="4.5" type="radio">

                            <label aria-label="5 stars" class="rating__label " for="rating-5">
                                <div class="star-right"></div>
                                <i class="rating__icon rating__icon--star fa fa-star"></i>
                            </label>
                            <input class="rating__input" name="rating" id="rating-5" value="5" type="radio">
                        </div>
                    </div>

                </form>
            </div>
            <div class="universalrating-total">
                <p>
                    <span class="quantity">18</span> оценок, среднее <span class="rating">4.47</span> из 5
                </p>
            </div>
        </div>

    </div>
@endsection


@section('additional-scripts')
    @parent
@endsection

@section('custom-structured-data')
    @parent

@endsection




