<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LangueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('langues')->insert([
            // 1
            ['langue' => 'Français'],
            // 2
            ['langue' => 'Anglais'],
            // 3
            ['langue' => 'Espagnol'],
            // 4
            ['langue' => 'Italien'],
            // 5
            ['langue' => 'Portuguais'],
            // 6
            ['langue' => 'Japonais'],
            // 7
            ['langue' => 'Allemand'],
            // 8
            ['langue' => 'Russe'],
        ]);
    }
}
