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
            'category' => "Shirts",
            'description' => 'This shirt features buttoned shirt style cuffs for a sporty and classy look.',
            'price' => 100,
            'image' => 'https://litb-cgis.rightinthebox.com/images/640x853/201908/gitdji1565064439938.jpg'
        ]);
        Product::create([
            'name' => "Women's Sandals",
            'category' => "Shoes",
            'description' => 'This is Sandals Style but Casual Occasions like Beach.',
            'price' => 57,
            'image' => 'https://litb-cgis.rightinthebox.com/images/640x640/202204/bps/product/inc/gxjmsb1650439011393.jpg'
        ]);
        Product::create([
            'name' => "Stretch Wing Chair",
            'category' => "Home & Garden",
            'description' => 'Slipcover with Seat Cover Spandex Sofa Covers Wingback Armchair Covers Protector for Living Room Strandmon Chair Cover.',
            'price' => 49,
            'image' => 'https://litb-cgis.rightinthebox.com/images/640x640/202205/bps/product/inc/wmbssp1652060666800.jpg'
        ]);
        Product::create([
            'name' => "Dress Floral Lace",
            'category' => "Baby & Kids",
            'description' => 'Solid Colored Party Wedding Evening Hollow Out White Blue Purple Lace Tulle Maxi Short Sleeve Flower Vintage Gowns Dresses 3-13 Years.',
            'price' => 137,
            'image' => 'https://litb-cgis.rightinthebox.com/images/640x853/202108/bps/product/inc/zqcmol1627888902543.jpg'
        ]);
    }
}
