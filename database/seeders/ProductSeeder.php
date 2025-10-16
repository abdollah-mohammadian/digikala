<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'گوشی آیفون 14 پرو',
                'brand_id' => 3, // Apple
                'category_id' => 2, // موبایل
                'description' => 'گوشی آیفون 14 پرو با حافظه 128GB و دوربین پیشرفته',
                'price' => 45000000,
                'quantity' => 20,
                'delivery_amount' => 50000,
            ],
            [
                'name' => 'گوشی سامسونگ گلکسی S23',
                'brand_id' => 4, // Samsung
                'category_id' => 2, // موبایل
                'description' => 'گوشی سامسونگ گلکسی S23 با نمایشگر Dynamic AMOLED و باتری 3900mAh',
                'price' => 40000000,
                'quantity' => 15,
                'delivery_amount' => 50000,
            ],
            [
                'name' => 'لپ تاپ دل XPS 13',
                'brand_id' => 5, // Dell
                'category_id' => 3, // لپ تاپ
                'description' => 'لپ تاپ Dell XPS 13 با پردازنده Intel i7 و 16GB RAM',
                'price' => 60000000,
                'quantity' => 10,
                'delivery_amount' => 70000,
            ],
            [
                'name' => 'لپ تاپ ایسوس ROG',
                'brand_id' => 6, // Asus
                'category_id' => 3, // لپ تاپ
                'description' => 'لپ تاپ گیمینگ ایسوس ROG با کارت گرافیک NVIDIA RTX 3070',
                'price' => 85000000,
                'quantity' => 5,
                'delivery_amount' => 70000,
            ],
            [
                'name' => 'کفش نایک ایر مکس',
                'brand_id' => 7, // Nike
                'category_id' => 8, // مد و پوشاک
                'description' => 'کفش نایک ایر مکس مردانه با طراحی اسپرت و راحت',
                'price' => 3500000,
                'quantity' => 50,
                'delivery_amount' => 30000,
            ],
            [
                'name' => 'کفش آدیداس سوپرستار',
                'brand_id' => 8, // Adidas
                'category_id' => 8, // مد و پوشاک
                'description' => 'کفش آدیداس سوپرستار زنانه با طراحی کلاسیک و راحت',
                'price' => 3200000,
                'quantity' => 40,
                'delivery_amount' => 30000,
            ],
            [
                'name' => 'هدفون بی‌سیم سونی WH-1000XM5',
                'brand_id' => 12, // Sony
                'category_id' => 1, // کالای دیجیتال
                'description' => 'هدفون بی‌سیم با نویز کنسلینگ عالی و باتری طولانی مدت',
                'price' => 12000000,
                'quantity' => 25,
                'delivery_amount' => 40000,
            ],
            [
                'name' => 'تلویزیون ال‌جی 55 اینچ 4K',
                'brand_id' => 11, // LG
                'category_id' => 1, // کالای دیجیتال
                'description' => 'تلویزیون ال‌جی 55 اینچ با کیفیت تصویر 4K و قابلیت اسمارت',
                'price' => 18000000,
                'quantity' => 10,
                'delivery_amount' => 60000,
            ],
            [
                'name' => 'یخچال بوش سری 6',
                'brand_id' => 10, // Bosch
                'category_id' => 6, // لوازم خانگی برقی
                'description' => 'یخچال بوش با سیستم سرمایش چندگانه و مصرف انرژی کم',
                'price' => 22000000,
                'quantity' => 8,
                'delivery_amount' => 70000,
            ],
            [
                'name' => 'ماشین لباسشویی فیلیپس 7 کیلو',
                'brand_id' => 11, // Philips
                'category_id' => 6, // لوازم خانگی برقی
                'description' => 'ماشین لباسشویی فیلیپس با برنامه‌های متعدد شستشو',
                'price' => 14000000,
                'quantity' => 12,
                'delivery_amount' => 50000,
            ],
            [
                'name' => 'کتاب آموزش PHP',
                'brand_id' => 16, // کتاب و هنر، فرضی
                'category_id' => 13, // کتاب و هنر
                'description' => 'کتاب کامل و جامع آموزش PHP برای مبتدیان و حرفه‌ای‌ها',
                'price' => 150000,
                'quantity' => 100,
                'delivery_amount' => 10000,
            ],
            [
                'name' => 'دوچرخه کوهستان مارک جیبی',
                'brand_id' => 15, // Gibbi
                'category_id' => 14, // ورزش و سفر
                'description' => 'دوچرخه کوهستان حرفه‌ای با سیستم تعلیق کامل',
                'price' => 6000000,
                'quantity' => 20,
                'delivery_amount' => 40000,
            ],
            [
                'name' => 'اسباب بازی لگو سری کلاسیک',
                'brand_id' => 15, // Gibbi
                'category_id' => 17, // اسباب بازی کودک و نوزاد
                'description' => 'لگو سری کلاسیک با قطعات متنوع برای خلاقیت کودکان',
                'price' => 500000,
                'quantity' => 60,
                'delivery_amount' => 20000,
            ],
            [
                'name' => 'کارت هدیه دیجی‌کالا 100 هزار تومانی',
                'brand_id' => 16, // فرضی
                'category_id' => 15, // کارت هدیه و گیفت کارت
                'description' => 'کارت هدیه 100 هزار تومانی قابل استفاده در دیجی‌کالا',
                'price' => 100000,
                'quantity' => 200,
                'delivery_amount' => 0,
            ],
            [
                'name' => 'گوشی هواوی P50',
                'brand_id' => 9, // Huawei
                'category_id' => 2, // موبایل
                'description' => 'گوشی هواوی P50 با دوربین 50 مگاپیکسلی و باتری 4100 میلی‌آمپرساعت',
                'price' => 25000000,
                'quantity' => 30,
                'delivery_amount' => 40000,
            ],
            [
                'name' => 'گوشی شیائومی Mi 12',
                'brand_id' => 10, // Xiaomi
                'category_id' => 2, // موبایل
                'description' => 'گوشی شیائومی Mi 12 با پردازنده Snapdragon 8 و صفحه نمایش AMOLED',
                'price' => 22000000,
                'quantity' => 25,
                'delivery_amount' => 40000,
            ],
            [
                'name' => 'تلویزیون سونی 65 اینچ 4K',
                'brand_id' => 12, // Sony
                'category_id' => 1, // کالای دیجیتال
                'description' => 'تلویزیون سونی 65 اینچ با کیفیت تصویر 4K و فناوری HDR',
                'price' => 30000000,
                'quantity' => 12,
                'delivery_amount' => 60000,
            ],
            [
                'name' => 'تلویزیون ال‌جی 50 اینچ OLED',
                'brand_id' => 11, // LG
                'category_id' => 1, // کالای دیجیتال
                'description' => 'تلویزیون ال‌جی 50 اینچ OLED با رنگ‌های زنده و زاویه دید گسترده',
                'price' => 28000000,
                'quantity' => 15,
                'delivery_amount' => 60000,
            ],
            [
                'name' => 'یخچال بوش مدل X200',
                'brand_id' => 10, // Bosch
                'category_id' => 6, // لوازم خانگی برقی
                'description' => 'یخچال بوش مدل X200 با سیستم سرمایش هوشمند و مصرف انرژی کم',
                'price' => 21000000,
                'quantity' => 8,
                'delivery_amount' => 70000,
            ],
            [
                'name' => 'ماشین لباسشویی فیلیپس 8 کیلو',
                'brand_id' => 11, // Philips
                'category_id' => 6, // لوازم خانگی برقی
                'description' => 'ماشین لباسشویی فیلیپس با برنامه‌های متعدد شستشو و خشک‌کن سریع',
                'price' => 15000000,
                'quantity' => 10,
                'delivery_amount' => 50000,
            ],
            [
                'name' => 'کفش نایک رنر پرو',
                'brand_id' => 7, // Nike
                'category_id' => 8, // مد و پوشاک
                'description' => 'کفش نایک رنر پرو برای دویدن حرفه‌ای با کفی سبک و مقاوم',
                'price' => 3700000,
                'quantity' => 35,
                'delivery_amount' => 30000,
            ],
            [
                'name' => 'کفش آدیداس گازیل',
                'brand_id' => 8, // Adidas
                'category_id' => 8, // مد و پوشاک
                'description' => 'کفش آدیداس گازیل با طراحی کلاسیک و مناسب استفاده روزمره',
                'price' => 3300000,
                'quantity' => 30,
                'delivery_amount' => 30000,
            ],
            [
                'name' => 'دوچرخه کوهستان جیبی مدل XT',
                'brand_id' => 15, // Gibbi
                'category_id' => 14, // ورزش و سفر
                'description' => 'دوچرخه کوهستان مدل XT با سیستم تعلیق کامل و ترمز دیسکی',
                'price' => 6500000,
                'quantity' => 20,
                'delivery_amount' => 40000,
            ],
            [
                'name' => 'اسباب بازی لگو آموزش خلاقیت',
                'brand_id' => 15, // Gibbi
                'category_id' => 17, // اسباب بازی کودک و نوزاد
                'description' => 'لگو آموزشی برای افزایش خلاقیت و هوش کودکان',
                'price' => 520000,
                'quantity' => 60,
                'delivery_amount' => 20000,
            ],
            [
                'name' => 'هدفون بلوتوث JBL Tune 510BT',
                'brand_id' => 12, // Sony
                'category_id' => 1, // کالای دیجیتال
                'description' => 'هدفون بلوتوث با کیفیت صدای عالی و باتری طولانی مدت',
                'price' => 1200000,
                'quantity' => 50,
                'delivery_amount' => 20000,
            ],
            [
                'name' => 'اسپیکر بلوتوث Bose SoundLink',
                'brand_id' => 12, // Sony
                'category_id' => 1,
                'description' => 'اسپیکر قابل حمل با صدای قدرتمند و باس عالی',
                'price' => 5500000,
                'quantity' => 30,
                'delivery_amount' => 40000,
            ],
            [
                'name' => 'کتاب طراحی وب با Laravel',
                'brand_id' => 16, // کتاب و هنر، فرضی
                'category_id' => 13, // کتاب و هنر
                'description' => 'کتاب آموزشی طراحی وب با فریم‌ورک لاراول، مناسب مبتدی تا حرفه‌ای',
                'price' => 200000,
                'quantity' => 100,
                'delivery_amount' => 10000,
            ],
            [
                'name' => 'کوله پشتی کوهنوردی NatureHike 40L',
                'brand_id' => 15, // Gibbi
                'category_id' => 14, // ورزش و سفر
                'description' => 'کوله پشتی 40 لیتری برای کوهنوردی و سفرهای کوتاه با طراحی ارگونومیک',
                'price' => 950000,
                'quantity' => 25,
                'delivery_amount' => 25000,
            ],
            [
                'name' => 'چراغ مطالعه LED رومیزی Xiaomi',
                'brand_id' => 10, // Xiaomi
                'category_id' => 4, // خانه و آشپزخانه
                'description' => 'چراغ مطالعه LED با شدت نور قابل تنظیم و طراحی مدرن',
                'price' => 350000,
                'quantity' => 40,
                'delivery_amount' => 15000,
            ],
            [
                'name' => 'ماوس گیمینگ Logitech G502',
                'brand_id' => 12, // Sony
                'category_id' => 1, // کالای دیجیتال
                'description' => 'ماوس گیمینگ با سنسور دقیق و کلیدهای قابل برنامه‌ریزی',
                'price' => 1200000,
                'quantity' => 60,
                'delivery_amount' => 15000,
            ],
            [
                'name' => 'ساعت هوشمند Huawei Watch GT 3',
                'brand_id' => 9, // Huawei
                'category_id' => 1,
                'description' => 'ساعت هوشمند با GPS داخلی و مانیتور سلامت 24 ساعته',
                'price' => 3500000,
                'quantity' => 30,
                'delivery_amount' => 20000,
            ],
            [
                'name' => 'جاروبرقی بی‌سیم Dyson V11',
                'brand_id' => 11, // LG
                'category_id' => 6, // لوازم خانگی برقی
                'description' => 'جاروبرقی قدرتمند بی‌سیم با باتری طولانی و فیلتر HEPA',
                'price' => 18000000,
                'quantity' => 12,
                'delivery_amount' => 50000,
            ],
            [
                'name' => 'کتاب مهارت‌های برنامه‌نویسی Python',
                'brand_id' => 16,
                'category_id' => 13,
                'description' => 'آموزش کامل زبان Python از مبتدی تا پیشرفته',
                'price' => 180000,
                'quantity' => 80,
                'delivery_amount' => 10000,
            ],
            [
                'name' => 'اسباب بازی آموزشی Smart Baby Blocks',
                'brand_id' => 15,
                'category_id' => 17,
                'description' => 'اسباب بازی آموزشی برای خردسالان جهت تقویت مهارت‌های ذهنی',
                'price' => 450000,
                'quantity' => 50,
                'delivery_amount' => 20000,
            ],
        ];

        foreach ($products as $p) {
            Product::updateOrCreate(
                ['name' => $p['name']],
                $p
            );
        }
    }
}
