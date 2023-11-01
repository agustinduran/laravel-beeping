<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\OrdersLine;

class CalculateTotalOrderCost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $totalCost = OrdersLine::with('product')->get()->sum(function ($orderLine) {
            return $orderLine->qty * $orderLine->product->cost;
        });
    
        // Imprimir el resultado en la terminal
        echo "Coste total de todas las órdenes: $totalCost\n";
    }
}
