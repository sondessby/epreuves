<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Epreuve;


class EpreuveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $epreuves = [
            [
                'numepreuve' => '001',
                'datepreuve' => '11/01/2023',
                'lieu' => 'djerba',
            ],
            [
                'numepreuve' => '002',
                'datepreuve' => '11/02/2023',
                'lieu' => 'djerba',
            ],
            [
                'numepreuve' => '003',
                'datepreuve' => '11/03/2023',
                'lieu' => 'djerba',
            ],
            
        ];
        Epreuve::insert($epreuves);
    }
}


