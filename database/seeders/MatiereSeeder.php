<?php

namespace Database\Seeders;

use App\Models\Matiere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $matieres = [
            [
                'codemat' => 'Algo',
                'libelle' => 'Algorithme',
                'coef' => '3',
            ],
            [
                'codemat' => 'DevWeb',
                'libelle' => 'Develeoppement web',
                'coef' => '3',
            ],
            [
                'codemat' => 'SOA',
                'libelle' => 'Architecture logiciel',
                'coef' => '4',
            ],
            
        ];
        Matiere::insert($matieres);
    }
}
