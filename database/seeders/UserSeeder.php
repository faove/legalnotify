<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = array(
            ['id' => 1, 'name' => 'Administrador', 'email' => 'admin@legal70.com', 'password' => Hash::make('adminadmin')],
            ['id' => 2, 'name' => 'Nelson Pino', 'email' => 'npino34@gmail.com', 'password' => Hash::make('npino34')],
            ['id' => 3, 'name' => 'Helen Pino', 'email' => 'helen@legal70.com', 'password' => Hash::make('helen')],
            ['id' => 4, 'name' => 'Miquel Orfila', 'email' => 'miquel@legal70.com', 'password' => Hash::make('miquel')],
            ['id' => 5, 'name' => 'Lisleida de Pino', 'email' => 'lisleida60@gmail.com', 'password' => Hash::make('lisleida60')],
        );

        // Loop through each user above and create the record for them in the database
        foreach ($users as $user) {
            User::create($user);
        }
    }
}