<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // adm user
        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'administrador@gmail.com',
            'password' => '12345678',
            'role_id' => 1
        ]);

        // customer user
        User::factory()->create([
            'name' => 'Consumidor',
            'email' => 'test@example.com',
            'password' => '12345678',
            'role_id' => 2
        ]);
    }
}
