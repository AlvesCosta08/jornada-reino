<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = 'admin@encontro.com'; // 👈 Defina uma vez

        if (!User::where('email', $email)->exists()) {
            User::create([
                'name' => 'Administrador',
                'email' => $email,
                'password' => Hash::make('Lav8@471'),
                'email_verified_at' => now(),
            ]);

            $this->command->info("Usuário administrador criado: {$email}");
        } else {
            $this->command->warn("Usuário administrador já existe: {$email}");
        }
    }
}
