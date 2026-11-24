<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@bookverse.com'],
            [
                'name' => 'BookVerse Admin',
                'phone_number' => '0900000001',
                'password' => 'Admin@123',
                'role' => 3,
                'account_status' => 1,
            ]
        );

        User::updateOrCreate(
            ['email' => 'staff@bookverse.com'],
            [
                'name' => 'BookVerse Staff',
                'phone_number' => '0900000002',
                'password' => 'Staff@123',
                'role' => 2,
                'account_status' => 1,
            ]
        );

        User::updateOrCreate(
            ['email' => 'customer@bookverse.com'],
            [
                'name' => 'BookVerse Customer',
                'phone_number' => '0900000003',
                'password' => 'Customer@123',
                'role' => 1,
                'account_status' => 1,
            ]
        );
    }
}
