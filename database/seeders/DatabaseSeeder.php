<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
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
        $this->call([
            CategorySeeder::class,
            BrandSeeder::class,
            ProductSeeder::class
        ]);
        }
        
    }
    

