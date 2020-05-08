@extends('layouts.web')

@section('content')
<div class="reset-password-form">
    <div class="signin">
        <div class="">
            <div class="social">
                <p class="social-title">Войти через:</p>
                <ul class="social-items">
                    <li class="social-item">
                        <a class="Vk" href="/users/loginvk" title="Вконтакте"></a>
                    </li>
                    <li class="social-item">
                        <a class="Ok" href="/users/loginodnoklassniki" title="Одноклассники"></a>
                    </li>
                    <li class="social-item">
                        <a class="Ml" href="/users/loginmailru" title="Mail"></a>
                    </li>
                    <li class="social-item">
                        <a class="Gp" href="/users/logingoogle" title="Google"></a>
                    </li>
                    <li class="social-item">
                        <a class="Fb" href="" title="Facebook"></a>
                    </li>
                </ul>
            </div>

            <div class="auth">

                <p class="auth-title">Восстановление пароля</p>
                <p class="auth-text">Мы отправим письмо для восстановления пароля на указанный адрес:</p>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="auth-row">
                        <div class="container">
                            <label for="email" class="label">Электронная почта</label>
                            <div class="wrapper">
                                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="auth-registration button wide m green"> Отправить </button>
                </form>
            </div>
        </div>
        <div>
            <div class="toggle">
                Вспомнили пароль? <a href="{{ route('login') }}" class="link toggle-link blue" type="button">Войти</a>
            </div>
        </div>
    </div>
</div>
@endsection
