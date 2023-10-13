<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $password = Str::random(8);

        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@exata.it',
            'password' => Hash::make($password),
            'role_id' => 1
        ]);

        $this->command->info("Email: admin@exata.it");
        $this->command->info("Senha: " . $password);
    }
}