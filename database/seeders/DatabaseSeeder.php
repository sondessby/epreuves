<?php

namespace Database\Seeders;
use Database\Seeders\MatiereSeeder;
use Database\Seeders\EpreuveSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(MatiereSeeder::class);
        $this->call(EpreuveSeeder::class);
    }
}
