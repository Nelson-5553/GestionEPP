<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
            ["name" => "Urgencias", "sede_id" => 1, "description" => "Atención inmediata a emergencias"],
            ["name" => "Hospitalización", "sede_id" => 3, "description" => "Internamiento de pacientes"],
            ["name" => "Cirugía General", "sede_id" => 2, "description" => "Procedimientos quirúrgicos generales"],
            ["name" => "Cardiología", "sede_id" => 1, "description" => "Diagnóstico y tratamiento del corazón"],
            ["name" => "Oncología", "sede_id" => 2, "description" => "Diagnóstico y tratamiento del cáncer"],
            ["name" => "Pediatría", "sede_id" => 3, "description" => "Atención médica para niños"],
            ["name" => "Ginecología", "sede_id" => 1, "description" => "Salud femenina y embarazo"],
            ["name" => "Dermatología", "sede_id" => 2, "description" => "Tratamiento de enfermedades de la piel"],
            ["name" => "Medicina Interna", "sede_id" => 3, "description" => "Diagnóstico y tratamiento de enfermedades generales"],
            ["name" => "Traumatología", "sede_id" => 1, "description" => "Atención de lesiones musculoesqueléticas"],
            ["name" => "Psiquiatría", "sede_id" => 2, "description" => "Salud mental y trastornos psicológicos"],
            ["name" => "Urología", "sede_id" => 3, "description" => "Sistema urinario y problemas renales"],
            ["name" => "Oftalmología", "sede_id" => 1, "description" => "Salud ocular y visión"],
            ["name" => "Otorrinolaringología", "sede_id" => 2, "description" => "Enfermedades del oído, nariz y garganta"],
            ["name" => "Rehabilitación", "sede_id" => 3, "description" => "Terapia física y recuperación"],
            ["name" => "Neurología", "sede_id" => 1, "description" => "Enfermedades del sistema nervioso"],
            ["name" => "Endocrinología", "sede_id" => 2, "description" => "Trastornos hormonales"],
            ["name" => "Gastroenterología", "sede_id" => 3, "description" => "Trastornos digestivos"],
            ["name" => "Neonatología", "sede_id" => 1, "description" => "Atención a recién nacidos"],
            ["name" => "Nefrología", "sede_id" => 2, "description" => "Enfermedades del riñón"],
            ["name" => "Radiología", "sede_id" => 3, "description" => "Diagnóstico por imágenes"],
            ["name" => "Laboratorio Clínico", "sede_id" => 1, "description" => "Análisis clínicos de laboratorio"],
            ["name" => "Banco de Sangre", "sede_id" => 2, "description" => "Recolección y distribución de sangre"],
            ["name" => "Cuidados Intensivos", "sede_id" => 3, "description" => "Atención de pacientes críticos"],
            ["name" => "Odontología", "sede_id" => 1, "description" => "Salud bucal y tratamiento dental"],
        ];

        foreach ($areas as $area) {
            Area::create($area);
        }
    }
}
