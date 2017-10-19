<?php

use App\Product;
use App\Platform;
use App\Portal;
use Illuminate\Database\Seeder;

class PortalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $platforms = Platform::get();
        $products = Product::get();
        $portals = Portal::get();

        foreach ($products as $product) {
            foreach ($platforms as $platform) {
                $portal = $portals->where('product_id', $product->id)->where('platform_id', $platform->id)->first();

                $standalone_platforms = array(
                    'codecanyon',
                    'shopify',
                    'weebly',
                );

                $portal_default = [
                    'product_id' => $product->id,
                    'platform_id' => $platform->id,
                    'status' => 7,
                    'portal' => in_array($platform->alias, $standalone_platforms) ? 0 : 1
                ];

                if (empty($portal)) {
                    Portal::create($portal_default);
                }
            }
        }
    }
}
