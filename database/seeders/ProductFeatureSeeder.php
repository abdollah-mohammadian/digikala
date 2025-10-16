<?php

namespace Database\Seeders;

use App\Models\ProductFeature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productFeatures = [
            // گوشی آیفون 14 پرو
            ['product_id' => 1, 'feature_name' => 'حافظه داخلی', 'feature_value' => '128GB', 'display_order' => 1],
            ['product_id' => 1, 'feature_name' => 'دوربین اصلی', 'feature_value' => '48 مگاپیکسل', 'display_order' => 2],
            ['product_id' => 1, 'feature_name' => 'پردازنده', 'feature_value' => 'A16 Bionic', 'display_order' => 3],
        
            // گوشی سامسونگ گلکسی S23
            ['product_id' => 2, 'feature_name' => 'نمایشگر', 'feature_value' => 'Dynamic AMOLED 6.1 اینچ', 'display_order' => 1],
            ['product_id' => 2, 'feature_name' => 'باتری', 'feature_value' => '3900mAh', 'display_order' => 2],
            ['product_id' => 2, 'feature_name' => 'پردازنده', 'feature_value' => 'Snapdragon 8 Gen 2', 'display_order' => 3],
        
            // لپ تاپ دل XPS 13
            ['product_id' => 3, 'feature_name' => 'پردازنده', 'feature_value' => 'Intel Core i7', 'display_order' => 1],
            ['product_id' => 3, 'feature_name' => 'RAM', 'feature_value' => '16GB', 'display_order' => 2],
            ['product_id' => 3, 'feature_name' => 'حافظه SSD', 'feature_value' => '512GB', 'display_order' => 3],
        
            // لپ تاپ ایسوس ROG
            ['product_id' => 4, 'feature_name' => 'کارت گرافیک', 'feature_value' => 'NVIDIA RTX 3070', 'display_order' => 1],
            ['product_id' => 4, 'feature_name' => 'پردازنده', 'feature_value' => 'Intel Core i9', 'display_order' => 2],
            ['product_id' => 4, 'feature_name' => 'RAM', 'feature_value' => '32GB', 'display_order' => 3],
        
            // کفش نایک ایر مکس
            ['product_id' => 5, 'feature_name' => 'جنسیت', 'feature_value' => 'مردانه', 'display_order' => 1],
            ['product_id' => 5, 'feature_name' => 'جنس رویه', 'feature_value' => 'چرم مصنوعی', 'display_order' => 2],
            ['product_id' => 5, 'feature_name' => 'سایز', 'feature_value' => '38-45', 'display_order' => 3],
        
            // کفش آدیداس سوپرستار
            ['product_id' => 6, 'feature_name' => 'جنسیت', 'feature_value' => 'زنانه', 'display_order' => 1],
            ['product_id' => 6, 'feature_name' => 'جنس رویه', 'feature_value' => 'چرم', 'display_order' => 2],
            ['product_id' => 6, 'feature_name' => 'سایز', 'feature_value' => '36-40', 'display_order' => 3],
        
            // هدفون سونی
            ['product_id' => 7, 'feature_name' => 'نوع اتصال', 'feature_value' => 'بی‌سیم', 'display_order' => 1],
            ['product_id' => 7, 'feature_name' => 'قابلیت', 'feature_value' => 'نویز کنسلینگ', 'display_order' => 2],
            ['product_id' => 7, 'feature_name' => 'مدت زمان باتری', 'feature_value' => '30 ساعت', 'display_order' => 3],
        
            // تلویزیون ال‌جی
            ['product_id' => 8, 'feature_name' => 'اندازه صفحه', 'feature_value' => '55 اینچ', 'display_order' => 1],
            ['product_id' => 8, 'feature_name' => 'رزولوشن', 'feature_value' => '4K Ultra HD', 'display_order' => 2],
            ['product_id' => 8, 'feature_name' => 'سیستم عامل', 'feature_value' => 'webOS', 'display_order' => 3],
        
            // یخچال بوش
            ['product_id' => 9, 'feature_name' => 'ظرفیت', 'feature_value' => '400 لیتر', 'display_order' => 1],
            ['product_id' => 9, 'feature_name' => 'مصرف انرژی', 'feature_value' => 'A++', 'display_order' => 2],
            ['product_id' => 9, 'feature_name' => 'نوع', 'feature_value' => 'درب فرانسوی', 'display_order' => 3],
        
            // ماشین لباسشویی فیلیپس
            ['product_id' => 10, 'feature_name' => 'ظرفیت', 'feature_value' => '7 کیلوگرم', 'display_order' => 1],
            ['product_id' => 10, 'feature_name' => 'سرعت چرخش', 'feature_value' => '1200 دور در دقیقه', 'display_order' => 2],
            ['product_id' => 10, 'feature_name' => 'تعداد برنامه', 'feature_value' => '15 برنامه', 'display_order' => 3],
        ];

        foreach ($productFeatures as $feature) {
            ProductFeature::updateOrCreate(
                [
                    'product_id' => $feature['product_id'],
                    'feature_name' => $feature['feature_name']
                ],
                $feature
            );
        }


    }
}
