<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Boutique\BoutiquesSeeder;
use Database\Seeders\Boutique\BrandSeeder;
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
            BoutiquesSeeder::class,
            BrandSeeder::class,
        ]);
    }
}
