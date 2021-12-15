<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Administrador',
            'email'=> 'admin123@gmail.com',
            'password' =>bcrypt('748159263')
        ])->assignRole('Admin');

        User::create([
            'name'=>'Docente',
            'email'=> 'docente123@gmail.com',
            'password' =>bcrypt('748159263')
        ])->assignRole('Admin');

        User::create([
            'name'=>'Estudiante',
            'email'=> 'estudiante123@gmail.com',
            'password' =>bcrypt('748159263')
        ])->assignRole('Admin');

        User::create([
            'name'=>'Acuediente',
            'email'=> 'acudiente123@gmail.com',
            'password' =>bcrypt('748159263')
        ])->assignRole('Admin');

        User::factory(9)->create();
    }
}
