<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Vite assets -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/home') }}" class="nav-link" wire:navigate>Home</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link" wire:navigate>Log in</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link" wire:navigate>Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1 class="display-4 mb-4">Welcome to Laravel</h1>
                <p class="lead mb-4">Bootstrap 5 is now installed and ready to use!</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="https://laravel.com/docs" class="btn btn-primary btn-lg px-4 gap-3" wire:navigate>
                        <i class="bi bi-book"></i> Documentation
                    </a>
                    <a href="https://github.com/laravel/laravel" class="btn btn-outline-secondary btn-lg px-4">
                        <i class="bi bi-github"></i> GitHub
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>