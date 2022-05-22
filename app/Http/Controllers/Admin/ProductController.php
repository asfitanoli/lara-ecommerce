<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Traits\Defs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function addProductForm()
    {
        $categories = Defs::productCats();
        return view('admin.products.add', compact('categories'));
    }

    public function addProduct(Request $request)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimetypes:image/jpeg,image/png',
        ];

        $validator = Validator::make($request->all(), $rules);

        if (!$validator->passes()) {
            return redirect('/admin/product/add')
                ->withErrors($validator)
                ->withInput();
        }

        Product::saveProduct($request);

        return redirect()->route('products.manage')
            ->with('success', 'Product added successfully');
    }

    public function updateProductForm($id)
    {
        $categories = Defs::productCats();
        $product = Product::find($id);
        return view('admin.products.edit', compact('categories','product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if (!$validator->passes()) {
            return redirect('/admin/product/update')
                ->withErrors($validator)
                ->withInput();
        }

        Product::saveProduct($request, $id);

        return redirect()->route('products.manage')
            ->with('success', 'Product updated successfully');
    }
}
