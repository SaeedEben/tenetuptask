<?php

namespace Database\Seeders\Product;

use App\Models\Product\Collection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() :void
    {
        $collections = [
            ['id' => Str::uuid(), 'name' => 'The Curated Closet'],
            ['id' => Str::uuid(), 'name' => 'Velvet Hanger'],
            ['id' => Str::uuid(), 'name' => 'Thread & Fable'],
            ['id' => Str::uuid(), 'name' => 'Luxe Loft'],
            ['id' => Str::uuid(), 'name' => 'The Fifth Label'],
            ['id' => Str::uuid(), 'name' => 'Sable Stitch'],
            ['id' => Str::uuid(), 'name' => 'Willow & Weave'],
            ['id' => Str::uuid(), 'name' => 'Modern Muse Boutique'],
        ];

        Collection::query()->insert($collections);
    }
}
