<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--<link rel="stylesheet" href="{{ asset('/panel/plugin/nprogress/nprogress.css') }}">--}}
    {{--<!-- Bootstrap -->--}}
    {{--<link href="{{asset('/panel/plugin/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">--}}
    {{--<!-- Font Awesome -->--}}
    {{--<link href="{{asset('/panel/plugin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">--}}
    {{--<!-- NProgress -->--}}
    {{--<link href="{{asset('/panel/plugin/nprogress/nprogress.css')}}" rel="stylesheet">--}}
    <!-- Custom Theme Style -->
    {{--<link href="../build/css/custom.min.css" rel="stylesheet">--}}
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employees.login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employees.register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
{{--<script src="{{asset('/panel/plugin/nprogress/nprogress.js')}}"></script>--}}
{{--<script src="{{asset('/panel/plugin/jquery/dist/jquery.min.js')}}"></script>--}}
{{--<!-- Bootstrap -->--}}
{{--<script src="{{asset('/panel/plugin/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>--}}
{{--<!-- FastClick -->--}}
{{--<script src="{{asset('/panel/plugin/fastclick/lib/fastclick.js')}}"></script>--}}
{{--<!-- NProgress -->--}}
{{--<script src="{{asset('/panel/plugin/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>--}}
{{--<script src="../build/js/custom.min.js"></script>--}}
</body>
</html>
