<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seed_estado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado')->insert([
            'nome' => 'Distrito Federal'
        ]);
        DB::table('estado')->insert([
            'nome' => 'Goiás'
        ]);
        DB::table('estado')->insert([
            'nome' => 'Mato Grosso'
        ]);
        DB::table('estado')->insert([
            'nome' => 'Pará'
        ]);
    }
}
