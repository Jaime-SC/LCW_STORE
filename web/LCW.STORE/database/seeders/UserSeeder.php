<?php

namespace Database\Seeders;

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
            'name' => 'Pepe',
            'email' => 'pepe@gmail.com',
            'password' => bcrypt('12345')
        ])->assignRole('Admin');

        User::factory(9)->create();
    }

        
}
