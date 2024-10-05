<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('client_status')->delete();

        DB::table('client_status')->insert(array(
            0 =>
                array(
                    'id' => 'PRO',
                    'name' => 'Propecto', //Client Propecto esta en etapa de Consulta u/o asesoriamiento
                    'description' => 'Propecto esta en etapa de Consulta u/o Asesoriamiento.',
                ),
            1 =>
                array(
                    'id' => 'ACT',
                    'name' => 'Activo', //Client Activo inicio un proceso juridico con la Empresa.
                    'description' => 'Activo inicio un Proceso Juridico con la Empresa.',

                ),
            2 =>
                array(
                    'id' => 'VIG',
                    'name' => 'Vigente', //Client Vigente esta en etapa esta Latente.
                    'description' => 'Estado Vigente el Cliente esta en etapa esta Latente.',
                ),
            3 =>
                array(
                    'id' => 'ANU',
                    'name' => 'Anulado', //Client Anulado ha concluido su proceso Jurídico, sirve para seguimiento y indica el estado Final .
                    'description' => 'Anulado ha concluido su Proceso Jurídico, sirve para seguimiento y indica el Estado Final.',
                ),
        ));
    }
}