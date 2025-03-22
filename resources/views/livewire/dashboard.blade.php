<x-slot:sidebar>
    <x-layouts.sidebar />
</x-slot:sidebar>

<div class="container-fluid">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-2 border-bottom">
        <h1 class="h2">Dashboard</h1>
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

    <div class="row g-3 mb-3">
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text display-6">150</p>
                    <button class="btn btn-sm btn-primary">View Details</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Revenue</h5>
                    <p class="card-text display-6">$1,500</p>
                    <button class="btn btn-sm btn-success">View Report</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Orders</h5>
                    <p class="card-text display-6">64</p>
                    <button class="btn btn-sm btn-info">Process</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tasks</h5>
                    <p class="card-text display-6">25</p>
                    <button class="btn btn-sm btn-warning">Manage</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header bg-transparent border-bottom-0 pb-0">
            <h5 class="card-title mb-0">Recent Activity</h5>
        </div>
        <div class="card-body">
            <div class="list-group list-group-flush">
                @for ($i = 0; $i < 5; $i++)
                    <div class="list-group-item px-0">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avatar bg-primary bg-opacity-10 text-primary rounded">
                                    <i class="bi bi-person"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <div class="fw-medium">New user registered</div>
                                <div class="text-muted small">2 hours ago</div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>