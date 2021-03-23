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
        User::factory(9)->create();
    }
}
