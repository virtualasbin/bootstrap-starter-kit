<div class="container-fluid">
    <div class="row min-vh-100">
        <x-sidebar />

        <main class="col-md-9 col-lg-10 ms-auto px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Profile</h1>
            </div>

            @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" id="profileTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="details-tab" data-bs-toggle="tab"
                                data-bs-target="#details" type="button" role="tab">Profile Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="password-tab" data-bs-toggle="tab" data-bs-target="#password"
                                type="button" role="tab">Change Password</button>
                        </li>
                    </ul>

                    <form wire:submit="updateProfile">
                        <div class="tab-content" id="profileTabsContent">
                            <div class="tab-pane fade show active" id="details" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input wire:model="name" type="text" class="form-control form-control-sm"
                                            id="name">
                                        @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input wire:model="email" type="email" class="form-control form-control-sm"
                                            id="email">
                                        @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="password" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="current_password" class="form-label">Current Password</label>
                                        <input wire:model="current_password" type="password"
                                            class="form-control form-control-sm" id="current_password">
                                        @error('current_password') <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="new_password" class="form-label">New Password</label>
                                        <input wire:model="new_password" type="password"
                                            class="form-control form-control-sm" id="new_password">
                                        @error('new_password') <div class="text-danger small">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="new_password_confirmation" class="form-label">Confirm New
                                            Password</label>
                                        <input wire:model="new_password_confirmation" type="password"
                                            class="form-control form-control-sm" id="new_password_confirmation">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm mt-3">Update Profile</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>