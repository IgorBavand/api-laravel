<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Usuário de teste',
            'email' => 'usuario@teste.com.br',
            'password' => bcrypt( 'senha123' ),
        ]);
        
    }
}
