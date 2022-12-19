<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class Statistic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Statistic:earnigs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for statisticing the earning';

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
     * @return int
     */
    public function handle()
    {
        $data = DB::table('orders')
            ->join('order_products', 'orders.id', '=', 'order_products.order_id')
            ->whereNotNull('orders.deleted_at')
            ->select(DB::raw('count(orders.id) as quanlities_orders'), DB::raw('SUM(orders.total) as earnings'), DB::raw('SUM(order_products.product_id) as quanlities_products_in_order'), DB::raw('DATE_FORMAT(orders.created_at, "%Y-%m-%d") as formatted_dob'))
            ->groupBy('formatted_dob')
            ->get();
        foreach ($data as  $item) {
            DB::table('earnings')->insert([
                'earnings' => $item->earnings,
                'order_date' => $item->formatted_dob,
                'quanlities_orders' => $item->quanlities_orders,
                'quanlities_products_in_order' => $item->quanlities_products_in_order,
            ]);
        }
    }
}
