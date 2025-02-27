<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function produk()
    {
         $products = Product::all();
    return view('produk', ['products' => $products]);
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function login()
    {
        return view('login');
    }
}
