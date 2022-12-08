<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index()
    {
        $products= Product::all();

        return view('shop.category', compact('products'))->with([
            'product' => $products
        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('shop.show', compact('product'));
    }

}
