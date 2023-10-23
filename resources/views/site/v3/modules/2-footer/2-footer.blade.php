<footer>
    <div class="footer_content max-width">
        <div class="footer-company_info_block">
            <div class="logo">
                @if(Request::path() != '/')
                <a href="/">
                    <img src="/v3/images/logo-bottom-long.svg" alt="Логотип Курсы.ру">
                </a>
                @else
                    <img src="/v3/images/logo-bottom-long.svg" alt="Логотип Курсы.ру">
                @endif
            </div>
            <div class="phone">
                <a href="tel:+7 (804) 700-20-77">+7 (804) 700-20-77</a>
            </div>
            <div class="phone_subtitle">горячая линия</div>
            <div class="email">
                <a href="mailto:partners@kursy.ru">partners@kursy.ru</a>
            </div>
            <div class="phone_subtitle">всегда готовы вам помочь
            </div>
            <div class="address">г.Новосибирск ул. Овражная, 8, оф. 8</div>
        </div>
        <div class="footer-info_menu_block">
            <p class="footer_block_title">Информация</p>
            <div class="footer_left_menu">
                <ul>
                    <li>
                        <div class="footer_left_menu-text selected"><a href="/about/">О нас</a></div>
                    </li>
                    <li>
                        <div class="footer_left_menu-text "><a href="/contacts/">Контакты</a></div>
                    </li>
                    <li>
                        <div class="footer_left_menu-text "><a href="/schools/">Рейтинг онлайн-школ</a></div>
                    </li>
                    <li>
                        <div class="footer_left_menu-text "><a href="/sitemap/">Карта сайта</a></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-projects_menu_block">
            <p class="footer_block_title">Проекты</p>
            <div class="footer_left_menu">
                <ul>
                    <li>
                        <div class="footer_left_menu-text "><a href="/tvoy-edtech/">Твой EDTECH</a></div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-social_block">
            <div id="comp_77b9fff28090b5610649ee31183d5a1a">
                <div class="subscribe-form" id="sender-subscribe">
                    <p class="subscribe_form-title">Подпишись на рассылку новостей</p>
                    <form name="subscribe_form" id="bx_subscribe_subform_sljzMT" onsubmit="subscribe(event)">
                        <div class="bx-input-group">
                            <input
                                id="subscribe_email"
                                class="bx-form-control"
                                type="email"
                                name="email"
                                value=""
                                title="Введите ваш e-mail"
                                placeholder="Ваш E-mail"
                                required
                            >
                        </div>
                        <div style="display: none;">
                            <div class="bx-subscribe-desc">Выберите рассылку</div>
                            <div class="bx_subscribe_checkbox_container">
                                <input type="checkbox" name="SENDER_SUBSCRIBE_RUB_ID[]" id="SENDER_SUBSCRIBE_RUB_ID_1" value="1" checked="">
                                <label for="SENDER_SUBSCRIBE_RUB_ID_1">Первая кампания</label>
                            </div>
                        </div>
                        <div class="bx_subscribe_submit_container">
                            <button class="sender-btn btn-subscribe" id="bx_subscribe_btn_sljzMT"></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="social_links-list">
                <p class="news-item" id="bx_3218110189_7">
                    <a href="https://www.youtube.com/@kursyrueng" rel="nofollow">
                        <img class="white_icon" src="/v3/images/footer/youtube-white.svg" alt="YT" title="YT">
                        <img class="blue_icon" src="/v3/images/footer/youtube-blue.svg" alt="YT" title="YT">
                    </a>
                </p>
                <p class="news-item" id="bx_3218110189_6">
                    <a href="https://vk.com/kursyru" rel="nofollow">
                        <img class="white_icon" src="/v3/images/footer/vk-white.svg" alt="VK" title="VK">
                        <img class="blue_icon" src="/v3/images/footer/vk-blue.svg" alt="VK" title="VK">
                    </a>
                </p>
                <p class="news-item" id="bx_3218110189_4">
                    <a href=" https://t.me/kursy_education" rel="nofollow">
                        <img class="white_icon" src="/v3/images/footer/tg-white.svg" alt="Telegram" title="Telegram">
                        <img class="blue_icon" src="/v3/images/footer/tg-blue.svg" alt="Telegram" title="Telegram">
                    </a>
                </p>
            </div>
        </div>
        <div class="footer-bottom_copy_block">
            <p>© Курсы.ру, 2021-2023</p>
        </div>
        <div class="footer-bottom_menu_block">
            <div class="footer_bottom_menu">
                <ul>
                    <li>
                        <div class="footer_bottom_menu-text "><a href="/privacy/" rel="nofollow">Политика конфиденциальности</a></div>
                    </li>
                    <li>
                        <div class="footer_bottom_menu-text "><a href="/disclaimer/" rel="nofollow">Отказ от ответственности</a></div>
                    </li>
                    <li>
                        <div class="footer_bottom_menu-text "><a href="/rules/" rel="nofollow">Соглашение</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script>
    document.body.addEventListener('click', function (e) {
        if (e.target.id === 'close-btn') {
            closeSenderSubscribe();
        }
    });

    function closeSenderSubscribe() {
        const popupWrapper = document.getElementById('sender_subscribe_component_wrapper');

        if (popupWrapper) {
            popupWrapper.remove();
        }
    }

    function subscribe(evt) {
        evt.preventDefault();

        const form = document.forms['subscribe_form'];
        const formData = new FormData(form);
        const emailData = Object.fromEntries(formData).email;
        const emailInput = document.getElementById('email');

        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('/subscribe', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify({
                email: emailData
            })
        })
            .then((response) => {
                if (!response.ok) {
                    throw Error(response.statusText);
                }
                return response;
            })
            .then(() => {
                const popupHTML = `
                    <div id="sender_subscribe_component_wrapper">
                        <div id="sender_subscribe_component">
                            <div id="popup-window-content-sender_subscribe_component" class="popup-window-content">
                                <div id="sender-subscribe-response-cont" style="display: block;">
                                    <div class="bx_subscribe_response_container">
                                        <p>Спасибо, что подписались на нашу рассылку!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="popup-window-buttons">
                                <span class="popup-window-button subscribe-popup_close" id="close-btn">Ок</span>
                            </div>
                        </div>
                    </div>`;

                document.body.innerHTML += popupHTML;
            })
            .catch(err => {
                emailInput.classList.add('input_error');

                const errorLabel = document.createElement('label');
                errorLabel.className = 'bx-input_error';
                errorLabel.innerHTML = err.message;
                evt.target.appendChild(errorLabel);
            })
    }
</script>

<style>
    label.bx-input_error {
        font-size: 12px;
        line-height: 15px;
        color: #E75050;
    }

    .subscribe-form input[type="email"].input_error {
        border: 1px solid #E75050;
    }

    #sender_subscribe_component_wrapper {
        background-color: rgba(30, 28, 28, 0.53);
        position: fixed;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
        z-index: 10000;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #sender_subscribe_component {
        background-color: #ffffff;
    }
</style>
