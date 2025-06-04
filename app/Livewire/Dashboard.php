<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Order; // Assuming an Order model exists

#[Layout('components.layouts.app')]
class Dashboard extends Component
{
    public $orders;

    public function mount()
    {
        // Fetch orders and their prices
        $this->orders = Order::all();
    }

    public function render()
    {
        return view('livewire.dashboard', [
            'orders' => $this->orders,
        ]);
    }
}
