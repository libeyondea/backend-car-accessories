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
                'id' => 1,
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
                'id' => 2,
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
                'id' => 3,
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
                'id' => 4,
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
                'id' => 5,
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
                'id' => 6,
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
                'id' => 7,
                'name' => 'Bi may ơ Toyota Hilux Model 2012 nhập khẩu chính hãng',
                'slug' => 'bi-may-o-toyota-hilux-model-2012-nhap-khau-chinh-hang',
                'details' => 'Bi may ơ Toyota Hilux Model 2012 nhập khẩu chính hãng',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '2',
                'brand_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'name' => 'Tổng phanh ABS Kia Morning nhập khẩu chính hãng Hàn',
                'slug' => 'Tổng phanh ABS Kia Morning nhập khẩu chính hãng Hàn',
                'details' => 'Tổng phanh ABS Kia Morning nhập khẩu chính hãng Hàn',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '2',
                'brand_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'name' => 'Bi may ơ sau Hyundai Getz nhập khẩu chính hãng Hàn',
                'slug' => 'Bi may ơ sau Hyundai Getz nhập khẩu chính hãng Hàn',
                'details' => 'Bi may ơ sau Hyundai Getz nhập khẩu chính hãng Hàn',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '2',
                'brand_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'name' => 'Phớt láp Hyundai Santafe Model 2007',
                'slug' => 'Phớt láp Hyundai Santafe Model 2007',
                'details' => 'Phớt láp Hyundai Santafe Model 2007',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '2',
                'brand_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'name' => 'Dây con Kia New Morning',
                'slug' => 'Dây con Kia New Morning',
                'details' => 'Dây con Kia New Morningv',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '2',
                'brand_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,
                'name' => 'Bi tê Kia Morning',
                'slug' => 'Bi tê Kia Morning',
                'details' => 'Bi tê Kia Morning',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '2',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 13,
                'name' => 'Bi tê Mazda 323',
                'slug' => 'Bi tê Mazda 323',
                'details' => 'Bi tê Mazda 323',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '2',
                'brand_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 14,
                'name' => 'Bi tê Daewoo Gentra 1.2',
                'slug' => 'Bi tê Daewoo Gentra 1.2',
                'details' => 'Bi tê Daewoo Gentra 1.2',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '2',
                'brand_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 15,
                'name' => 'Rotuyn càng A van Kia Morning',
                'slug' => 'Rotuyn càng A van Kia Morning',
                'details' => 'Rotuyn càng A van Kia Morning',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '2',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 16,
                'name' => 'Rotuyn Cân bằng nhựa trước Daewoo Laceti CDX',
                'slug' => 'Rotuyn Cân bằng nhựa trước Daewoo Laceti CDX',
                'details' => 'Rotuyn Cân bằng nhựa trước Daewoo Laceti CDX',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '2',
                'brand_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 17,
                'name' => 'Rotuyn cân bằng trước Hyundai Getz',
                'slug' => 'Rotuyn cân bằng trước Hyundai Getz',
                'details' => 'Rotuyn cân bằng trước Hyundai Getz',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '2',
                'brand_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 18,
                'name' => 'Thanh cân bằng trước BMW X5',
                'slug' => 'Thanh cân bằng trước BMW X5',
                'details' => 'Thanh cân bằng trước BMW X5',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '2',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 19,
                'name' => 'Thanh cân bằng trước Toyota Vios E, Yaris Model 2007',
                'slug' => 'Thanh cân bằng trước Toyota Vios E, Yaris Model 2007',
                'details' => 'Thanh cân bằng trước Toyota Vios E, Yaris Model 2007',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '2',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 20,
                'name' => 'Thanh cân bằng trước Hyundai Verna Model 2008',
                'slug' => 'Thanh cân bằng trước Hyundai Verna Model 2008',
                'details' => 'Thanh cân bằng trước Hyundai Verna Model 2008',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '2',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // PHU TUNG THAN VO
            [
                'id' => 21,
                'name' => 'Mô tơ nâng kính trái Hyundai Santafe Model 2007 chính',
                'slug' => 'Mô tơ nâng kính trái Hyundai Santafe Model 2007 chính',
                'details' => 'Mô tơ nâng kính trái Hyundai Santafe Model 2007 chính',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 22,
                'name' => 'Mô tơ nâng kính trái Kia Forte nhập khẩu chính hãng Hàn',
                'slug' => 'Mô tơ nâng kính trái Kia Forte nhập khẩu chính hãng Hàn',
                'details' => 'Mô tơ nâng kính trái Kia Forte nhập khẩu chính hãng Hàn',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 23,
                'name' => 'Mô tơ nâng kính sau trái Daewoo Lacetti nhập khẩu',
                'slug' => 'Mô tơ nâng kính sau trái Daewoo Lacetti nhập khẩu',
                'details' => 'Mô tơ nâng kính sau trái Daewoo Lacetti nhập khẩu',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 24,
                'name' => 'Mô tơ nâng kính sau trái Daewoo Gentra chính hãng',
                'slug' => 'Mô tơ nâng kính sau trái Daewoo Gentra chính hãng',
                'details' => 'Mô tơ nâng kính sau trái Daewoo Gentra chính hãng',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 25,
                'name' => 'Mô tơ nâng kính sau phải Kia Morning chính hãng Hàn',
                'slug' => 'Mô tơ nâng kính sau phải Kia Morning chính hãng Hàn',
                'details' => 'Mô tơ nâng kính sau phải Kia Morning chính hãng Hàn',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 26,
                'name' => 'Mô tơ nâng kính sau phải Daewoo Lacetti',
                'slug' => 'Mô tơ nâng kính sau phải Daewoo Lacetti',
                'details' => 'Mô tơ nâng kính sau phải Daewoo Lacetti',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 27,
                'name' => 'Mô tơ nâng kính sau phải 7 răng 2 giắc Toyota Camry',
                'slug' => 'Mô tơ nâng kính sau phải 7 răng 2 giắc Toyota Camry',
                'details' => 'Mô tơ nâng kính sau phải 7 răng 2 giắc Toyota Camry',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 28,
                'name' => 'Mô tơ nâng kính phải Hyundai Santafe Model 2007',
                'slug' => 'Mô tơ nâng kính phải Hyundai Santafe Model 2007',
                'details' => 'Mô tơ nâng kính phải Hyundai Santafe Model 2007',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 29,
                'name' => 'Mô tơ nâng kính 6 giắc Kia Morning Model 2012',
                'slug' => 'Mô tơ nâng kính 6 giắc Kia Morning Model 2012',
                'details' => 'Mô tơ nâng kính 6 giắc Kia Morning Model 2012',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 30,
                'name' => 'Mô tơ nâng kính trước trái Hyundai Santafe Model 2007',
                'slug' => 'Mô tơ nâng kính trước trái Hyundai Santafe Model 2007',
                'details' => 'Mô tơ nâng kính trước trái Hyundai Santafe Model 2007',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 31,
                'name' => 'Hạn chế cánh cửa Daewoo Matiz',
                'slug' => 'Hạn chế cánh cửa Daewoo Matiz',
                'details' => 'Hạn chế cánh cửa Daewoo Matiz',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 32,
                'name' => 'Tai cài tai xe Kia Morning Model 2012',
                'slug' => 'Tai cài tai xe Kia Morning Model 2012',
                'details' => 'Tai cài tai xe Kia Morning Model 2012',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 33,
                'name' => 'Tay mở của ngoài Daewoo Matiz',
                'slug' => 'Tay mở của ngoài Daewoo Matiz',
                'details' => 'Tay mở của ngoài Daewoo Matiz',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 34,
                'name' => 'Tay mở của ngoài Deawoo Gentra',
                'slug' => 'Tay mở của ngoài Deawoo Gentra',
                'details' => 'Tay mở của ngoài Deawoo Gentra',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 35,
                'name' => 'Tay mở của trong Hyundai Getz',
                'slug' => 'Tay mở của trong Hyundai Getz',
                'details' => 'Tay mở của trong Hyundai Getz',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 36,
                'name' => 'Ốp mặt calang độ kiểu TRD Toyota Fortuner 2016',
                'slug' => 'Ốp mặt calang độ kiểu TRD Toyota Fortuner 2016',
                'details' => 'Ốp mặt calang độ kiểu TRD Toyota Fortuner 2016',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 37,
                'name' => 'Mặt Ca Lăng Toyota Camry Model 2010',
                'slug' => 'Mặt Ca Lăng Toyota Camry Model 2010',
                'details' => 'Mặt Ca Lăng Toyota Camry Model 2010',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 38,
                'name' => 'Mặt Ca Lăng Chevrolet Aveo Model 2008',
                'slug' => 'Mặt Ca Lăng Chevrolet Aveo Model 2008',
                'details' => 'Mặt Ca Lăng Chevrolet Aveo Model 2008',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 39,
                'name' => 'Mặt Ca Lăng Toyota Fortunner Model 2010',
                'slug' => 'Mặt Ca Lăng Toyota Fortunner Model 2010',
                'details' => 'Mặt Ca Lăng Toyota Fortunner Model 2010',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 40,
                'name' => 'Ba đờ sốc (cản) trước xe BMW 325i năm 2004 chính hãng',
                'slug' => 'Ba đờ sốc (cản) trước xe BMW 325i năm 2004 chính hãng',
                'details' => 'Ba đờ sốc (cản) trước xe BMW 325i năm 2004 chính hãng',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '3',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // PHU TUNG DIEN, DH
            [
                'id' => 41,
                'name' => 'LỐC ĐIỀU HÒA MÁY XĂNG 10PA17C CARENS',
                'slug' => 'LỐC ĐIỀU HÒA MÁY XĂNG 10PA17C CARENS',
                'details' => 'LỐC ĐIỀU HÒA MÁY XĂNG 10PA17C CARENS',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '4',
                'brand_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 42,
                'name' => 'LỐC ĐIỀU HÒA ELANTRA I30 AVANTE',
                'slug' => 'LỐC ĐIỀU HÒA ELANTRA I30 AVANTE',
                'details' => 'LỐC ĐIỀU HÒA ELANTRA I30 AVANTE',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '4',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 43,
                'name' => 'LỐC ĐIỀU HOÀ HS15 4PK SONATA EF',
                'slug' => 'LỐC ĐIỀU HOÀ HS15 4PK SONATA EFg',
                'details' => 'LỐC ĐIỀU HOÀ HS15 4PK SONATA EF',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '4',
                'brand_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 44,
                'name' => 'LỐC ĐIỀU HÒA MÁY DẦU CARENS 2.0',
                'slug' => 'LỐC ĐIỀU HÒA MÁY DẦU CARENS 2.0',
                'details' => 'LỐC ĐIỀU HÒA MÁY DẦU CARENS 2.0',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '4',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 45,
                'name' => 'LỐC ĐIỀU HÒA 7PK FORTUNER',
                'slug' => 'LỐC ĐIỀU HÒA 7PK FORTUNER',
                'details' => 'LỐC ĐIỀU HÒA 7PK FORTUNER',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '4',
                'brand_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 46,
                'name' => 'LỐC ĐIỀU HÒA RIO 2015',
                'slug' => 'LỐC ĐIỀU HÒA RIO 2015',
                'details' => 'LỐC ĐIỀU HÒA RIO 2015',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '4',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 47,
                'name' => 'LỐC ĐIỀU HÒA RANGER 2015',
                'slug' => 'LỐC ĐIỀU HÒA RANGER 2015',
                'details' => 'LỐC ĐIỀU HÒA RANGER 2015',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '4',
                'brand_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 48,
                'name' => 'LỐC ĐIỀU HÒA CRETA 2016',
                'slug' => 'LỐC ĐIỀU HÒA CRETA 2016',
                'details' => 'LỐC ĐIỀU HÒA CRETA 2016',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '4',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 49,
                'name' => 'LỐC ĐIỀU HÒA CAMRY 2014',
                'slug' => 'LỐC ĐIỀU HÒA CAMRY 2014',
                'details' => 'LỐC ĐIỀU HÒA CAMRY 2014',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '4',
                'brand_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 50,
                'name' => 'MÔ TƠ QUẠT KÉT NƯỚC GETZ',
                'slug' => 'MÔ TƠ QUẠT KÉT NƯỚC GETZ',
                'details' => 'MÔ TƠ QUẠT KÉT NƯỚC GETZ',
                'price' => '1000000',
                'discount' => '0',
                'quantity' => '20',
                'category_id' => '4',
                'brand_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
