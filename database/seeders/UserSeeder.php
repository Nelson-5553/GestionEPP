<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'), // Puedes usar cualquier contraseña que desees
            'current_team_id' => null,
            'profile_photo_path' => null,
            'card'=>'1014567890'
        ])->assignRole('supervisor');

        User::create([
            'name' => 'Jane doe',
            'email' => 'jane.doe@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'current_team_id' => null,
            'profile_photo_path' => null,
            'card'=> '1023456789'
        ])->assignRole('user');

        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'current_team_id' => null,
            'profile_photo_path' => null,
            'card'=> '1234567891'
        ])->assignRole('admin');
    }
}
