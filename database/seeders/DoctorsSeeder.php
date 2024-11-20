<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor; // Assurez-vous que le modèle User est correctement importé


class DoctorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
   // Liste des médecins à ajouter
            // Insertion des patients
            Doctor::insert([

                [
                    'id' => '21',
                    'type_service' => 'Cardiologie',
                ],
                [
                    'id' => '22',
                    'type_service' => 'Dermatologie',
                ],
            ]);
}
}
