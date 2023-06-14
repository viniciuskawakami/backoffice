@extends('layouts.app')
@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">{{ __('[Backoffice]::::Login::::') }}</h3>

                    <div class="card-body">
                        <form method="POST" action="{{ route('auth.customLogin') }}">
                            @csrf
                            <div class="form-group mb-3">
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" >
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me<br> <p class="text-muted">i'm forgot my password <a href="{{ route('auth.customRegister') }}" class="text-reset">Click here to start recover!</a></p>
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-outline-dark">Sign in</button>
                                <p class="text-muted">New in BackOffice?<a href="{{ route('auth.customRegister') }}" class="text-reset">Sign Up here!</a>.
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
