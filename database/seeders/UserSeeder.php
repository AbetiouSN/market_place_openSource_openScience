<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Création du premier utilisateur
        DB::table('users')->insert([
            'type' => 'creator',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password123'),
        ]);

        // Création du deuxième utilisateur
        DB::table('users')->insert([
            'type' => 'Searcher',
            'email' => 'janesmith@example.com',
            'password' => Hash::make('secret123'),
        ]);

        // Répétez ce bloc pour chaque utilisateur supplémentaire que vous souhaitez créer

        // Création du dixième utilisateur
        DB::table('users')->insert([
            'type' => 'creator',
            'email' => 'user10@example.com',
            'password' => Hash::make('password10'),
        ]);
    }
}