<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => "Men's Shirt Graphic Collar",
            'category' => "Shirt",
            'description' => 'This shirt features buttoned shirt style cuffs for a sporty and classy look.',
            'price' => 100,
            'image' => '202205212314polo-shirt-2.png'
        ]);
        Product::create([
            'name' => "Women's Sandals",
            'category' => "Toys",
            'description' => 'This is Sandals Style but Casual Occasions like Beach.',
            'price' => 57,
            'image' => '202205212332sport-2.png'
        ]);
        Product::create([
            'name' => "Stretch Wing Chair",
            'category' => "Books",
            'description' => 'Slipcover with Seat Cover Spandex Sofa Covers Wingback Armchair Covers Protector for Living Room Strandmon Chair Cover.',
            'price' => 49,
            'image' => '202205212333polo-shirt-2.png'
        ]);
        Product::create([
            'name' => "Dress Floral Lace",
            'category' => "Furniture",
            'description' => 'Solid Colored Party Wedding Evening Hollow Out White Blue Purple Lace Tulle Maxi Short Sleeve Flower Vintage Gowns Dresses 3-13 Years.',
            'price' => 137,
            'image' => '202205221226sport-2.png'
        ]);
    }
}
