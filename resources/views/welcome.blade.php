<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <!-- Hero Section -->
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold text-body-emphasis">Welcome to {{ config('app.name', 'Laravel') }}</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">
                    Quickly design and customize responsive mobile-first sites with Bootstrap, the world's most popular
                    front-end open source toolkit.
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4 gap-3">Get Started</a>
                    <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-lg px-4">Sign In</a>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="container px-4 py-5">
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start">
                    <div>
                        <h3 class="fw-bold mb-0 fs-4">Feature One</h3>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div>
                        <h3 class="fw-bold mb-0 fs-4">Feature Two</h3>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div>
                        <h3 class="fw-bold mb-0 fs-4">Feature Three</h3>
                        <p>Paragraph of text beneath the heading to explain the heading.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-3 my-4">
        <div class="container">
            <p class="text-center text-body-secondary">© {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights
                reserved.</p>
        </div>
    </footer>
</body>

</html>