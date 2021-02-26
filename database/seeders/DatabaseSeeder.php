<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\categoria;
use App\Models\filtrarpor;
use App\Models\ordenarpor;
use App\Models\auto;
use App\Models\slider;
use App\Models\imagene;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        categoria::factory(10)->create();
        filtrarpor::factory(4)->create();
        ordenarpor::factory(4)->create();
        for ($i=0; $i < 12; $i++) {
          auto::factory(1)->create();
          slider::factory(6)->create();
          imagene::factory(2)->create();
        }
    }
}
