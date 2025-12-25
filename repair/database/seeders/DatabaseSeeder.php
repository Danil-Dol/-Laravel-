<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;
use Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Создание статусов
        Status::create(['title' => 'новая']);
        Status::create(['title' => 'в прочессе']);
        Status::create(['title' => 'завершена']);
        Status::create(['title' => 'оTменена']);
        // Создание администратора
        User::create([
            'firstname' => 'Admin',
            'middlename' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@example.com',
            'login' => 'administrator',
            'password' => Hash::make( 'administrator'),
            'tel' => '+7 (999) 999-99-99',
            'role' => 'admin',
        ]);
    }
}
