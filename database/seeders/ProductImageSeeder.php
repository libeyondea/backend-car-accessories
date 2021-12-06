<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductImage::insert([
            [
                'product_id' => '1',
                'name' => 'may-phat-2-chan-matiz_1517829888.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => '2',
                'name' => 'may-phat-3giac-morning_1517826126.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => '3',
                'name' => 'may-phat-6pk-2chan-forte-1_1517830134.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => '4',
                'name' => 'may-phat-6pk-4chan-laceti_1517830762.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => '5',
                'name' => 'may-phat-dien-6pk-tucson_1517840929.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
