<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer></script>

</head>
<body>

@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-dark shadow bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    @guest
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    @endguest
                    @auth
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                        <a class="nav-link" href="{{ route('contacts') }}">Contacts</a>
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
@show

@yield('content')

@section('footer')

@show

@yield('scripts')

<script src="{{ asset('js/bootstrap.min.js') }}" ></script>
</body>
</html>
