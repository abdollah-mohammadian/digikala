<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory(2)
            ->create()
            ->each(function ($parent) {
                Category::factory(2)
                ->state(['parent_id' => $parent->id])
                ->create();

                });
    }
}
