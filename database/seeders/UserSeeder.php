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
        $admin = User::create([
            'name' => 'Admin Role',
            'email' =>'admin@role.com',
            'password' => bcrypt('123456')
        ]);

        $admin->assignRole('admin');

        // Kasir ROLE
        $kasir = User::create([
            'name' => 'Kasir Role',
            'email' =>'kasir@role.com',
            'password' => bcrypt('123456')
        ]);

        $kasir->assignRole('kasir');

        // Manager Role

        $manager = User::create([
            'name' => 'Manager Role',
            'email' =>'manager@role.com',
            'password' => bcrypt('123456')
        ]);

        $manager->assignRole('manager');
    }
}
