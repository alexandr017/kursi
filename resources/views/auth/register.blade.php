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
                    placeholder="Отчество"
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

@push('styles')
    <link href="{{ Vite::asset('resources/css/auth/register.css') }}" rel="stylesheet">
@endpush

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
