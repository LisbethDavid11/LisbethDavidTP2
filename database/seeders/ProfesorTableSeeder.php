<?php

namespace Database\Seeders;

use App\Models\Profesor;
use Illuminate\Database\Seeder;

class ProfesorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profesor::Factory(5000)-> create();
    }
}

