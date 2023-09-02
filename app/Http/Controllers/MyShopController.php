<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MyShopController extends Controller
{
    public $products;

    public function render()
    {
        $this->products = Product::all()->where('stock', '>', 0);
        return view('website.products-shop', ['products' => $this->products]);
    }

    public function renderDetails($name)
    {
        $product = Product::all()->where('name', $name);
        return view('website.products-details', ['product' => $product]);
    }
}
