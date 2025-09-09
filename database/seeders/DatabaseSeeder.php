<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {      
            $categories = Category::factory(5)
                ->create()
                ->each(function ($parent) {
                    Category::factory(2)
                        ->state(['parent_id' => $parent->id])
                        ->create();
                });
    
            Category::all()->each(function ($category) {
                Brand::factory(3)           
                    ->state(['category_id' => $category->id])
                    ->has(
                        Product::factory(10) 
                    )
                    ->create();
            });
        }
        
    }
    

