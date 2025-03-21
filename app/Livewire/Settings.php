<?php

namespace App\Livewire;

use App\Models\Setting;
use Livewire\Component;

class Settings extends Component
{
    public $settings = [];
    public $app_name;
    public $app_description;
    public $mail_from_address;
    public $theme = 'light';

    protected $rules = [
        'app_name' => 'required',
        'app_description' => 'nullable',
        'mail_from_address' => 'required|email',
        'theme' => 'required|in:light,dark,system'
    ];

    public function mount()
    {
        $this->loadSettings();
    }

    public function loadSettings()
    {
        $this->app_name = $this->getSetting('app_name', config('app.name'));
        $this->app_description = $this->getSetting('app_description', '');
        $this->mail_from_address = $this->getSetting('mail_from_address', config('mail.from.address'));
        $this->theme = $this->getSetting('theme', 'light');
    }

    public function getSetting($key, $default = null)
    {
        $setting = Setting::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    public function save()
    {
        $validated = $this->validate();

        foreach ($validated as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value, 'group' => 'general']
            );
        }

        $this->dispatch('theme-changed', theme: $this->theme);
        session()->flash('message', 'Settings saved successfully.');
    }

    public function render()
    {
        return view('livewire.settings');
    }
}
