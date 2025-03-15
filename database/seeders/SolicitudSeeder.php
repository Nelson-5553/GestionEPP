<?php

namespace Database\Seeders;

use App\Models\Solicitud;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $solicitudes = [];

        for ($i = 0; $i < 20; $i++) {
            $solicitudes[] = [
                'user_id' => rand(1, 20), // IDs de usuario aleatorios entre 1 y 2
                'epp_id' => rand(1, 8), // IDs de EPP aleatorios entre 1 y 8
                'sede_id' => rand(1, 3), // IDs de sede aleatorios entre 1 y 3
                'area_id' => rand(1, 25), // IDs de área aleatorios entre 1 y 25
                'cantidad' => rand(1, 20), // Genera una cantidad aleatoria entre 1 y 20
                'state' => 'Pendiente',
                'aprobado_por_id' => null,
                'created_at' => now()->subDays(rand(0, 365))->setTime(rand(0, 23), rand(0, 59), rand(0, 59)),
                'updated_at' => now()
            ];
        }

        foreach ($solicitudes as $solicitud) {
            Solicitud::create($solicitud);
        }
    }
}
