@extends('layouts.web')

@section('content')
<div class="login-form">
    <div class="signin">
        <div>
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
                <p class="auth-title">Войти по электронной почте</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <input type="hidden" name="remember" value="1">

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

                    <div class="auth-row">
                        <div class="container">
                            <label for="password" class="label">Пароль</label>
                            <div class="wrapper">
                                <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="off">
                                <button class="clear hidden" type="button"></button>
                                @error('password')
                                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                                @enderror
                            </div>
                        </div>
                        <div class="pass-toggle"></div>
                    </div>
                    <div class="auth-row-actions">
                        <button type="submit" class="auth-submit button wide m green"> Войти </button>

                        @if (Route::has('password.request'))
                            <a class="link gray4" href="{{ route('password.request') }}"> Забыли пароль? </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>

        <div>
            <div class="toggle">
                Еще не с нами? <a href="{{ route('register') }}" class="link toggle-link blue" type="button">Зарегистрируйтесь</a>
            </div>
        </div>
    </div>
</div>
@endsection
