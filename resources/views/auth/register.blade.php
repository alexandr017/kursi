@extends('site.v3.layouts.main')

@section('content')
    <div class="container">
        <div class="main-block">
            <h1 class="title">Регистрация</h1>

            <!-- Name -->
            <input
                id="name"
                type="text"
                class="mail-input"
                placeholder="Имя"
                maxlength="28"
                value=""
            />

            <!-- Surname -->
            <input
                id="surname"
                type="text"
                class="mail-input"
                placeholder="Фамилия"
                maxlength="28"
                value=""
            />

            <!-- Nickname -->
            <input
                id="nickname"
                type="text"
                class="mail-input"
                placeholder="Псевдоним"
                maxlength="28"
                value=""
            />

            <!-- E-mail input -->
            <input
                id="email"
                type="text"
                class="mail-input"
                placeholder="Эл. почта"
                maxlength="28"
                value=""
            />

            <!-- Password input -->
            <input
                id="password"
                type="password"
                class="passwords-input"
                placeholder="Пароль"
                maxlength="28"
            />

            <!-- Confirm password input -->
            <input
                id="confirmPassword"
                type="password"
                class="passwords-input"
                placeholder="Подтвердите пароль"
                maxlength="28"
                minlength="5"
            />

            <!-- Confirm -->
            <button
                onclick="handleSignIn()"
                class="register-button"
            >
                Регистрироваться
            </button>
        </div>
    </div>
@endsection

<style>
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
        box-sizing: content-box;
        height: 1.4375em;
        -webkit-tap-highlight-color: transparent;
        display: block;
        width: 100%;
        -webkit-animation-name: mui-auto-fill-cancel;
        animation-name: mui-auto-fill-cancel;
        -webkit-animation-duration: 10ms;
        animation-duration: 10ms;
        padding: 16.5px 14px;
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
</style>

<script>
    let isNoValidData = false;

    function validateAndStyleField(fieldId) {
        const field = document.getElementById(fieldId);

        if (!field.value) {
            const errorText = document.createElement('div');
            errorText.innerText = 'Это поле обязательно к заполнению';
            errorText.style.color = 'red';
            errorText.style.fontSize = '12px';
            errorText.style.alignItems = 'start';
            errorText.style.width = '100%';
            errorText.style.marginBottom = '-16px';

            field.parentNode.insertBefore(errorText, field);
            field.style.border = '1px solid red';

            isNoValidData = true;
        }

    }

    function handleSignIn() {
        const fieldIds = ['name', 'surname', 'nickname', 'email', 'confirmPassword', 'password'];

        fieldIds.forEach(validateAndStyleField);

        if (isNoValidData) return;

        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const first_name = document.getElementById('name').value;
        const last_name = document.getElementById('surname').value;
        const middle_name = document.getElementById('nickname').value;

        fetch(`/auth/register`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify(
                {email, password, first_name, last_name, middle_name}
            )
        }).then(response => response.json())
            .then(response => {
                if (response.errors) {
                    alert('Проверьте данные и попробуйте еще раз ')
                }

                location.href = '/auth'
            }).catch(error => {
            alert('Проверьте данные и попробуйте еще раз ')
            console.error('Error:', error);
        });
    }
</script>
