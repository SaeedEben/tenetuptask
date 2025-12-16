<?php

namespace Database\Seeders\Boutique;

use App\Models\Boutique\Boutique;
use Illuminate\Database\Seeder;

class BoutiquesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Boutique::factory()->count(200)->create();
    }
}
