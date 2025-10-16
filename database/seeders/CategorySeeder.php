<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'کالای دیجیتال',
                'description' => 'دوربین، هدفون، اسپیکر و سایر محصولات دیجیتال و الکترونیکی',
                'parent_id' => null,
            ],
            [
                'name' => 'موبایل',
                'description' => 'انواع گوشی‌های موبایل از برندهای مختلف با قیمت‌ها و ویژگی‌های متنوع',
                'parent_id' => 1,
            ],
            [
                'name' => 'لپ تاپ',
                'description' => 'لپ‌تاپ‌های شخصی، اداری و گیمینگ با برندها و مشخصات مختلف',
                'parent_id' => 1,
            ],
            [
                'name' => 'لوازم تحریر',
                'description' => 'قلم، دفتر، کاغذ و سایر لوازم تحریر مورد نیاز دانش‌آموزان و ادارات',
                'parent_id' => null,
            ],
            [
                'name' => 'خانه و آشپزخانه',
                'description' => 'ابزار، ظروف و وسایل کاربردی برای خانه و آشپزخانه',
                'parent_id' => null,
            ],
            [
                'name' => 'لوازم خانگی برقی',
                'description' => 'یخچال، ماشین لباسشویی، جاروبرقی و سایر لوازم خانگی برقی',
                'parent_id' => null,
            ],
            [
                'name' => 'آرایشی بهداشتی',
                'description' => 'محصولات آرایشی، مراقبت از پوست و بهداشت فردی',
                'parent_id' => null,
            ],
            [
                'name' => 'مد و پوشاک',
                'description' => 'لباس، کیف، کفش و اکسسوری برای بانوان و آقایان',
                'parent_id' => null,
            ],
            [
                'name' => 'خودرو و موتورسیکلت',
                'description' => 'قطعات، لوازم جانبی و تجهیزات خودرو و موتورسیکلت',
                'parent_id' => null,
            ],
            [
                'name' => 'ابزار آلات و تجهیزات',
                'description' => 'ابزار دستی، برقی و تجهیزات صنعتی و ساختمانی',
                'parent_id' => null,
            ],
            [
                'name' => 'طلا و نقره',
                'description' => 'زیورآلات طلا، نقره و سنگ‌های قیمتی',
                'parent_id' => null,
            ],
            [
                'name' => 'تجهیزات پزشکی و سلامت',
                'description' => 'تجهیزات پزشکی خانگی، مکمل‌ها و وسایل سلامتی',
                'parent_id' => null,
            ],
            [
                'name' => 'کتاب و هنر',
                'description' => 'کتاب‌های مختلف، لوازم هنری و سرگرمی',
                'parent_id' => null,
            ],
            [
                'name' => 'ورزش و سفر',
                'description' => 'تجهیزات ورزشی، کیف و لوازم سفر',
                'parent_id' => null,
            ],
            [
                'name' => 'کارت هدیه و گیفت کارت',
                'description' => 'کارت‌های هدیه و کارت‌های اعتباری برای خرید',
                'parent_id' => null,
            ],
            [
                'name' => 'خدمات آنلاین',
                'description' => 'سرویس‌ها و خدمات اینترنتی و دیجیتال',
                'parent_id' => null,
            ],
            [
                'name' => 'اسباب بازی کودک و نوزاد',
                'description' => 'اسباب بازی، بازی آموزشی و محصولات کودک و نوزاد',
                'parent_id' => null,
            ],
            [
                'name' => 'محصولات بومی و محلی',
                'description' => 'صنایع دستی، محصولات محلی و سوغات مناطق مختلف',
                'parent_id' => null,
            ],
        ];

        foreach ($categories as $cat) {
            Category::updateOrCreate(
                ['slug' => Str::slug($cat['name'])],
                [
                    'name' => $cat['name'],
                    'description' => $cat['description'],
                    'parent_id' => $cat['parent_id'],
                ]
            );
        }
    }
}