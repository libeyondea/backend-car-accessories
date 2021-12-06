<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'name' => 'Máy phát điện 6PK Hyundai Tucson Model 2005-2009 chính hãng',
                'slug' => 'may-phat-dien-6pk-hyundai-tucson-model-2005-2009-chinh-hang',
                'details' => 'Máy phát điện 6PK Hyundai Tucson Model 2005-2009 chính hãng',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '10',
                'category_id' => '1',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Máy phát điện 6PK Hyundai Santafe nhập khẩu chính hãng',
                'slug' => 'may-phat-dien-6pk-hyundai-santafe-nhap-khau-chinh-hang',
                'details' => 'Máy phát điện 6PK Hyundai Santafe nhập khẩu chính hãng',
                'price' => '2000000',
                'discount' => '0',
                'quantity' => '66',
                'category_id' => '1',
                'brand_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Máy phát điện 6PK 4 chân Daewoo Nubira nhập khẩu chính hãng',
                'slug' => 'may-phat-dien-6pk-4-chan-daewoo-nubira-nhap-khau-chinh-hang',
                'details' => 'Máy phát điện 6PK 4 chân Daewoo Nubira nhập khẩu chính hãng',
                'price' => '1500000',
                'discount' => '0',
                'quantity' => '15',
                'category_id' => '1',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Máy phát điện 4 chân Hyundai Getz nhập khẩu chính hãng',
                'slug' => 'may-phat-dien-4-chan-hyundai-getz-nhap-khau-chinh-hang',
                'details' => 'Máy phát điện 4 chân Hyundai Getz nhập khẩu chính hãng',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '10',
                'category_id' => '1',
                'brand_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Buly máy phát Hyundai Santafe Gold',
                'slug' => 'buly-may-phat-hyundai-santafe-gold',
                'details' => 'Buly máy phát Hyundai Santafe Gold',
                'price' => '3500000',
                'discount' => '0',
                'quantity' => '14',
                'category_id' => '1',
                'brand_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bi may ơ trước Toyota Hiace nhập khẩu chính hãng',
                'slug' => 'bi-may-o-truoc-toyota-hiace-nhap-khau-chinh-hang',
                'details' => '',
                'price' => '1800000',
                'discount' => '0',
                'quantity' => '40',
                'category_id' => '2',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bi may ơ Toyota Hilux Model 2012 nhập khẩu chính hãng',
                'slug' => 'bi-may-o-toyota-hilux-model-2012-nhap-khau-chinh-hang',
                'details' => 'Bi may ơ Toyota Hilux Model 2012 nhập khẩu chính hãng',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '2',
                'brand_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
