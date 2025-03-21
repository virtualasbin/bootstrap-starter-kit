<div class="container-fluid">
    <div class="row min-vh-100">
        <x-sidebar />

        <!-- Main content -->
        <main class="col-md-9 col-lg-10 ms-auto px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Settings</h1>
            </div>

            <div class="card">
                <div class="card-body">
                    <form wire:submit="save">
                        <div class="mb-3">
                            <label for="app_name" class="form-label">Application Name</label>
                            <input wire:model="app_name" type="text" class="form-control" id="app_name">
                            @error('app_name')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="mail_from_address" class="form-label">Mail From Address</label>
                            <input wire:model="mail_from_address" type="email" class="form-control"
                                id="mail_from_address">
                            @error('mail_from_address')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="app_description" class="form-label">Application Description</label>
                            <textarea wire:model="app_description" class="form-control" id="app_description"
                                rows="3"></textarea>
                            @error('app_description')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label d-block">Theme</label>
                            <div class="btn-group" role="group" aria-label="Theme selection">
                                <input wire:model="theme" type="radio" class="btn-check" name="theme" id="lightTheme"
                                    value="light" autocomplete="off">
                                <label class="btn btn-outline-primary btn-sm" for="lightTheme">
                                    <i class="bi bi-sun me-1"></i> Light
                                </label>

                                <input wire:model="theme" type="radio" class="btn-check" name="theme" id="darkTheme"
                                    value="dark" autocomplete="off">
                                <label class="btn btn-outline-primary btn-sm" for="darkTheme">
                                    <i class="bi bi-moon me-1"></i> Dark
                                </label>

                                <input wire:model="theme" type="radio" class="btn-check" name="theme" id="systemTheme"
                                    value="system" autocomplete="off">
                                <label class="btn btn-outline-primary btn-sm" for="systemTheme">
                                    <i class="bi bi-circle-half me-1"></i> System
                                </label>
                            </div>
                            @error('theme')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">Save Settings</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>