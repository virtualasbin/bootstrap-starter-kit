<div class="col-md-3 col-lg-2 bg-dark text-white px-0 position-fixed h-100" wire:ignore.self>
    <div class="d-flex flex-column h-100">
        <div class="p-3">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none">
                <i class="bi bi-bootstrap fs-4 me-2"></i>
                <span class="fs-4">Dashboard</span>
            </a>
        </div>
        <ul class="nav flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('home') }}"
                    class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} text-white" wire:navigate>
                    <i class="bi bi-speedometer2 me-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('settings') }}"
                    class="nav-link {{ request()->routeIs('settings') ? 'active' : '' }} text-white" wire:navigate>
                    <i class="bi bi-gear me-2"></i>
                    Settings
                </a>
            </li>
        </ul>

        <div class="dropdown p-3 mt-auto">
            <button class="btn btn-dark dropdown-toggle rounded-0 w-100 text-start" type="button"
                data-bs-toggle="dropdown">
                <i class="bi bi-person-circle me-2"></i>
                {{ $user->name }}
            </button>
            <ul class="dropdown-menu dropdown-menu-dark rounded-0 w-100">
                <li>
                    <a class="dropdown-item" href="{{ route('profile') }}" wire:navigate>
                        <i class="bi bi-person me-2"></i> Profile
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('settings') }}" wire:navigate>
                        <i class="bi bi-gear me-2"></i> Settings
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger">
                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>