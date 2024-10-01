<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class CivilStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('civil_status')->delete();

        DB::table('civil_status')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'description' => 'Casado', //Laywer
                ),
            1 =>
                array(
                    'id' => 2,
                    'description' => 'Soltero',
                ),
            2 =>
                array(
                    'id' => 3,
                    'description' => 'Viudo',
                ),
            3 =>
                array(
                    'id' => 4,
                    'description' => 'Divorciado',
                ),
        ));
    }
}