<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'id' => 1,
                'name' => 'Phụ tùng độg cơ',
                'slug' => 'phu-tung-dog-co',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Phụ tùng gầm',
                'slug' => 'phu-tung-gam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Phụ tùng thân vỏ',
                'slug' => 'phu-tung-than-vo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Phụ tùng điện, điều hòa',
                'slug' => 'phu-tung-dien-dieu-hoa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Phụ tùng khác',
                'slug' => 'phu-tung-khac',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'name' => 'Nội thất và ngoại thất',
                'slug' => 'noi-that-va-ngoai-that',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
