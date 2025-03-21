<div class="container-fluid">
    <div class="row min-vh-100">
        <x-sidebar />

        <!-- Main content -->
        <main class="col-md-9 col-lg-10 ms-auto px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
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

            <!-- Dashboard content -->
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
        </main>
    </div>
</div>