<?php

namespace App\Livewire\Settings;

use App\Models\Setting;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.app')]
class Appearance extends Component
{
    public $theme = 'light';

    public function mount()
    {
        $this->theme = Setting::get('appearance.theme', 'light');
    }

    public function setTheme($theme)
    {
        $this->theme = $theme;
        Setting::set('appearance.theme', $theme);
        $this->dispatch('settings-saved');
    }

    public function saveAppearance()
    {
        Setting::set('appearance.theme', $this->theme);
        $this->dispatch('settings-saved');
    }

    public function render()
    {
        return view('livewire.settings.appearance')->layout('components.layouts.app')->slot('slot');
    }
}
