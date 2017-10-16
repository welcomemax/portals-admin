<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config_products = config('products');
        $products = Product::get()->keyBy('alias');

        foreach ($config_products as $alias => $config_product) {
            $product = $products->where('alias', $alias)->first();

            if (empty($product)) {
                Product::create($config_product);
            } else {
                $product->update($config_product);
            }
        }
    }
}
