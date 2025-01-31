<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TipoPesquisasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposPesquisas = [
            'Espontânea',
            'Serviços'
        ];

        foreach($tiposPesquisas as $tipo)
        {
            DB::table('pesquisas')->insert([
                'tipo' => $tipo
            ]);
        }
        
    }
}
