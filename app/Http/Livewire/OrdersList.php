<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;

class OrdersList extends Component
{
    public $orders = [];

    public function mount()
    {
        $this->orders = Order::with('orderLines')->get();

        foreach ($this->orders as $order) {
            $order->total_qty = $order->orderLines->sum('qty');
        }
    }

    public function render()
    {
        return view('livewire.orders-list');
    }
}
