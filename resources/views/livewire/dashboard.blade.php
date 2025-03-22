<x-slot:sidebar>
    <x-layouts.sidebar />
</x-slot:sidebar>

<div class="container-fluid">
    <h2 class="fw-medium mb-4">Dashboard</h2>

    <!-- Stats Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 p-3 bg-primary bg-opacity-10 rounded">
                            <i class="bi bi-people fs-4 text-primary"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="text-muted small">Total Users</div>
                            <div class="fs-5 fw-semibold">1,234</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 p-3 bg-success bg-opacity-10 rounded">
                            <i class="bi bi-graph-up fs-4 text-success"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="text-muted small">Growth</div>
                            <div class="fs-5 fw-semibold">12.5%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 p-3 bg-warning bg-opacity-10 rounded">
                            <i class="bi bi-clock-history fs-4 text-warning"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="text-muted small">Avg. Time</div>
                            <div class="fs-5 fw-semibold">24m</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 p-3 bg-info bg-opacity-10 rounded">
                            <i class="bi bi-bell fs-4 text-info"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="text-muted small">Notifications</div>
                            <div class="fs-5 fw-semibold">42</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
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