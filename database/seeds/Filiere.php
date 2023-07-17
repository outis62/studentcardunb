<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Filiere extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filieres')->insert([
            ['filiere' => 'RESEAU'],
            ['filiere' => 'SECURITE'],
            ['filiere' => 'PROGRAMATION'],
            ]);
    }
}
