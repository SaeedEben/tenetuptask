<?php

namespace Database\Seeders;

use Database\Seeders\Product\CategorySeeder;
use Database\Seeders\Product\CollectionSeeder;
use Database\Seeders\Product\ProductSeeder;
use Database\Seeders\Product\PropertySeeder;
use Database\Seeders\Product\PropertyValueSeeder;
use Database\Seeders\Shop\BrandSeeder;
use Database\Seeders\Shop\ShopsSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run() :void
    {
        $this->call([
            ShopsSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            CollectionSeeder::class,
            PropertySeeder::class,
            PropertyValueSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
