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
        //$this->call(ProcessSeeder::class); 
        //$this->call(ProcessSpecialtiesSeeder::class);
        //Category
        //$this->call(CategoriesSeeder::class);
        //Datos Asociados
        //$this->call(AssociateSeeder::class);
        //Client Status
        $this->call(ClientStatusSeeder::class);
        //Ciudades    
        //$this->call(CitieSeeder::class);
        //Countries
        //$this->call(CommunicationSeeder::class);
        //Facturas
        //$this->call(InvoiceSeeder::class);
        //Plazos de Entregas
        //$this->call(ProductsSeeder::class);
        //Servicios
        //$this->call(ServiceSeeder::class);
        //tipo de Comunicacion
        //$this->call(TypeCommunicationSeeder::class);
        //Tipo de Servicios
        //$this->call(TypeServiceSeeder::class);
        //Tipo de Products
        //$this->call(TypeProductsSeeder::class);
        //Motivo de la comunicación
        //$this->call(ReasonSeeder::class);
        //Dias libres
        //$this->call(HolidaysTableSeeder::class);
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