<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Livewire\Attributes\On;

class Sidebar extends Component
{
    public $user;

    public function __construct()
    {
        $this->refreshUser();
    }

    #[On('user-updated')]
    public function refreshUser()
    {
        $this->user = auth()->user();
    }

    public function render()
    {
        return view('components.sidebar');
    }
}
