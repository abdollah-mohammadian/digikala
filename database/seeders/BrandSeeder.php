<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            ['name' => 'کاسیو (Casio)', 'category_id' => 1],
            ['name' => 'سیکو (Seiko)', 'category_id' => 1],
            ['name' => 'اپل (Apple)', 'category_id' => 2],
            ['name' => 'سامسونگ (Samsung)', 'category_id' => 2],
            ['name' => 'دل (Dell)', 'category_id' => 3],
            ['name' => 'ایسوس (Asus)', 'category_id' => 3],
            ['name' => 'نایک (Nike)', 'category_id' => 8],
            ['name' => 'آدیداس (Adidas)', 'category_id' => 8],
            ['name' => 'هواوی (Huawei)', 'category_id' => 2],
            ['name' => 'شیائومی (Xiaomi)', 'category_id' => 2],
            ['name' => 'ال‌جی (LG)', 'category_id' => 1],
            ['name' => 'سونی (Sony)', 'category_id' => 1],
            ['name' => 'اچ‌پی (HP)', 'category_id' => 3],
            ['name' => 'مایکروسافت (Microsoft)', 'category_id' => 3],
            ['name' => 'آدیداس اورجینال (Adidas Original)', 'category_id' => 8],
            ['name' => 'پوما (Puma)', 'category_id' => 8],
            ['name' => 'تسلا (Tesla)', 'category_id' => 9],
            ['name' => 'بوش (Bosch)', 'category_id' => 6],
            ['name' => 'فیلیپس (Philips)', 'category_id' => 6],
            ['name' => 'ریمکس (Remax)', 'category_id' => 1],
            ['name' => 'کینگستون (Kingston)', 'category_id' => 1],
            ['name' => 'الکالا (Elcala)', 'category_id' => 4],
            ['name' => 'جیبی (Gibbi)', 'category_id' => 17],
            ['name' => 'لنوو (Lenovo)', 'category_id' => 3],
            ['name' => 'ایسر (Acer)', 'category_id' => 3],
            ['name' => 'دوراسل (Duracell)', 'category_id' => 1],
            ['name' => 'مینی کوپر (Mini Cooper)', 'category_id' => 9],
            ['name' => 'لاکست (Lacoste)', 'category_id' => 8],
        ];

        foreach ($brands as $b) {
            Brand::updateOrCreate(
                ['slug' => Str::slug($b['name'])],
                [
                    'name' => $b['name'],
                    'category_id' => $b['category_id'],
                ]
            );
        }
    }
}

