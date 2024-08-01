<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $adminUser = new User();
    $adminUser->name = 'Admin';
    $adminUser->email = 'admin@example.com';
    $adminUser->password = bcrypt('admin12345');
    $adminUser->usertype = 'admin'; // assuming you have a role column in your users table
    $adminUser->save();
    }
}