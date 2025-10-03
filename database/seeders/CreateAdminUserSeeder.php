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
        // Verifica se já existe um usuário com esse e-mail
        if (!User::where('email', 'admin@encontro.com')->exists()) {
            User::create([
                'name' => 'Administrador',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('Lav8@471'), // 🔒 altere depois!
                'email_verified_at' => now(), // ✅ marca como verificado (opcional)
            ]);

            $this->command->info('Usuário administrador criado: admin@gmail.com');
        } else {
            $this->command->warn('Usuário administrador já existe.');
        }
    }
}
