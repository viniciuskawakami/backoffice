<!DOCTYPE html>
<html>
<head>
    <title>Custom Auth in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">><br><br></div
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>><br><br>
        @endif
            <a class="navbar-brand mr-auto" href="#">ClickWebTech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.showLoginForm') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.showRegisterForm') }}">Register</a>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('auth.logout') }}">Logout</a>
                        </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.logout') }}">Logout</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div><br><br>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </nav>
    @yield('content')
</body>
</html>
