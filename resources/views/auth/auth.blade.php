@extends('site.v3.layouts.main')

@section('content')
    <div class="container">
        <div class="main-block">
            <h1 class="title">Авторизоваться</h1>

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
                maxlength="8"
            />

            <!-- Confirm -->
            <button
                class="sign-in-button"
                onclick="handleSignIn()"
            >
                Войти
            </button>

            {{-- Or registration --}}
            <a href="/auth/register">
                <span class="orr-registration">Или регистрация</span>
            </a>
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

  .sign-in-button {
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

  .orr-registration {
      text-decoration: underline;
  }

  .orr-registration:hover {
      color: #40569e;
  }
</style>

<script>
    function handleSignIn() {
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
                    alert('Проверьте данные и попробуйте еще раз ')
                }

                if (response.url && response.url !== 'undefined') {
                    location.href = response.url;
                }

            }).catch(error => {
            alert('Проверьте данные и попробуйте еще раз ')
            console.log('Error:', error);
        });
    }
</script>
