<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = '{"name":"مشاور املاک","address":"اراک خیابان شهید شیرودی","phone_number":"08633664455","mobile":"09186424055","email":"amlak@gmail.com","image":"customer-assets/images/background/bg_1.jpg","logo":"customer-assets/images/logo.png","telegram":"telegram.com","whatsapp":"whatsapp.com","instagram":"instagram.com"}';
        $value = json_decode($json);

            Config::create([
                "key" => 'real-estate-setting',
                "value" => $value,
            ]);

    }
}
