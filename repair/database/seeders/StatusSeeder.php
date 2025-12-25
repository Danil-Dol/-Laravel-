<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = ['Новая','В процессе','Завершена', 'Отменена'];

        foreach ($titles as $title)
        {
            \App\Models\Status::firstOrCreate(['title' => '$title']);
        }
    }
}
