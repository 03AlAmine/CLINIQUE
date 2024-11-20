<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient; // Assurez-vous que le modèle User est correctement importé
    class PatientsSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            // Insertion des patients
            Patient::insert([
                [
                    'id' => 19, // Correspond à l'utilisateur 'John Doe' (id 1 dans users)
                    'type_maladie' => 'Diabète',
                    'proche_nom' => 'Jane Doe',
                    'proche_tel' => '123456789',
                ],
                [
                    'id' => 20, // Correspond à l'utilisateur 'Jane Doe' (id 2 dans users)
                    'type_maladie' => 'Hypertension',
                    'proche_nom' => 'John Doe',
                    'proche_tel' => '987654321',
                ]
            ]);
        }
    }

