<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::firstOrCreate(
            ['login'=> 'administrator'],
            ['firstname'=>'Администраторов',
            'middlename'=>'Администраторович',
            'lastname'=>'Администратор',
            'email'=>'admin@ex.com',
            'tel'=>'88005553535',
            'role'=>'admin',
            'password' => \Illuminate\Support\Facades\Hash::make('administrator')],
        );
    }
}

/*
$table->id();
$table->string('firstname');
$table->string('middlename');
$table->string('lastname');
$table->string('email')->unique();
$table->string('login')->unique();
$table->string('password');
$table->string('tel');
$table->string('role')->default('user');
$table->rememberToken();
$table->timestamps();
*/
