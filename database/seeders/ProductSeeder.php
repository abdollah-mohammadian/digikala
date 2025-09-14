<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::all()->each(function ($brand) {
            Product::factory(5)       
                ->state([
                    'brand_id' => $brand->id,
                    'category_id' => $brand->category_id
                    ])->create();
        });
    }
}
