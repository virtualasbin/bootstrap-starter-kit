<x-slot:sidebar>
    <x-layouts.sidebar />
</x-slot:sidebar>

<div class="container-fluid">
    <h2 class="fw-semibold mb-4">Settings</h2>

    <div class="row g-2">
        <div class="col-12 col-md-3">
            <div class="nav flex-column nav-pills sidebar">
                <a class="nav-link {{ request()->routeIs('settings.profile') ? 'active' : '' }}" wire:navigate
                    href="{{ route('settings.profile') }}">
                    <i class="bi bi-person me-2"></i> Profile
                </a>
                <a class="nav-link {{ request()->routeIs('settings.password') ? 'active' : '' }}" wire:navigate
                    href="{{ route('settings.password') }}">
                    <i class="bi bi-key me-2"></i> Password
                </a>
                <a class="nav-link {{ request()->routeIs('settings.appearance') ? 'active' : '' }}" wire:navigate
                    href="{{ route('settings.appearance') }}">
                    <i class="bi bi-palette me-2"></i> Appearance
                </a>
            </div>
        </div>

        <div class="col-12 col-md-9">
            {{ $slot }}
        </div>
    </div>
</div>