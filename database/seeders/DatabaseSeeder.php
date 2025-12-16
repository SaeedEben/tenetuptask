<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Shop\ShopsSeeder;
use Database\Seeders\Shop\BrandSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ShopsSeeder::class,
            BrandSeeder::class,
        ]);
    }
}
