<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipo_documento;


class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo_Documento::create([
            'tipo_documento'=>'CC'
        ]
        );
        Tipo_Documento::create([
            'tipo_documento'=>'TI'
        ]
        );
        Tipo_Documento::create([
            'tipo_documento'=>'Pasaporte'
        ]
        );
    }
}
