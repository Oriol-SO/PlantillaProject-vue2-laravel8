<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'id' => 1,
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'rol_id'=>1,
            'password' => Hash::make('password')
            ],
            [
            'id' => 2,
            'name' => 'Meza de partes',
            'email' => 'meza@gmail.com',
            'email_verified_at' => now(),
            'rol_id'=>2,
            'password' => Hash::make('password')
            ],
            [
            'id' => 3,
            'name' => 'Unidad Organica x',
            'email' => 'unidad@gmail.com',
            'email_verified_at' => now(),
            'rol_id'=>3,
            'password' => Hash::make('password')
            ],

            
        ]);
    }
}
