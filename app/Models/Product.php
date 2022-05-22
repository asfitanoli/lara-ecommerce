<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'image',
        'price',
    ];

    public static function saveProduct($request, $id = null)
    {
        $inputs = $request->all();

        if ($id == null) {
            $product = new Product();
            $product->name = $inputs['name'];
            $product->description = $inputs['description'];
            $product->price = $inputs['price'];
            $product->category = $inputs['category'];
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('product/images'), $filename);
                $product->image = $filename;
            }
            $product->save();
        } else {
            $product = Product::find($id);
            $product->name = $inputs['name'];
            $product->description = $inputs['description'];
            $product->price = $inputs['price'];
            $product->category = $inputs['category'];

            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('product/images'), $filename);
                $product->image = $filename;
            }
            $product->save();
        }

    }
}
