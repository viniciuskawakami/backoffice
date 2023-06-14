<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <!-- Styles -->

    <link href="{{url('cwt/assets/css/0.0.1/cwt.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('cwt/assets/css/font-awesome/4.7.0/font-awesome.min.css')}}">
    <link href="{{url('cwt\assets\css\intl-tel-input\18.0.0\intTelInput.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{url('/cwt/assets/css/bootstrap/5.2.3/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/cwt/assets/css/boxicons/2.1.4/boxicons.css')}}">
    <link rel="stylesheet" href="{{url('cwt/assets/css/dataTables/1.13.4/jquerydataTables.min.css')}}">

    <script src="{{url('/cwt/assets/js/intl-tel-input/18.0.0/utils.js')}}"></script>
    <script src="{{url('/cwt/assets/js/jquery/3.6.4/jquery.js')}}"></script>
    <script src="{{url('/cwt/assets/js/intl-tel-input/18.0.0/intTelInput.js')}}"></script>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('log-viewer.index') }}">{{ __('log-viewer') }}</a>
                                </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('auth.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="d-none">
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

    url<script src="{{url('cwt/assets/js/cwt/0.0.1/cwt.js')}}"></script>
    <script src="{{url('cwt/assets/js/jquery/3.6.4/jquery.js')}}"></script>
    <script src="{{url('cwt/assets/js/jquey-mask-plugin/1.14.16/jquery-mask.min.js')}}"></script>
    <script src="{{url('cwt/assets/js/dataTables/1.13.4/jquery.dataTables.js')}}"></script>
    <script src="{{url('cwt/assets/js/boxicons/2.1.4/boxicons.js')}}"></script>
    <script src="{{url('cwt/assets/js/axios/0.21.4/axios.js')}}"></script>
    <script src="{{url('cwt/assets/js/bootstrap/5.2.3/bootstrap.bundle.js')}}"></script>





</body>
</html>
