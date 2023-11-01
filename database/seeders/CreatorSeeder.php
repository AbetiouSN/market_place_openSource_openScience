<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreatorSeeder extends Seeder
{
    public function run()
    {
        // Exemple de données pour les créateurs
        $creators = [
            [
                'CIN' => '1234567890',
                'F_Name' => 'John',
                'L_Name' => 'Doe',
                'Domain' => 'IT',
                'id_user' => 1, // L'ID de l'utilisateur correspondant
            ],
            [
                'CIN' => '9876543210',
                'F_Name' => 'Jane',
                'L_Name' => 'Smith',
                'Domain' => 'IT',
                'id_user' => 2, // L'ID de l'utilisateur correspondant
            ],
            // Ajoutez d'autres données de créateurs ici
        ];

        // Utilisez DB::table pour insérer les données dans la table des créateurs
        DB::table('creators')->insert($creators);
    }
}