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
            'name' => 'Cristian López Ramirez',
            'email' => '20183l301008@utcv.edu.mx',
            'password' => bcrypt('11012005qw')
        ])->assignRole('Admin');
        User::create([
            'name' => 'Melissa Rodriguez Arellano',
            'email' => '20183l301004@utcv.edu.mx',
            'password' => bcrypt('password')
        ])->assignRole('Admin');
        User::create([
            'name' => 'Eduardo Hernández Reyes',
            'email' => '20183l301018@utcv.edu.mx',
            'password' => bcrypt('password')
        ])->assignRole('Admin');
        User::create([
            'name' => 'Abraham Rojas Montero',
            'email' => '20183L201031@utcv.edu.mx',
            'password' => bcrypt('password')
        ])->assignRole('Admin');
        User::create([
            'name' => 'José Alberto Mendoza Montañez',
            'email' => '20183l301014@utcv.edu.mx',
            'password' => bcrypt('password')
        ])->assignRole('Admin');
        User::factory(9)->create();
    }
}
