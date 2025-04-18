<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    private static string $password;

    /**php artisan tinker
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => static::$password ??= Hash::make('admin'),
            'role' => 'admin',
        ]);

        User::insert(
        [
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => static::$password ??= Hash::make('user'),
            'role' => 'user',
        ]
        );
    }
}
