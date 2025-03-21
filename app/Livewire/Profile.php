<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Hash;

class Profile extends Component
{
    public $user;
    public $name;
    public $email;
    public $current_password;
    public $new_password;
    public $new_password_confirmation;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'current_password' => 'required_with:new_password',
        'new_password' => 'nullable|min:8|confirmed',
    ];

    public function mount()
    {
        $this->user = auth()->user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function updateProfile()
    {
        $validated = $this->validate();

        if ($this->new_password) {
            if (!Hash::check($this->current_password, $this->user->password)) {
                $this->addError('current_password', 'The current password is incorrect.');
                return;
            }
            $this->user->password = Hash::make($this->new_password);
        }

        $this->user->name = $validated['name'];
        $this->user->email = $validated['email'];
        $this->user->save();

        $this->reset(['current_password', 'new_password', 'new_password_confirmation']);
        $this->dispatch('user-updated', user: $this->user);
        session()->flash('message', 'Profile updated successfully.');
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
