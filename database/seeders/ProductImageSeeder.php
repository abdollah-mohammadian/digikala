<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productImages = [
            // گوشی آیفون 14 پرو
            ['product_id' => 1, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/1ff8c2e7cf53c01d6c80869af13edbf1376f9754_1755432196.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'گوشی آیفون 14 پرو - نمای جلو', 'is_main' => true],
            ['product_id' => 1, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/05c98e60b480edc893cc9f61eb00ee1838276aa1_1755432194.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'گوشی آیفون 14 پرو - نمای پشت', 'is_main' => false],
            ['product_id' => 1, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/512380c1fa22fe48af7a079994e492033c6b8265_1755432195.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'گوشی آیفون 14 پرو - نمای کناری', 'is_main' => false],
        
            // گوشی سامسونگ گلکسی S23
            ['product_id' => 2, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/c23b49b0be1c4ae5b2a3d7a3281d2f1731065243_1726037574.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'گوشی سامسونگ گلکسی S23 - نمایشگر', 'is_main' => true],
            ['product_id' => 2, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/df8fc9a87cfc58d9eee35c6b6a1c4f4e0bf89b17_1727515386.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'گوشی سامسونگ گلکسی S23 - دوربین', 'is_main' => false],
            ['product_id' => 2, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/cac5338408efad4d09ce2c1df8e85b8845ff84f2_1705751970.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'گوشی سامسونگ گلکسی S23 - رنگ بنفش', 'is_main' => false],
        
            // لپ تاپ دل XPS 13
            ['product_id' => 3, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/3222d5d2a61f3c9a44da0cace1b1c4cab4fc6610_1736273069.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'لپ تاپ دل XPS 13 - نمای باز', 'is_main' => true],
            ['product_id' => 3, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/8011cf49fa0478c276c00ee0e7ecbe4070b72d27_1736273052.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'لپ تاپ دل XPS 13 - صفحه کلید', 'is_main' => false],
            ['product_id' => 3, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/960d9bbc51609cf653cf16c33341cc151fa87ef9_1736273054.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'لپ تاپ دل XPS 13 - پورت‌ها', 'is_main' => false],
        
            // لپ تاپ ایسوس ROG
            ['product_id' => 4, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/0489d53dc0cd02a66f6858dd7f7b84314f465c91_1753630282.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'لپ تاپ ایسوس ROG گیمینگ - نمای اصلی', 'is_main' => true],
            ['product_id' => 4, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/6062caa20e9125c127f154d114c8027e9dd186c5_1753630283.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'لپ تاپ ایسوس ROG - کیبورد RGB', 'is_main' => false],
            ['product_id' => 4, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/ef873b1ccc5f822595da881feb22096ec0eff9e6_1753630283.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'لپ تاپ ایسوس ROG - کارت گرافیک', 'is_main' => false],
        
            // کفش نایک ایر مکس
            ['product_id' => 5, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/b91f6a7d3604963780b576f57059af19e3f8b26e_1699895704.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'کفش نایک ایر مکس مردانه - نمای جلو', 'is_main' => true],
            ['product_id' => 5, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/9844045d6d982f98bbb308cca42232181e59fe85_1699895712.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'کفش نایک ایر مکس - کناره', 'is_main' => false],
            ['product_id' => 5, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/acf89a821b3a1286cea70d2b976ef2fa1974f436_1699895709.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'کفش نایک ایر مکس - کفی', 'is_main' => false],
        
            // کفش آدیداس سوپرستار
            ['product_id' => 6, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/966da0f5c3b32f0ed13746c497ebdd52e8613446_1673781086.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'کفش آدیداس سوپرستار زنانه - طراحی کلاسیک', 'is_main' => true],
            ['product_id' => 6, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/731842cb053a723c8fa81277acdcfcfbc300cf6d_1673781045.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'کفش آدیداس سوپرستار - پشت', 'is_main' => false],
            ['product_id' => 6, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/5ccbcebac2dc4f1640211745c7df7cc915709358_1673781062.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'کفش آدیداس سوپرستار - کنار', 'is_main' => false],
        
            // هدفون سونی WH-1000XM5
            ['product_id' => 7, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/f51a3f59e354f8d34f0c33d3c6d8303272ca8ee5_1709479315.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'هدفون بی‌سیم سونی WH-1000XM5 - حالت بسته', 'is_main' => true],
            ['product_id' => 7, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/24478dddd9ad29662ad8a4e2135223c2be8627a1_1695469170.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'هدفون سونی - حالت استفاده', 'is_main' => false],
            ['product_id' => 7, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/59cc947c4efa7e2093677376ab81258af5234546_1695469170.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'هدفون سونی - جعبه و لوازم', 'is_main' => false],
        
            // تلویزیون ال‌جی 55 اینچ
            ['product_id' => 8, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/1a85d91de37366c4f09309be0087c9281f3e7626_1749471101.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'تلویزیون ال‌جی 55 اینچ 4K - نمای اصلی', 'is_main' => true],
            ['product_id' => 8, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/2c9f3ea5c250f2dc902ae83a0f2a4584e71e5b2b_1749471101.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'تلویزیون ال‌جی - پایه', 'is_main' => false],
            ['product_id' => 8, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/e8dbe23f7fcb549ade2430bf4c6e75bd1c4f0ebf_1749471100.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'تلویزیون ال‌جی - پورت‌های پشت', 'is_main' => false],
        
            // یخچال بوش سری 6
            ['product_id' => 9, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/9c24c24dca8bf33d846d8111857cf2f49af7d70b_1752559220.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'یخچال بوش سری 6 - نمای جلو', 'is_main' => true],
            ['product_id' => 9, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/7a090846ad6514e09096fa39a15f680e60f884e0_1752559220.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'یخچال بوش - فضای داخلی', 'is_main' => false],
            ['product_id' => 9, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/92648261efd88c00a76073ebed05ad0abb09fc87_1752559222.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'یخچال بوش - فریزر', 'is_main' => false],
        
            // ماشین لباسشویی فیلیپس
            ['product_id' => 10, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/3eb2e5554f4239f151387328e316a261bccb2911_1754244116.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'ماشین لباسشویی فیلیپس 7 کیلو - نمای جلو', 'is_main' => true],
            ['product_id' => 10, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/7e24af55343ea8ac2aaceb7c115e320d555ef486_1668944618.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'ماشین لباسشویی فیلیپس - پنل کنترل', 'is_main' => false],
            ['product_id' => 10, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/5aa1cc448a3950d5169001ba0e74ec2d078900cc_1668944620.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'ماشین لباسشویی فیلیپس - درب', 'is_main' => false],
        
            // گوشی هواوی P50
            ['product_id' => 15, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/5a702e9e6ce8868669fa2e66aedc1cf8252f1c30_1737877500.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'گوشی هواوی P50 - دوربین پیشرفته', 'is_main' => true],
            ['product_id' => 15, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/9e1ae0be225b86a11b699d87248546bed92dee1d_1726066131.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'گوشی هواوی P50 - نمای جلو', 'is_main' => false],
            ['product_id' => 15, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/f06acb0f48b3de6950347b238893f07f5b9a5cbe_1726066065.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'گوشی هواوی P50 - نمای پشت', 'is_main' => false],
        
            // گوشی شیائومی Mi 12
            ['product_id' => 16, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/94f47ca3174d6b449d8bd69a354d321ac0f2fb8d_1738135885.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'گوشی شیائومی Mi 12 - صفحه نمایش AMOLED', 'is_main' => true],
            ['product_id' => 16, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/ac968b348f3487b42305db15797360806e6e20d9_1736816072.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'گوشی شیائومی Mi 12 - طراحی مدرن', 'is_main' => false],
            ['product_id' => 16, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/27646b7de38b78edd14a0203dd9f2e4ceeebded8_1736816073.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'گوشی شیائومی - طراحی مدرن', 'is_main' => false],
        
            // تلویزیون سونی 65 اینچ
            ['product_id' => 17, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/42e1a1cdafb52fadcc79b478ed5132d34468f33d_1755771643.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'تلویزیون سونی 65 اینچ 4K - HDR', 'is_main' => true],
            ['product_id' => 17, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/1ca498fe911b4d9f86a0160948c4674c082707ad_1748873008.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'تلویزیون سونی - پایه شیک', 'is_main' => false],
            ['product_id' => 17, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/27370d2a28397f4ae5015fe62cd5a07483006c0a_1745933495.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'تلویزیون سونی -  شیک', 'is_main' => false],
        
            // ساعت هوشمند هواوی
            ['product_id' => 32, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/6b328aee3c8f0de3aa4827f6741459ac38d28321_1754246564.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'ساعت هوشمند هواوی Watch GT 3 - صفحه نمایش', 'is_main' => true],
            ['product_id' => 32, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/848512b753ac2c88d18a6eff9cb3008dbe85ab59_1741547980.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'ساعت هواوی - مچ دست', 'is_main' => false],
            ['product_id' => 32, 'image_url' => 'https://dkstatics-public.digikala.com/digikala-products/4eff4b2036d9665b9aa1df1778249b3a11688a93_1636723268.jpg?x-oss-process=image/resize,m_lfit,h_800,w_800/format,webp/quality,q_90', 'alt_text' => 'ساعت هواوی - مچ دست', 'is_main' => false],
        ];

        foreach ($productImages as $image) {
            ProductImage::updateOrCreate([
                'product_id' => $image['product_id'],
                'alt_text' => $image['alt_text']
            ],
                $image
            );
        }
    }
}
