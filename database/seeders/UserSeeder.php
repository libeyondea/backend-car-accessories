<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'first_name' => 'Thuc',
            'last_name' => 'Nguyen',
            'avatar' => 'user.png',
            'user_name' => 'libeyondea',
            'email' => 'libeyondea@gmail.com',
            'password' => bcrypt('libeyondea'),
            'phone_number' => '0336077131',
            'address' => 'HCM City',
            'gender' => 'male',
            'type' => 'admin'
        ]);
    }
}
