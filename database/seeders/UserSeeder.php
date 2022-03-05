<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'code' => 'U00122',
            'slug' => 'u00122',
            'name' => 'Admin',
            'email' => 'admin@correo.com',
            'role' => 'Administrador',
            'password' => '123administrador456',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
