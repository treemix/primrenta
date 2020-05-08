
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white- shadow-sm-">


        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tasks-new') }}">@lang('navbar.tasks_new')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tasks-all') }}">@lang('navbar.tasks_all')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('executors-all') }}">@lang('navbar.executors_all')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jobs-all') }}">@lang('navbar.jobs_all')<div class="label_new"></div></a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item login-register-item">
                        <a class="nav-link" href="{{ route('login') }}">@lang('navbar.login')</a>
                        @lang('navbar.and')
                        <a class="nav-link" href="{{ route('register') }}">@lang('navbar.register')</a>
                    </li>

                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</div>

