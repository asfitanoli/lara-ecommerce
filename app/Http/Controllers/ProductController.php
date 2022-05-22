<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Traits\Defs;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products($cat = null)
    {
        $categories = Defs::productCats();

        if ($cat == null) {
            $products = Product::all();
        } else {
            $products = Product::where('category', '=', $cat)->get();
        }

        return view('products.index', compact('categories', 'products', 'cat'));
    }

    public function productDetail($id)
    {
        $product = Product::find($id);

        return view('products.detail', compact('product'));

    }
}
