<?php

namespace Database\Seeders\Shop;

use App\Models\Shop\Shop;
use Illuminate\Database\Seeder;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shop::factory()->count(200)->create();
    }
}
