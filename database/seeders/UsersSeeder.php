<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertion de plusieurs utilisateurs
        User::insert([
            [
                'nom' => 'Ba',
                'prenom' => 'Al Amine',
                'email' => 'mentalisum20@gmail.com',
                'password' => Hash::make('9462'), // Utiliser bcrypt ou Hash pour sécuriser
                'sexe' => 'Homme',
                'telephone' => '782606653',
                'adresse' => ' Rufisque',
                'age' => 35,
                'role' => 'Patient',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Mbaye',
                'prenom' => 'Die',
                'email' => '03thementalist@gmail.com',
                'password' => Hash::make('9462'),
                'sexe' => 'Femme',
                'telephone' => '767834901',
                'adresse' => 'Sicap',
                'age' => 30,
                'role' => 'Patient',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Medcin
            [
                'nom' => 'Kebe',
                'prenom' => 'Ndeye Fatou',
                'email' => 'nfk@gmail.com',
                'password' => Hash::make('9462'),
                'sexe' => 'Femme',
                'telephone' => '771688845',
                'adresse' => ' Saint-Louis',
                'age' => 45,
                'role' => 'Médecin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Ba',
                'prenom' => 'Samba',
                'email' => 'samba@gmail.com',
                'password' => Hash::make('9462'),
                'sexe' => 'Femme',
                'telephone' => '782178156',
                'adresse' => 'Canada',
                'age' => 38,
                'role' => 'Médecin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
