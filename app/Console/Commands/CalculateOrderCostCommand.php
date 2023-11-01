<?php

namespace App\Console\Commands;

use App\Jobs\CalculateTotalOrderCost;
use Illuminate\Console\Command;

class CalculateOrderCostCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:order-cost';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando que calcula el costo total de todas las órdenes de la base de datos';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        dispatch(new CalculateTotalOrderCost());
        $this->info('Job dispatched');
    }
}
