<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            "title" => 'آپارتمان 80 متری',
            "seller_phone" => '09182221234',
            "private_address" => 'اراک خیابان ملک',
            "user_id" => '1',
            "type" => 'apartment',
            "contract" => 'sale',
            "status" => 'active',
            "price" => '4000000000',
            "built_at" => '1402',
            "case_number" => '0001',
        ]);

        Item::create([
            "title" => 'آپارتمان 100 متری',
            "seller_phone" => '09182221234',
            "private_address" => 'اراک خیابان انبار جهاد',
            "user_id" => '1',
            "type" => 'apartment',
            "contract" => 'sale',
            "status" => 'active',
            "price" => '3500000000',
            "built_at" => '1401',
            "case_number" => '0002',
        ]);

        Item::create([
            "title" => 'خانه شخصی',
            "seller_phone" => '09182221234',
            "private_address" => 'اراک شهرک بعثت',
            "user_id" => '1',
            "type" => 'house',
            "contract" => 'sale',
            "status" => 'active',
            "house_area" => '90',
            "yard_area" => '40',
            "price" => '6000000000',
            "built_at" => '1380',
            "case_number" => '0003',
        ]);

        Item::create([
            "title" => 'آپارتمان 80 متری',
            "seller_phone" => '09182221234',
            "private_address" => 'اراک خیابان ملک',
            "user_id" => '1',
            "type" => 'apartment',
            "contract" => 'rent',
            "status" => 'active',
            "rent" => '4000000',
            "deposit" => '200000000',
            "built_at" => '1395',
            "case_number" => '0004',
        ]);

        Item::create([
            "title" => 'زمین فروشی',
            "seller_phone" => '09182221234',
            "private_address" => 'اراک روستای نظم آباد',
            "user_id" => '1',
            "type" => 'land',
            "area" => '200',
            "contract" => 'sale',
            "status" => 'active',
            "price" => '3000000000',
            "built_at" => '1402',
            "case_number" => '0005',
        ]);

        Item::create([
            "title" => 'مغازه برای اجاره',
            "seller_phone" => '09182221234',
            "private_address" => 'اراک پاساژ گلستان',
            "user_id" => '1',
            "type" => 'shop',
            "contract" => 'sale',
            "area" => '12',
            "status" => 'active',
            "price" => '8000000000',
            "built_at" => '1395',
            "case_number" => '0006',
        ]);

        Item::create([
            "title" => 'ویلا',
            "seller_phone" => '09182221234',
            "private_address" => 'اراک روستای شهرستانک',
            "user_id" => '1',
            "type" => 'villa',
            "contract" => 'sale',
            "status" => 'active',
            "price" => '2000000000',
            "built_at" => '1399',
            "case_number" => '0007',
        ]);
    }
}
