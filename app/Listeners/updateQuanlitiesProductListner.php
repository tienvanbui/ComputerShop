<?php

namespace App\Listeners;

use Illuminate\Support\Facades\DB;

class updateQuanlitiesProductListner
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        foreach ($event->products as $product) {
            $productNeedUpdate = DB::table('product_color_sizes')
                ->where('product_color_sizes.product_id', '=', $product->pivot->product_id)
                ->where('product_color_sizes.color_id', '=', $product->pivot->color_id)->first();
            DB::table('product_color_sizes')
                ->where('product_color_sizes.product_id', '=', $product->pivot->product_id)
                ->where('product_color_sizes.color_id', '=', $product->pivot->color_id)
                ->update([
                    'quanlities' => $productNeedUpdate->quanlities - $product->pivot->buy_quanlity
                ]);
        }
    }
}
