<x-layouts.settings>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Appearance Settings</h5>
            <p class="text-muted">Customize the look and feel of your application.</p>

            <form class="mt-4">
                <div class="mb-3">
                    <label class="form-label d-block">Theme</label>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Theme selection">
                        <input type="radio" class="btn-check" name="theme" id="light" wire:click="setTheme('light')">
                        <label class="btn btn-outline-primary" for="light">
                            <i class="bi bi-sun me-2"></i>Light
                        </label>

                        <input type="radio" class="btn-check" name="theme" id="dark" wire:click="setTheme('dark')">
                        <label class="btn btn-outline-primary" for="dark">
                            <i class="bi bi-moon me-2"></i>Dark
                        </label>

                        <input type="radio" class="btn-check" name="theme" id="system" wire:click="setTheme('system')">
                        <label class="btn btn-outline-primary" for="system">
                            <i class="bi bi-circle-half me-2"></i>System
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layouts.settings>