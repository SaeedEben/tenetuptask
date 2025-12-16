<?php

namespace Database\Seeders\Product;

use App\Models\Product\Property;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() :void
    {
        $properties = [
            ['id' => Str::uuid(), 'name' => 'size'],
            ['id' => Str::uuid(), 'name' => 'color'],
        ];

        Property::query()->insert($properties);
    }
}
