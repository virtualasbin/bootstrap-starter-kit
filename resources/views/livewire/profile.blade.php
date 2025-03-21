<div class="container-fluid">
    <div class="row min-vh-100">
        <x-sidebar />

        <main class="col-md-9 col-lg-10 ms-auto px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Profile</h1>
            </div>

            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <form wire:submit="updateProfile">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input wire:model="name" type="text" class="form-control" id="name">
                            @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input wire:model="email" type="email" class="form-control" id="email">
                            @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <hr>

                        <h5>Change Password</h5>
                        <div class="mb-3">
                            <label for="current_password" class="form-label">Current Password</label>
                            <input wire:model="current_password" type="password" class="form-control" id="current_password">
                            @error('current_password') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="new_password" class="form-label">New Password</label>
                            <input wire:model="new_password" type="password" class="form-control" id="new_password">
                            @error('new_password') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                            <input wire:model="new_password_confirmation" type="password" class="form-control" id="new_password_confirmation">
                        </div>

                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
