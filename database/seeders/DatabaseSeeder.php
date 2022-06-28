<?php

namespace Database\Seeders;

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
         // \App\Models\User::factory(10)->create();
         \App\Models\Categoria::factory(10)->create();
         \App\Models\combos::factory(10)->create();
         \App\Models\compra::factory(10)->create();
         \App\Models\registro::factory(10)->create();

    }
}
