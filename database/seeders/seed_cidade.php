<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seed_cidade extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cidade')->insert([
            'nome' => 'Brasilia',
            'estado_id' => 1,
        ]);
        DB::table('cidade')->insert([
            'nome' => 'Luziânia',
            'estado_id' => 2,
        ]);
        DB::table('cidade')->insert([
            'nome' => 'Cuiabá',
            'estado_id' => 3,
        ]);
        DB::table('cidade')->insert([
            'nome' => 'Belém',
            'estado_id' => 4,
        ]);
    }
}
