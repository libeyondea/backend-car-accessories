<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::insert([
            [
                'name' => 'Toyota',
                'slug' => 'toyota ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Honda',
                'slug' => 'honda',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hyundai',
                'slug' => 'hyundai',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
