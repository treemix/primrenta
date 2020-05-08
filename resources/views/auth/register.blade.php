@extends('layouts.web')

@section('content')
<div class="register-form">
    <div class="signin">
        <div class="">
            <div class="social">
                <p class="social-title">Быстрая регистрация через:</p>
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
                <p class="auth-title">Или по электронной почте</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="auth-row">
                        <div class="container">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                            <div class="wrapper">
                                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <button type="submit" class="auth-registration button wide m green"> Зарегистрироваться </button>

                    <div class="auth-agree">
                        <div class="container auth-checkbox">
                            <input class="checkbox auth-agree-checkbox" type="checkbox" name="agree_terms" id="agree_terms" value="1" checked>
                            <span class="checkbox-icon"></span>
                            <label class="label" for="agree_terms">Я согласен с</label>
                        </div>
                        <a class="auth-link" target="_blank" rel="noopener noreferrer" href="/terms">правилами сайта</a>
                    </div>

                </form>
            </div>
        </div>
        <div>
            <div class="toggle">
                Уже зарегистрированы? <a href="{{ route('login') }}" class="link toggle-link blue" type="button">Войдите</a>
            </div>
        </div>
    </div>
</div>
@endsection
