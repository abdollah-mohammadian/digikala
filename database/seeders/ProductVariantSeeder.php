<?php

namespace Database\Seeders;

use App\Models\ProductVariant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productVariants = [
            // گوشی آیفون 14 پرو - رنگ‌ها
            ['product_id' => 1, 'variant_type' => 'رنگ', 'variant_value' => 'مشکی', 'variant_hex' => '#000000', 'price_modifier' => 0, 'stock_quantity' => 8],
            ['product_id' => 1, 'variant_type' => 'رنگ', 'variant_value' => 'نقره‌ای', 'variant_hex' => '#C0C0C0', 'price_modifier' => 500000, 'stock_quantity' => 6],
            ['product_id' => 1, 'variant_type' => 'رنگ', 'variant_value' => 'طلایی', 'variant_hex' => '#FFD700', 'price_modifier' => 800000, 'stock_quantity' => 4],
            ['product_id' => 1, 'variant_type' => 'حافظه', 'variant_value' => '256GB', 'variant_hex' => null, 'price_modifier' => 3000000, 'stock_quantity' => 5],
            ['product_id' => 1, 'variant_type' => 'حافظه', 'variant_value' => '512GB', 'variant_hex' => null, 'price_modifier' => 6000000, 'stock_quantity' => 3],
        
            // گوشی سامسونگ گلکسی S23 - رنگ‌ها
            ['product_id' => 2, 'variant_type' => 'رنگ', 'variant_value' => 'مشکی', 'variant_hex' => '#000000', 'price_modifier' => 0, 'stock_quantity' => 5],
            ['product_id' => 2, 'variant_type' => 'رنگ', 'variant_value' => 'سبز', 'variant_hex' => '#008000', 'price_modifier' => 300000, 'stock_quantity' => 4],
            ['product_id' => 2, 'variant_type' => 'رنگ', 'variant_value' => 'بنفش', 'variant_hex' => '#800080', 'price_modifier' => 400000, 'stock_quantity' => 3],
            ['product_id' => 2, 'variant_type' => 'حافظه', 'variant_value' => '256GB', 'variant_hex' => null, 'price_modifier' => 2500000, 'stock_quantity' => 4],
        
            // لپ تاپ دل XPS 13 - رم و حافظه
            ['product_id' => 3, 'variant_type' => 'RAM', 'variant_value' => '8GB', 'variant_hex' => null, 'price_modifier' => 0, 'stock_quantity' => 4],
            ['product_id' => 3, 'variant_type' => 'RAM', 'variant_value' => '16GB', 'variant_hex' => null, 'price_modifier' => 2000000, 'stock_quantity' => 4],
            ['product_id' => 3, 'variant_type' => 'حافظه', 'variant_value' => '256GB SSD', 'variant_hex' => null, 'price_modifier' => 0, 'stock_quantity' => 3],
            ['product_id' => 3, 'variant_type' => 'حافظه', 'variant_value' => '512GB SSD', 'variant_hex' => null, 'price_modifier' => 1500000, 'stock_quantity' => 4],
            ['product_id' => 3, 'variant_type' => 'حافظه', 'variant_value' => '1TB SSD', 'variant_hex' => null, 'price_modifier' => 3000000, 'stock_quantity' => 3],
        
            // لپ تاپ ایسوس ROG - کارت گرافیک
            ['product_id' => 4, 'variant_type' => 'کارت گرافیک', 'variant_value' => 'RTX 3060', 'variant_hex' => null, 'price_modifier' => -5000000, 'stock_quantity' => 2],
            ['product_id' => 4, 'variant_type' => 'کارت گرافیک', 'variant_value' => 'RTX 3070', 'variant_hex' => null, 'price_modifier' => 0, 'stock_quantity' => 2],
            ['product_id' => 4, 'variant_type' => 'کارت گرافیک', 'variant_value' => 'RTX 3080', 'variant_hex' => null, 'price_modifier' => 7000000, 'stock_quantity' => 1],
        
            // کفش نایک ایر مکس - سایز و رنگ
            ['product_id' => 5, 'variant_type' => 'سایز', 'variant_value' => '38', 'variant_hex' => null, 'price_modifier' => 0, 'stock_quantity' => 8],
            ['product_id' => 5, 'variant_type' => 'سایز', 'variant_value' => '40', 'variant_hex' => null, 'price_modifier' => 0, 'stock_quantity' => 10],
            ['product_id' => 5, 'variant_type' => 'سایز', 'variant_value' => '42', 'variant_hex' => null, 'price_modifier' => 0, 'stock_quantity' => 12],
            ['product_id' => 5, 'variant_type' => 'سایز', 'variant_value' => '44', 'variant_hex' => null, 'price_modifier' => 0, 'stock_quantity' => 8],
            ['product_id' => 5, 'variant_type' => 'رنگ', 'variant_value' => 'سفید', 'variant_hex' => '#FFFFFF', 'price_modifier' => 0, 'stock_quantity' => 15],
            ['product_id' => 5, 'variant_type' => 'رنگ', 'variant_value' => 'مشکی', 'variant_hex' => '#000000', 'price_modifier' => 100000, 'stock_quantity' => 12],
        
            // کفش آدیداس سوپرستار - سایز و رنگ
            ['product_id' => 6, 'variant_type' => 'سایز', 'variant_value' => '36', 'variant_hex' => null, 'price_modifier' => 0, 'stock_quantity' => 8],
            ['product_id' => 6, 'variant_type' => 'سایز', 'variant_value' => '38', 'variant_hex' => null, 'price_modifier' => 0, 'stock_quantity' => 10],
            ['product_id' => 6, 'variant_type' => 'سایز', 'variant_value' => '40', 'variant_hex' => null, 'price_modifier' => 0, 'stock_quantity' => 7],
            ['product_id' => 6, 'variant_type' => 'رنگ', 'variant_value' => 'سفید', 'variant_hex' => '#FFFFFF', 'price_modifier' => 0, 'stock_quantity' => 12],
            ['product_id' => 6, 'variant_type' => 'رنگ', 'variant_value' => 'صورتی', 'variant_hex' => '#FFC0CB', 'price_modifier' => 50000, 'stock_quantity' => 8],
        
            // هدفون سونی - رنگ
            ['product_id' => 7, 'variant_type' => 'رنگ', 'variant_value' => 'مشکی', 'variant_hex' => '#000000', 'price_modifier' => 0, 'stock_quantity' => 10],
            ['product_id' => 7, 'variant_type' => 'رنگ', 'variant_value' => 'نقره‌ای', 'variant_hex' => '#C0C0C0', 'price_modifier' => 200000, 'stock_quantity' => 8],
            ['product_id' => 7, 'variant_type' => 'رنگ', 'variant_value' => 'آبی', 'variant_hex' => '#0000FF', 'price_modifier' => 150000, 'stock_quantity' => 7],
        
            // تلویزیون ال‌جی - اندازه
            ['product_id' => 8, 'variant_type' => 'اندازه', 'variant_value' => '50 اینچ', 'variant_hex' => null, 'price_modifier' => -2000000, 'stock_quantity' => 4],
            ['product_id' => 8, 'variant_type' => 'اندازه', 'variant_value' => '55 اینچ', 'variant_hex' => null, 'price_modifier' => 0, 'stock_quantity' => 4],
            ['product_id' => 8, 'variant_type' => 'اندازه', 'variant_value' => '65 اینچ', 'variant_hex' => null, 'price_modifier' => 5000000, 'stock_quantity' => 2],
        
            // یخچال بوش - رنگ
            ['product_id' => 9, 'variant_type' => 'رنگ', 'variant_value' => 'استیل', 'variant_hex' => '#A0A0A0', 'price_modifier' => 0, 'stock_quantity' => 4],
            ['product_id' => 9, 'variant_type' => 'رنگ', 'variant_value' => 'مشکی', 'variant_hex' => '#000000', 'price_modifier' => 500000, 'stock_quantity' => 2],
            ['product_id' => 9, 'variant_type' => 'رنگ', 'variant_value' => 'سفید', 'variant_hex' => '#FFFFFF', 'price_modifier' => -300000, 'stock_quantity' => 2],
        
            // ماشین لباسشویی فیلیپس - ظرفیت
            ['product_id' => 10, 'variant_type' => 'ظرفیت', 'variant_value' => '6 کیلو', 'variant_hex' => null, 'price_modifier' => -1000000, 'stock_quantity' => 4],
            ['product_id' => 10, 'variant_type' => 'ظرفیت', 'variant_value' => '7 کیلو', 'variant_hex' => null, 'price_modifier' => 0, 'stock_quantity' => 4],
            ['product_id' => 10, 'variant_type' => 'ظرفیت', 'variant_value' => '8 کیلو', 'variant_hex' => null, 'price_modifier' => 1500000, 'stock_quantity' => 4],
        ];

        foreach ($productVariants as $variant) {
            ProductVariant::updateOrCreate(
                [
                    'product_id' => $variant['product_id'],
                    'variant_type' => $variant['variant_type'],
                    'variant_value' => $variant['variant_value']
                ],
                $variant
            );
        }
    }
}
