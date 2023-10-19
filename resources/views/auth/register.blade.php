@extends('site.v3.layouts.main')

@section('content')
    <div class="container">
        <div class="main-block">
            <h1 class="title">Регистрация</h1>

            <form
                class="form-containier"
                onsubmit="handleRegister(event)"
            >
                <input
                    id="name"
                    type="text"
                    class="mail-input"
                    placeholder="Имя"
                    maxlength="28"
                    value=""
                    required
                />

                <input
                    id="surname"
                    type="text"
                    class="mail-input"
                    placeholder="Фамилия"
                    maxlength="28"
                    value=""
                    required
                />

                <input
                    id="nickname"
                    type="text"
                    class="mail-input"
                    placeholder="Псевдоним"
                    maxlength="28"
                    value=""
                />

                <input
                    id="email"
                    type="email"
                    class="mail-input"
                    placeholder="Эл. почта"
                    maxlength="28"
                    value=""
                    required
                />

                <input
                    id="password"
                    type="password"
                    class="passwords-input"
                    placeholder="Пароль"
                    maxlength="8"
                    minlength="8"
                    required
                    onchange="validatePassword()"
                />

                <input
                    id="confirmPassword"
                    type="password"
                    class="passwords-input"
                    placeholder="Подтвердите пароль"
                    maxlength="8"
                    minlength="8"
                    required
                    onchange="validatePassword()"
                />

                <div id="errorText"></div>

                <button
                    class="register-button"
                    type="submit"
                >
                    Регистрироваться
                </button>
            </form>
        </div>
    </div>
@endsection

<style>
    #errorText {
        color: red;
        line-height: 1.4375em;
        font: inherit;
        letter-spacing: inherit;
    }

    .container {
        width: 100%;
        margin-left: auto;
        box-sizing: border-box;
        margin-right: auto;
        display: block;
        padding-left: 24px;
        padding-right: 24px;
    }

    .main-block {
        display: flex;
        align-items: center;
        flex-direction: column;
        min-width: 500px;
        background: #8597a317;
        border-radius: 10px;
        padding: 28px 60px;
        width: max-content;
        margin: 50px auto;
    }

    .title {
        margin: 2px 0 28px 0;
        font-style: normal;
        font-weight: 700;
        font-size: 32px;
        line-height: 44px;
        text-align: center;
        color: #545F77;
    }

    .mail-input,
    .passwords-input {
        line-height: 1.4375em;
        position: relative;
        cursor: text;
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin: 16px 0;
        min-width: 100%;
        background: #FFFFFF;
        box-shadow: 1px 1px 4px 1px #E9E9E9;
        border-radius: 10px;
        font: inherit;
        letter-spacing: inherit;
        color: currentColor;
        border: 0;
        -webkit-tap-highlight-color: transparent;
        display: block;
        width: 100%;
        -webkit-animation-name: mui-auto-fill-cancel;
        animation-name: mui-auto-fill-cancel;
        -webkit-animation-duration: 10ms;
        animation-duration: 10ms;
        padding: 16.5px 14px;
        box-sizing: border-box;
        height: 56px;
    }

    .register-button {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 16px 0;
        background: linear-gradient(90deg, #40569e, #469ed7);
        border-radius: 10px;
        width: 100%;
        height: 48px;
        border: 0;
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 22px;
        text-align: center;
        color: #FFFFFF;
    }

    .register-button:hover {
        cursor: pointer;
        opacity: 90%;
    }

    .form-containier {
        width: 100%;
    }
</style>

<script>
    function validatePassword() {
        const password = document.getElementById('password').value;
        const confirm_password = document.getElementById('confirmPassword').value;

        if (password !== confirm_password) {
            document.getElementById('confirmPassword').setCustomValidity("Passwords Don't Match");
        } else {
            document.getElementById('confirmPassword').setCustomValidity('');
        }
    }

    function handleRegister(evt) {
        evt.preventDefault();

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const first_name = document.getElementById('name').value;
        const last_name = document.getElementById('surname').value;
        const middle_name = document.getElementById('nickname').value;

        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch(`/auth/register`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify({
                email,
                password,
                first_name,
                last_name,
                middle_name
            })
        })
            .then(response => response.json())
            .then(response => {
                if (response.errors) {
                    document.getElementById('errorText').innerHTML = 'Проверьте данные и попробуйте еще раз'
                } else {
                    location.href = '/auth';
                }
            })
            .catch(error => {
                document.getElementById('errorText').innerHTML = 'Проверьте данные и попробуйте еще раз'
                console.error('Error:', error);
            });

    }
</script>
