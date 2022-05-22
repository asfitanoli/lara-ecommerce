<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Traits\Defs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homeProductCats = Defs::productCats();

        $homeProducts = Product::whereIn('category', $homeProductCats)->get();

        $prods = [];
        foreach ($homeProducts as $product) {
            $prods[strtolower($product->category)][] = $product;
        }

        return view('home', compact('homeProductCats', 'prods'));
    }
}
