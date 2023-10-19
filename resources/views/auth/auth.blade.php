@extends('site.v3.layouts.main')

@section('content')
    <div class="container">
        <div class="main-block">
            <h1 class="title">Авторизоваться</h1>

            <form
                class="form-containier"
                onsubmit="handleSignIn(event)"
            >
                <input
                    id="email"
                    type="email"
                    class="mail-input"
                    placeholder="Эл. почта"
                    value=""
                    required
                    name="email"
                />

                <input
                    id="password"
                    type="password"
                    class="passwords-input"
                    placeholder="Пароль"
                    maxlength="30"
                    minlength="8"
                    required
                    name="password"
                />

                <div id="errorText"></div>

                <!-- Confirm -->
                <button
                    type="submit"
                    class="sign-in-button"
                >
                    Войти
                </button>
            </form>

            {{-- Or registration --}}
            <a href="auth/register">
                <span class="orr-registration">Или регистрация</span>
            </a>
        </div>
    </div>
@endsection


@push('styles')
    <link href="{{ Vite::asset('resources/css/auth/auth.css') }}" rel="stylesheet">
@endpush

<script>
    function handleSignIn(evt) {
        evt.preventDefault();

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch(`/auth/login`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify({email, password})
        }).then(response => response.json())
            .then(response => {
                if (response.errors) {
                    document.getElementById('errorText').innerHTML = 'Проверьте данные и попробуйте еще раз'
                }

                if (response.url && response.url !== 'undefined') {
                    location.href = response.url;
                }
            }).catch(error => {
                document.getElementById('errorText').innerHTML = 'Проверьте данные и попробуйте еще раз'
                console.log('Error:', error);
            });
    }
</script>
