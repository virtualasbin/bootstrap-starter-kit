<x-slot:sidebar>
    <x-layouts.sidebar />
</x-slot:sidebar>

<div class="container-fluid">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-2 border-bottom">
        <h3 class="fw-semibold">Settings</h3>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-share"></i> Share
                </button>
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-download"></i> Export
                </button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-calendar3"></i> This week
            </button>
        </div>
    </div>

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