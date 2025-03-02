<?php

namespace Database\Seeders;

use App\Models\Epp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Epps = [
            [
                "name" => "Batas",
                "cantidad" => 50,
                "unity" => "Unidad",
                "image" => "Batas.webp",
                "description" => "Batas desechables para protección en ambientes médicos e industriales."
            ],
            [
                "name" => "Gorros",
                "cantidad" => 100,
                "unity" => "Unidad",
                "image" => "Gorros.png",
                "description" => "Gorros quirúrgicos para evitar la caída de cabello en entornos esterilizados."
            ],
            [
                "name" => "Monogafas",
                "cantidad" => 30,
                "unity" => "Pares",
                "image" => "Monogafas.webp",
                "description" => "Monogafas de seguridad con protección contra impactos y salpicaduras."
            ],
            [
                "name" => "N95",
                "cantidad" => 200,
                "unity" => "Unidad",
                "image" => "N95.webp",
                "description" => "Mascarillas N95 con filtrado de partículas y ajuste ergonómico."
            ],
            [
                "name" => "Overol",
                "cantidad" => 40,
                "unity" => "Unidad",
                "image" => "Overol.jpg",
                "description" => "Overoles de protección contra agentes químicos y biológicos."
            ],
            [
                "name" => "Pijama",
                "cantidad" => 60,
                "unity" => "Unidad",
                "image" => "Pijama.png",
                "description" => "Pijamas médicas reutilizables para personal de salud."
            ],
            [
                "name" => "Polainas",
                "cantidad" => 80,
                "unity" => "Pares",
                "image" => "polainas.jpg",
                "description" => "Cubrezapatos o polainas desechables para ambientes controlados."
            ],
            [
                "name" => "Tapabocas",
                "cantidad" => 500,
                "unity" => "Unidad",
                "image" => "Tapabocas.jpg",
                "description" => "Tapabocas quirúrgicos de tres capas con filtro antibacteriano."
            ]
        ];

        foreach ($Epps as $epp){
            Epp::create($epp);
        }


    }
}
