<?php

namespace App\Http\Controllers;

use App\Product;
use App\Platform;
use App\Portal;

class TableController extends Controller
{
    public function index() {
        $platforms = Platform::get();
        $products = Product::get();
        $portals = Portal::get();

        return view('table', [
            'platforms' => $platforms,
            'products' => $products,
            'portals' => $portals
        ]);
    }
}
