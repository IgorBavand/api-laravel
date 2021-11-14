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
            'name' => 'Igor Nardênio Guerreiro da Silva',
            'email' => 'igor.bvn@gmail.com',
            'password' => bcrypt( '12345678' ),
        ]);
        
    }
}
