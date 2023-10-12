@extends('site.v3.layouts.main')
@section ('title', Shortcode::compile($page->title))
@section ('og_title', Shortcode::compile($page->h1))
@section ('meta_description', Shortcode::compile($page->meta_description))



@section('style')
    <link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        p.contacts_page-big_person-title{
            font-weight:600;
            font-size:32px;
            line-height:46px;
            color:#101820;
            grid-area:title;
            background:#F5F5F5;
            border-radius:30px 30px 0 0;
            padding:56px;
            padding-bottom:24px;
        }
        p.contacts_page-big_person-subtitle{
            font-weight:400;
            font-size:24px;
            line-height:34px;
            color:#101820;
            margin-bottom:auto;
            grid-area:subtitle;
            display:flex;
            background:#F5F5F5;
            height:100%;
            padding:0 56px;
        }
        h1{
            font-weight:700;
            font-size:53px;
            line-height:63px;
            color:#101820;
            margin-top:80px;
            margin-bottom:56px;
        }
        .mobile{
            display:none;
        }
        .custom_checkbox input[type="checkbox"]{
            display:none;
        }
        .custom_checkbox input:checked ~ .custom_label:before{
            content:"";
            position:absolute;
            top:1px;
            left:-23px;
            width:16px;
            height:16px;
            background-position:center;
            background-repeat:no-repeat;
        }
        .custom_checkbox .custom_label:after{
            position:absolute;
            content:"";
            top:0;
            left:-24px;
            width:16px;
            height:16px;
            border-radius:1px;
            border:1px solid #F5F5F5;
        }
        .custom_checkbox .custom_label{
            margin-left:calc(8px + 16px);
            position:relative;
            cursor:pointer;
        }
        .custom_checkbox{
            margin-bottom:40px;
            margin-top:40px;
        }
        .contacts_page-text_title h2{
            font-size:32px;
            line-height:46px;
            font-weight:600;
            color:#101820;
        }
        .contacts_page-text_title{
            margin-top:120px;
            margin-bottom:40px;
            max-width:50%;
        }
        .contacts_page-text_subtitle{
            max-width:50%;
            font-size:18px;
            line-height:150%;
            font-weight:400;
            color:#101820;
            margin-bottom:24px;
        }
        .contacts_page-text_link{
            font-size:24px;
            line-height:34px;
            font-weight:600;
        }
        .contacts_page-slider_item.swiper-slide{
            width:550px;
            height:455px;
            margin-right:21px;
        }
        .contacts_page-slider_item img{
            width:100%;
            height:100%;
            object-fit:cover;
            border-radius:30px;
        }
        .contacts_page-slider_block{
            display:inline-flex;
            width:100%;
            margin-top:120px;
            position:relative;
            user-select:none;
        }
        .contacts_page-map_cont{
            border-radius:30px;
            overflow:hidden;
        }
        .contacts_page-big_person-name{
            font-weight:500;
            font-size:24px;
            line-height:150%;
            color:#101820;
            margin-bottom:auto;
        }
        .contacts_page-big_person-link a{
            display:block;
            padding:11px 20px;
            text-decoration:none;
        }
        .contacts_page-big_person-link{
            margin:auto;
            margin-top:20px;
            margin-bottom:19px;
        }
        .contacts_page-big_person-info{
            background:#F5F5F5;
            border-radius:45px;
            padding:56px;
            display:inline-flex;
            flex-direction:column;
        }
        .contacts_page-big_person-department{
            font-weight:400;
            font-size:18px;
            line-height:150%;
            color:#101820;
        }
        .contacts_page-big_person-data{
            min-height:20%;
            padding:20px 40px;
            background:white;
            flex:1;
            align-items:self-start;
            justify-content:end;
            display:flex;
            flex-direction:column;
        }
        .contacts_page-big_person-contacts > img{
            margin-right:34px;
            width:56px;
            height:56px;
        }
        .contacts_page-big_person-contacts{
            display:inline-flex;
            align-items:center;
            grid-area:contacts;
            background:#F5F5F5;
            padding:56px;
            padding-top:24px;
            border-radius:0 0 30px 30px;
        }
        .contacts_page-big_person-contact p{
            font-weight:400;
            font-size:14px;
            line-height:20px;
            color:#101820;
        }
        .contacts_page-big_person-contact img{
            width:40px;
            height:40px;
            margin-right:30px;
        }
        .contacts_page-big_person-contact a{
            font-weight:600;
            font-size:32px;
            line-height:46px;
            color:#101820;
            text-decoration:none;
            white-space:nowrap;
        }
        .contacts_page-big_person-contact > a{
            display:flex;
        }
        .contacts_page-big_person-cont{
            display:grid;
            margin-bottom:48px;
            grid-template-areas:"person_card title" "person_card subtitle" "person_card contacts";
            grid-template-rows:auto 1fr auto;
        }
        .contacts_page-big_person-card .contacts_page-pc_picture{
            background:#101820;
            width:auto;
            object-fit:cover;
        }
        .contacts_page-big_person-card .contacts_page-mobile_picture{
            display:none;
        }
        .contacts_page-big_person-card{
            display:inline-flex;
            flex-direction:column;
            justify-content:space-between;
            margin-right:20px;
            box-shadow:2px 2px 10px 2px rgba(0,0,0,0.05);
            border-radius:30px;
            min-width:360px;
            max-width:360px;
            grid-area:person_card;
            background:white;
            overflow:hidden;
        }
        .callback-resulte_title{
            margin-bottom:16px;
            font-size:32px;
            font-weight:600;
            color:#101820;
        }
        .callback-resulte_subtitle{
            font-size:18px;
            font-weight:400;
            margin-bottom:31px;
            color:#101820;
        }
        .callback-result_users_photos > img:nth-child(2){
            margin-left:-26px;
            z-index:-1;
        }
        .callback-result_users_photos > img{
            border:2px solid white;
            border-radius:50%;
            width:56px;
            height:56px;
        }
        .callback-result_users_photos{
            display:inline-flex;
            justify-content:center;
            width:100%;
            margin:20px 0;
        }
        .callback-result_cont{
            position:fixed;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            background:white;
            box-shadow:2px 2px 20px rgba(16,24,32,0.05);
            padding:25px;
            border-radius:35px;
            z-index:1000;
            text-align:center;
            max-width:380px;
        }
        .callback-result_close img{
            cursor:pointer;
        }
        .callback-result_close{
            display:flex;
            width:100%;
            justify-content:flex-end;
        }
        @media(max-width:860px){
            p.contacts_page-big_person-title{
                background:white;
                padding:16px 0;
                font-size:24px;
                line-height:30px;
                font-weight:500;
            }
            p.contacts_page-big_person-subtitle{
                background:white;
                padding:0;
                font-size:16px;
                line-height:24px;
            }
            p.contacts_page-big_person-name{
                font-size:20px;
                line-height:30px;
                font-weight:500;
            }
            p.contacts_page-big_person-department{
                color:#A9AAAA;
                font-size:16px;
                line-height:24px;
                font-weight:500;
            }
            img.contacts_page-pc_picture{
                display:none;
            }
            h1{
                font-size:40px;
                line-height:52px;
                margin-top:56px;
                margin-bottom:30px;
            }
            a.contacts_page-big_person-name{
                margin-bottom:8px;
                font-size:20px;
                line-height:30px;
            }
            .pc{
                display:none;
            }
            .mobile{
                display:inline;
            }
            .contacts_page-text_title h2{
                font-size:25px;
                line-height:32px;
            }
            .contacts_page-text_title{
                margin-top: 80px;
                margin-bottom: 40px;
            }
            .contacts_page-text_subtitle{
                font-size:18px;
                line-height:28px;
                margin-bottom:16px;
                max-width:unset;
            }
            .contacts_page-slider_item.swiper-slide{
                width:90%;
                height:auto;
            }
            .contacts_page-slider_item{
                width:328px;
                height:271px;
            }
            .contacts_page-slider_block{
                margin-top:42px;
            }
            .contacts_page-big_person-link{
                display:none;
            }
            .contacts_page-big_person-line{
                border-bottom:1px solid #D9D9D9;
            }
            .contacts_page-big_person-data{
                padding:16px 0;
            }
            .contacts_page-big_person-contacts{
                background:white;
                padding:0;
                padding-top:24px;
                align-items:flex-start;
            }
            .contacts_page-big_person-contact img{
                margin-right:24px;
            }
            .contacts_page-big_person-contact a{
                margin-bottom:8px;
            }
            .contacts_page-big_person-cont{
                grid-template-areas:"title" "subtitle" "person_card" "contacts";
                margin-bottom:40px;
                padding-bottom:40px;
            }
            .contacts_page-big_person-card .contacts_page-mobile_picture{
                display:block;
                width:88px;
                height:88px;
                margin-top:32px;
            }
            .contacts_page-big_person-card{
                box-shadow:none;
                border-radius:0;
                min-width:unset;
            }
        }@media(max-width:500px){
            .contacts_page-big_person-contacts > img{
                margin-right:6vw;
                width:12vw;
                height:12vw;
            }
            .contacts_page-big_person-contact a{
                font-size:6vw;
            }
        }

        /* End */


        /* Start:/local/templates/kursi/components/bitrix/form.result.new/callback_form/style.css?16905244521956*/
        .callback-form_field_input > input, .callback-form_field_input > textarea {
            border: 1px solid #D9D9D9;
            border-radius: 8px;
            outline: none;
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            resize: vertical;
            width: 100%;
            padding: 16px 10px;
        }

        .callback-form_field_input.input_error > input, .callback-form_field_input.input_error > textarea {
            /* background: #FFF5F5; */
            border: 1px solid #E75050;
        }

        .callback-form_field_input > input:focus, .callback-form_field_input > textarea:focus {
            background: #F9FCFF;
            border: 1px solid #469ED7;
        }


        .callback-form_field_input > *.hasError {
            border: 1px solid #E75050;
            margin-bottom: 5px;
        }

        .input_error_cont {
            color: #E75050;
            font-size: 12px;
            line-height: 15px;
            font-weight: 400;
        }

        .callback-form_field_title {
            margin-bottom: 8px;
            font-size: 16px;
        }

        .callback-form_field_cont {
            margin-bottom: 24px;
        }

        .callback-form_desk{
            /* display: none; */
        }

        .callback-form_title h3 {
            font-size: 32px;
            font-weight: 600;
            line-height: 46px;
            color: #101820;
            margin-bottom: 40px;
        }

        .callback-cont {
            margin-top: 120px;
            max-width: 50%;
        }

        .callback-form_subtitle {
            font-size: 18px;
            font-weight: 400;
            line-height: 150%;
            color: #101820;
            margin-bottom: 32px;
            margin-top: 24px;
        }

        .callback-result_cont_bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.25);
            z-index: 10000;
        }

        @media(max-width:860px) {
            .callback-cont{
                margin-top: 56px;
                max-width: unset;
            }

            .callback-form_title h3 {
                font-size: 24px;
                line-height: 32px;
                margin-bottom: 24px;
            }

            .callback-form_subtitle {
                font-size: 18px;
                line-height: 28px;
                margin-bottom: 40px;
            }

            .custom_checkbox .custom_label {
                font-size: 14px;
                line-height: 16px;
            }

            .callback-form_buttons .blue_button_template {
                width: 100%;
            }
        }

        /* End */


        /* Start:/local/components/sigodinweb/universalrating/templates/.default/style.css?1690524451757*/
        .universalrating-title {
            font-weight: 600;
            font-size: 32px;
            line-height: 46px;
            color: #101820;
        }

        .universalrating-total {
            font-weight: 500;
            font-size: 20px;
            line-height: 30px;
            color: #A9AAAA;
            margin-bottom: 100px;
        }

        .universalrating-total #half-stars-example .rating-group {
            margin-bottom: 20px;
        }

        .universalrating {
            margin-top: 56px;
        }

        @media(max-width: 860px){
            .universalrating-title {
                font-size: 24px;
                line-height: 32px;
            }

            .universalrating-total {
                margin-bottom: 80px;
                /* font-size: 16px;
                line-height: 24px; */
            }

            .html_editor_body_cont .universalrating-total p,
            .universalrating-total p{
                /* margin-top: 16px; */
            }
        }
    </style>

@endsection

@section('content')

    <div class="content max-width " onclick="contentCloseBlur(this)">
        <h1>Контакты</h1>

        <div class="contacts_page-big_person-cont contacts_page-big_person-line">
            <div class="contacts_page-big_person-card">
                <img src="/images/contacts/DSCF6172-1-_1_.webp" class="contacts_page-pc_picture" alt="Валерия Левина" title="Валерия Левина">
                <img src="/images/contacts/kruzhochki150_10.png" class="contacts_page-mobile_picture" alt="Валерия Левина" title="Валерия Левина">
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

                    <a href="https://vk.com/kursyru" target="_blank" rel="nofollow"><img src="/images/contacts/vk_black.svg" alt="VK Курсы.ру" title="VK Курсы.ру"></a>
                </div>
                <div class="contacts_page-big_person-contact">

                    <a href="https://t.me/kursy_ru_support_bot" target="_blank" rel="nofollow"><img src="/images/contacts/tg_black.svg" alt="Telegram Курсы.ру" title="Telegram Курсы.ру"></a>
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
                <img src="/images/contacts/Mihail-_1_.webp" class="contacts_page-pc_picture" alt="Михаил Парфенов" title="Михаил Парфенов">
                <img src="/images/contacts/kruzhochki150_Montazhnaya_oblast_1.webp" class="contacts_page-mobile_picture" alt="Михаил Парфенов" title="Михаил Парфенов">
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
                <img src="/images/contacts/ring_phone_black.svg" class="pc" alt="Телефон Курсы.ру" title="Телефон Курсы.ру">
                <img src="/images/contacts/ring_phone_blue.svg" class="mobile" alt="Телефон Курсы.ру" title="Телефон Курсы.ру">
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

            <form name="backcall" action="/contacts/" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="WEB_FORM_ID" value="3">

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
                                            background-image: url("/images/contacts/checkbox_arrow.svg");
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

            <form name="backquestion" action="/contacts/" method="POST" enctype="multipart/form-data">

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
                                            background-image: url("/images/contacts/checkbox_arrow.svg");
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
                        <div id="BX_YMAP_MAP_zKXRla" class="bx-yandex-map" style="height: 500px; width: 100%;max-width: 100%;">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab4f0a709ab159787fe3e84745d8674caef1ae301291c5ec1ad08f749ccc09398&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="">

        </div>

        <div class="contacts_page-slider_block swiper_styles-slider swiper-initialized swiper-horizontal swiper-backface-hidden">
            <div class="swiper_styles-wraper swiper-wrapper" id="swiper-wrapper-3fbc69332053100c5" aria-live="polite">
                <div class="contacts_page-slider_item swiper-slide swiper-slide-active" role="group" aria-label="1 / 6">
                    <img src="/images/contacts/DSCF2801-1.png" alt="">
                </div>
                <div class="contacts_page-slider_item swiper-slide swiper-slide-next" role="group" aria-label="2 / 6">
                    <img src="/images/contacts/DSCF70832.jpg" alt="">
                </div>
                <div class="contacts_page-slider_item swiper-slide" role="group" aria-label="3 / 6">
                    <img src="/images/contacts/DSCF7135-_1_.jpg" alt="">
                </div>
                <div class="contacts_page-slider_item swiper-slide" role="group" aria-label="4 / 6">
                    <img src="/images/contacts/DSCF7088-_2_.jpg" alt="">
                </div>
                <div class="contacts_page-slider_item swiper-slide" role="group" aria-label="5 / 6">
                    <img src="/images/contacts/DSCF7127-_2_.jpg" alt="">
                </div>
                <div class="contacts_page-slider_item swiper-slide" role="group" aria-label="6 / 6">
                    <img src="/images/contacts/DSCF7081-_3_.jpg" alt="">
                </div>
            </div>

            <div class="swiper_styles-pagination_cont">
                <div class="contacts_page-slider_block-button-prev swiper_styles-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-3fbc69332053100c5" aria-disabled="true"></div>
                <div class="contacts_page-slider_block-pagination swiper_styles-pagination swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal"><span class="swiper-pagination-current">1</span> / <span class="swiper-pagination-total">6</span></div>
                <div class="contacts_page-slider_block-button-next swiper_styles-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-3fbc69332053100c5" aria-disabled="false"></div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

        @include('site.v3.modules.5-rating.rating', ['entityType' => 'static-page', 'page' => $page])
        <?php /*
        <div class="universalrating" id="urating_961d4cda96153311ef8a">
            <div class="universalrating-title">Информация была полезна?</div>
            <div class="universalrating-form">


                <form id="ratingForm" action="" method="post">

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
                            background-image: url(/images/contacts/RightBlue.svg);
                            color: orange;
                        }

                        #half-stars-example .rating__input:checked ~ .rating__label .star-right {
                            background-image: url(/images/contacts/RightGray.svg);
                            color: #ddd;
                        }

                        #half-stars-example.hovered .rating-group:hover .rating__label .star-right{
                            background-image: url(/images/contacts/RightBlue.svg);
                            color: orange;
                        }

                        #half-stars-example.hovered .rating__input:hover ~ .rating__label .star-right{
                            background-image: url(/images/contacts/RightGray.svg);
                            color: #ddd;
                        }

                        #half-stars-example .star-left{
                            background-image: url(/images/contacts/LeftBlue.svg);
                            color: orange;
                        }

                        #half-stars-example .rating__input:checked ~ .rating__label .star-left {
                            background-image: url(/images/contacts/LeftGray.svg);
                            color: #ddd;
                        }

                        #half-stars-example.hovered .rating-group:hover .rating__label .star-left{
                            background-image: url(/images/contacts/LeftBlue.svg);
                            color: orange;
                        }

                        #half-stars-example.hovered .rating__input:hover ~ .rating__label .star-left{
                            background-image: url(/images/contacts/LeftGray.svg);
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
                            background-image: url(/images/contacts/LeftGray.svg);
                            background-position: right;
                        }

                        .star-right {
                            background-image: url(/images/contacts/RightGray.svg);
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
*/ ?>
    </div>
@endsection


@section('additional-scripts')
    @parent

    <script>
        function contentCloseBlur(elem) {
            //if (elem.classList.contains("blur_bg")) {

                Object.values(window.openedFormsCallbacks).forEach((e) => {
                    e();
                });
            //}
        }
    </script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        addEventListener("load", () => {
            const swiper_contacts_slider = new Swiper('.contacts_page-slider_block', {
                speed: 400,
                slidesPerView: "auto",
                navigation: {
                    nextEl: '.contacts_page-slider_block-button-next',
                    prevEl: '.contacts_page-slider_block-button-prev',
                },
                pagination: {
                    el: ".contacts_page-slider_block-pagination",
                    type: "fraction",
                },
            });
        });
    </script>
@endsection

@section('custom-structured-data')
    @parent

@endsection




