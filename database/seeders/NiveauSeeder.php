<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $niveaux=[
            ['libelleNiv'=>'Elementaire'],
            ['libelleNiv'=>'College'],
            ['libelleNiv'=>'Lycee'],
        ];
        DB::table('niveaux')->insert($niveaux);
    }
}
