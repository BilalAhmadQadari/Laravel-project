<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(12);
        return view('shop.index', compact('products'));

    }
}
