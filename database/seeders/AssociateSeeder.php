<?php

namespace Database\Seeders;

use App\Models\Associate;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AssociateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $associates = array(
            ['id' => 1, 'name' => 'Francisco', 'email' => 'faovenezuela@gmail.com', 'dni' => '96053135', 'gender' => 'M', 'country_id' => 11, 'civil_status_id' => 1, 'supervisor_status' => false, 'user_id' => 1, 'status' => true],
            ['id' => 2, 'name' => 'Nelson', 'last_name' => 'Pino', 'email' => 'npino34@gmail.com', 'dni' =>'96053135', 'gender' => 'M', 'country_id' => 209, 'civil_status_id' => 1, 'supervisor_status' => false, 'user_id' => 2, 'status' => true],
            ['id' => 3, 'name' => 'Miquel', 'last_name' => 'Orfila', 'email' => 'miquel@legal70.com', 'dni' => '26533053', 'gender' => 'M', 'country_id' => 209, 'civil_status_id' => 1, 'supervisor_status' => true, 'user_id' => 4, 'status' => true],
            ['id' => 4, 'name' => 'Helen', 'last_name' => 'Pino', 'email' => 'helen@legal70.com', 'dni' =>'26533053', 'gender' => 'F', 'country_id' => 209, 'civil_status_id' => 1, 'supervisor_status' => true, 'user_id' => 3, 'status' => true],
        );

        // Loop through each user above and create the record for them in the database
        foreach ($associates as $associate) {
            Associate::create($associate);
        }
    }
}