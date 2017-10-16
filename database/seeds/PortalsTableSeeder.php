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

                $portal_default = [
                    'version' => '1.0.0',
                    'product_id' => $product->id,
                    'platform_id' => $platform->id,
                    'status' => 7,
                    'status_text' => 7,
                    'status_images' => 7
                ];

                if (empty($portal)) {
                    Portal::create($portal_default);
                }
            }
        }
    }
}
