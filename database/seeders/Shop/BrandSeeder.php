<?php

namespace Database\Seeders\Shop;

use App\Models\Shop\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() :void
    {
        $brands = [
            ['id' => Str::uuid(), 'name' => 'Gucci'],
            ['id' => Str::uuid(), 'name' => 'Louis Vuitton'],
            ['id' => Str::uuid(), 'name' => 'Prada'],
            ['id' => Str::uuid(), 'name' => 'Chanel'],
            ['id' => Str::uuid(), 'name' => 'Dior'],
            ['id' => Str::uuid(), 'name' => 'Balenciaga'],
            ['id' => Str::uuid(), 'name' => 'Versace'],
            ['id' => Str::uuid(), 'name' => 'Burberry'],
            ['id' => Str::uuid(), 'name' => 'Ralph Lauren'],
            ['id' => Str::uuid(), 'name' => 'Tommy Hilfiger'],
            ['id' => Str::uuid(), 'name' => 'Hugo Boss'],
            ['id' => Str::uuid(), 'name' => 'Nike'],
            ['id' => Str::uuid(), 'name' => 'Adidas'],
            ['id' => Str::uuid(), 'name' => 'Puma'],
            ['id' => Str::uuid(), 'name' => 'Reebok'],
            ['id' => Str::uuid(), 'name' => 'Under Armour'],
            ['id' => Str::uuid(), 'name' => 'Lululemon'],
            ['id' => Str::uuid(), 'name' => 'New Balance'],
            ['id' => Str::uuid(), 'name' => 'Skechers'],
            ['id' => Str::uuid(), 'name' => 'Champion'],
        ];

        Brand::query()->insert($brands);
    }
}
