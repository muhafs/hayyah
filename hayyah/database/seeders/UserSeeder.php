<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Super Admin
        User::create([
            'name' => 'Muhamad',
            'email' => 'm@admin.com',
            'username' => 'mhmdhdyh',
            'email_verified_at' => '2022-08-26 12:44:41',
            'password' => bcrypt('123123123'),
            'role' => 'ADMIN'
        ]);

        // User
        User::create([
            'name' => 'Fira',
            'email' => 'f@user.com',
            'username' => 'firasiswari',
            'email_verified_at' => '2022-08-26 12:44:41',
            'password' => bcrypt('123123123'),
            'role' => 'USER'
        ]);
    }
}
