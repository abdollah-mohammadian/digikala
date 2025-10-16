<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryFeature;

class CategoryFeatureSeeder extends Seeder
{
    public function run(): void
    {
        $features = [
            // 📱 موبایل (category_id = 2)
            ['category_id' => 2, 'feature_name' => 'برند', 'filterable' => true],
            ['category_id' => 2, 'feature_name' => 'حافظه داخلی', 'filterable' => true],
            ['category_id' => 2, 'feature_name' => 'حافظه رم (RAM)', 'filterable' => true],
            ['category_id' => 2, 'feature_name' => 'اندازه صفحه نمایش', 'filterable' => true],
            ['category_id' => 2, 'feature_name' => 'شبکه ارتباطی', 'filterable' => true],
            ['category_id' => 2, 'feature_name' => 'دوربین اصلی', 'filterable' => true],
            ['category_id' => 2, 'feature_name' => 'باتری', 'filterable' => false],
            ['category_id' => 2, 'feature_name' => 'سیستم عامل', 'filterable' => true],
            ['category_id' => 2, 'feature_name' => 'رنگ', 'filterable' => true],

            // 💻 لپ‌تاپ (category_id = 3)
            ['category_id' => 3, 'feature_name' => 'پردازنده (CPU)', 'filterable' => true],
            ['category_id' => 3, 'feature_name' => 'کارت گرافیک (GPU)', 'filterable' => true],
            ['category_id' => 3, 'feature_name' => 'رم (RAM)', 'filterable' => true],
            ['category_id' => 3, 'feature_name' => 'حافظه SSD', 'filterable' => true],
            ['category_id' => 3, 'feature_name' => 'اندازه صفحه نمایش', 'filterable' => true],
            ['category_id' => 3, 'feature_name' => 'وزن', 'filterable' => false],
            ['category_id' => 3, 'feature_name' => 'سیستم عامل', 'filterable' => true],
            ['category_id' => 3, 'feature_name' => 'رنگ', 'filterable' => true],

            // ✏️ لوازم تحریر (category_id = 4)
            ['category_id' => 4, 'feature_name' => 'نوع محصول', 'filterable' => true],
            ['category_id' => 4, 'feature_name' => 'جنس بدنه', 'filterable' => true],
            ['category_id' => 4, 'feature_name' => 'رنگ', 'filterable' => true],
            ['category_id' => 4, 'feature_name' => 'برند', 'filterable' => true],

            // 🏠 خانه و آشپزخانه (category_id = 5)
            ['category_id' => 5, 'feature_name' => 'جنس', 'filterable' => true],
            ['category_id' => 5, 'feature_name' => 'کاربرد', 'filterable' => true],
            ['category_id' => 5, 'feature_name' => 'رنگ', 'filterable' => true],

            // ⚡ لوازم خانگی برقی (category_id = 6)
            ['category_id' => 6, 'feature_name' => 'توان مصرفی', 'filterable' => true],
            ['category_id' => 6, 'feature_name' => 'ظرفیت', 'filterable' => true],
            ['category_id' => 6, 'feature_name' => 'رده انرژی', 'filterable' => true],
            ['category_id' => 6, 'feature_name' => 'برند', 'filterable' => true],

            // 💄 آرایشی و بهداشتی (category_id = 7)
            ['category_id' => 7, 'feature_name' => 'نوع پوست', 'filterable' => true],
            ['category_id' => 7, 'feature_name' => 'حجم', 'filterable' => true],
            ['category_id' => 7, 'feature_name' => 'کاربرد', 'filterable' => true],
            ['category_id' => 7, 'feature_name' => 'برند', 'filterable' => true],

            // 👕 مد و پوشاک (category_id = 8)
            ['category_id' => 8, 'feature_name' => 'جنس پارچه', 'filterable' => true],
            ['category_id' => 8, 'feature_name' => 'سایز', 'filterable' => true],
            ['category_id' => 8, 'feature_name' => 'رنگ', 'filterable' => true],
            ['category_id' => 8, 'feature_name' => 'مدل', 'filterable' => true],

            // 🚗 خودرو و موتورسیکلت (category_id = 9)
            ['category_id' => 9, 'feature_name' => 'مدل خودرو', 'filterable' => true],
            ['category_id' => 9, 'feature_name' => 'سال ساخت', 'filterable' => true],
            ['category_id' => 9, 'feature_name' => 'نوع سوخت', 'filterable' => true],
            ['category_id' => 9, 'feature_name' => 'برند قطعه', 'filterable' => true],

            // 🛠️ ابزار آلات و تجهیزات (category_id = 10)
            ['category_id' => 10, 'feature_name' => 'نوع ابزار', 'filterable' => true],
            ['category_id' => 10, 'feature_name' => 'جنس', 'filterable' => true],
            ['category_id' => 10, 'feature_name' => 'کاربرد', 'filterable' => true],

            // 💍 طلا و نقره (category_id = 11)
            ['category_id' => 11, 'feature_name' => 'عیار طلا', 'filterable' => true],
            ['category_id' => 11, 'feature_name' => 'جنس سنگ', 'filterable' => true],
            ['category_id' => 11, 'feature_name' => 'وزن', 'filterable' => true],

            // 🏥 تجهیزات پزشکی (category_id = 12)
            ['category_id' => 12, 'feature_name' => 'کاربرد', 'filterable' => true],
            ['category_id' => 12, 'feature_name' => 'جنس', 'filterable' => true],
            ['category_id' => 12, 'feature_name' => 'برند', 'filterable' => true],

            // 📚 کتاب و هنر (category_id = 13)
            ['category_id' => 13, 'feature_name' => 'نویسنده', 'filterable' => true],
            ['category_id' => 13, 'feature_name' => 'مترجم', 'filterable' => true],
            ['category_id' => 13, 'feature_name' => 'موضوع', 'filterable' => true],
            ['category_id' => 13, 'feature_name' => 'انتشارات', 'filterable' => true],

            // 🏀 ورزش و سفر (category_id = 14)
            ['category_id' => 14, 'feature_name' => 'نوع ورزش', 'filterable' => true],
            ['category_id' => 14, 'feature_name' => 'سایز', 'filterable' => true],
            ['category_id' => 14, 'feature_name' => 'جنس', 'filterable' => true],
            ['category_id' => 14, 'feature_name' => 'وزن', 'filterable' => false],

            // 🎮 اسباب بازی کودک و نوزاد (category_id = 17)
            ['category_id' => 17, 'feature_name' => 'رده سنی', 'filterable' => true],
            ['category_id' => 17, 'feature_name' => 'جنس', 'filterable' => true],
            ['category_id' => 17, 'feature_name' => 'نوع بازی', 'filterable' => true],
            ['category_id' => 17, 'feature_name' => 'برند', 'filterable' => true],

            // 🧵 محصولات بومی و محلی (category_id = 18)
            ['category_id' => 18, 'feature_name' => 'نوع محصول', 'filterable' => true],
            ['category_id' => 18, 'feature_name' => 'منطقه تولید', 'filterable' => true],
            ['category_id' => 18, 'feature_name' => 'جنس', 'filterable' => true],
        ];

        foreach ($features as $feature) {
            CategoryFeature::updateOrCreate(
                [
                    'category_id' => $feature['category_id'],
                    'feature_name' => $feature['feature_name'],
                ],
                [
                    'category_id' => $feature['category_id'],
                    'feature_name' => $feature['feature_name'],
                    'filterable' => $feature['filterable'],
                ]
            );
        }
    }
}
