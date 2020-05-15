
<div class="main-menu">
    <a id="ToggleMenuButton" class="toggle-menu" href=""></a>
    <div class="logo">
        <a class="logo-link" href="/"></a>
    </div>
    <div class="navigation">
        <ul class="navigation-items">
{{--            is-active--}}
            <li class="navigation-item"><a class="navigation-link {{ request()->is('tasks/new*') ? 'is-disabled' : 'open-menu-categories' }}" href="{{route("get.tasks.new")}}">Создать задание</a></li>
            <li class="navigation-item"><a class="navigation-link" href="/tasks-all-any-all-1">Найти задания</a></li>
            <li class="navigation-item"><a class="navigation-link" href="/executors-courier">Исполнители</a></li>
            <li class="navigation-item"><a class="navigation-link" href="/jobs">Вакансии<div class="label-new"></div></a></li>
        </ul>
        @include("web/components/top_navbar_categories")
    </div>

    <div class="user-menu">
        <div class="block">
            <span class="wrapper">
                @guest
                    <a class="link" href="{{ route('login') }}">Вход</a> или <a class="link" href="{{ route('register') }}">регистрация</a>
                @else
                    <a class="link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Выйти </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
                @endguest
            </span>
        </div>
    </div>
</div>
