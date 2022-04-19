<?php

namespace Database\Seeders;

use App\Models\Datos;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Datos::factory(10)->create();
    }
}
