<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            ['libelleClass' => 'CI', 'niveau_id' => '1'],
            ['libelleClass' => 'CP', 'niveau_id' => '1'],
            ['libelleClass' => 'CE1', 'niveau_id' => '1'],
            ['libelleClass' => 'CE2', 'niveau_id' => '1'],
            ['libelleClass' => 'CM1', 'niveau_id' => '1'],
            ['libelleClass' => 'CM2', 'niveau_id' => '1'],
            ['libelleClass' => '6 ème', 'niveau_id' => '2'],
            ['libelleClass' => '5 ème', 'niveau_id' => '2'],
            ['libelleClass' => '4 ème', 'niveau_id' => '2'],
            ['libelleClass' => '3 ème', 'niveau_id' => '2'],
            ['libelleClass' => '2nd', 'niveau_id' => '3'],
            ['libelleClass' => '1ere', 'niveau_id' => '3'],
            ['libelleClass' => 'Tle', 'niveau_id' => '3'],
        ];
        DB::table('classes')->insert($classes);
    }
}
