<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\tipo_usuario::create([
            'nombre' => 'Usuario interno'
        ]);
        \App\Models\tipo_usuario::create([
            'nombre' => 'Usuario externo'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Usuario interno',
            'email' => 'interno@example.com',
            'password' => Hash::make('12345678'),
            'id_tipo_usuario' => 1
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Otro usuario interno',
            'email' => 'interno2@example.com',
            'password' => Hash::make('12345678'),
            'id_tipo_usuario' => 1
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Usuario externo',
            'email' => 'externo@example.com',
            'password' => Hash::make('12345678'),
            'id_tipo_usuario' => 2
        ]);

        \App\Models\nota::factory(6)->create();
    }
}
