<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-2 collapse d-lg-block sidebar bg-light border-end" id="sidebar">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                            href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('settings.*') ? 'active' : '' }}"
                            href="{{ route('settings.profile') }}">
                            Settings
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <main class="col-lg-10 ms-sm-auto px-4 py-4">
            <!-- Page Heading -->
            @if (isset($header))
                <header class="mb-4">
                    <h2 class="fw-medium">
                        {{ $header }}
                    </h2>
                </header>
            @endif

            {{ $slot }}
        </main>
    </div>
</div>