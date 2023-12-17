<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usagers')->insert([

            //Admin
            [
                'id' => 1,
                'role' => 'Admin',
                'nomUsager' => 'leSuperAdmin',
                'nom' => 'PerAdmin',
                'prenom' => 'leSu',
                'email' => 'leBestAdmin01@email.com',
                'password' => Hash::make('asdf1234'),
            ],

            //Normal
            [
                'id' => 2,
                'role' => 'Adulte',
                'nomUsager' => 'leNormalUser',
                'nom' => 'malUser',
                'prenom' => 'leNor',
                'email' => 'lenormal02@email.com',
                'password' => Hash::make('zxcv5678'),
            ],

            //Kiddo
            [
                'id' => 3,
                'role' => 'Enfant',
                'nomUsager' => 'leKiddoUser',
                'nom' => 'doUser',
                'prenom' => 'leKid',
                'email' => 'lekiddo25@email.com',
                'password' => Hash::make('abcd12'),
            ],
        ]);
    }
}
