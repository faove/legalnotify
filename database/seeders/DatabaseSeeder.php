<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Countries
        $this->call(CountriesSeeder::class);
        //Civil_Status
        $this->call(CivilStatusSeeder::class);
        //Associates
        $this->call(AssociateSeeder::class);
        //Datos de Usuarios
        $this->call(UserSeeder::class);
    }
}