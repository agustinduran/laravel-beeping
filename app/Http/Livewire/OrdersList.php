<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\OrderLine;

class OrdersList extends Component
{
    public $orders = [];

    public function mount()
    {
        $this->orders = Order::withCount('orderLines AS total_qty')->get();
    }

    public function render()
    {
        return view('livewire.orders-list');
    }
}
