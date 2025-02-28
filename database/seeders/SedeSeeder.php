<?php

namespace Database\Seeders;

use App\Models\Sede;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sede::create([
            'name' => 'San fernando',
            'direction' => 'Cl. 15 #80C-70, San Fernando, Cartagena de Indias',
            'description' => 'Gestion salud sanfernado',
            'image' => 'Sanfernando.webp',
        ]);
        Sede::create([
            'name' => 'Maria Auxiliadora',
            'direction' => 'Cra. 38 #29-18, Alcibia, Cartagena de Indias',
            'description' => 'Gestion salud Maria Auxiliadora',
            'image' => 'mauxiliadora.png',
        ]);
        Sede::create([
            'name' => 'Amberes',
            'direction' => 'Cra. 38 #29-18, Alcibia, Cartagena de Indias',
            'description' => 'Gestion salud Amberes',
            'image' => 'Amberes.jpeg',
        ]);
    }
}
