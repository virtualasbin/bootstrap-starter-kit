<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body class="min-vh-100 d-flex">
    <!-- Sidebar -->
    <div class="d-flex flex-column flex-shrink-0 bg-light border-end" style="width: 280px">
        <div class="collapse d-lg-block h-100" id="sidebar">
            {{ $sidebar ?? '' }}
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1 overflow-auto">
        <button class="navbar-toggler position-absolute d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebar" style="top: 1rem; left: 1rem">
            <span class="navbar-toggler-icon"></span>
        </button>

        <main class="container-fluid py-2">
            @if(isset($header))
                <header class="mb-4">
                    <h2 class="fw-medium">{{ $header }}</h2>
                </header>
            @endif

            {{ $slot }}
        </main>
    </div>
</body>

</html>