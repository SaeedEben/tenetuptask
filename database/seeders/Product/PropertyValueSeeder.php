<?php

namespace Database\Seeders\Product;

use App\Models\Product\Property;
use App\Models\Product\PropertyValue;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PropertyValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() :void
    {
        $properties = Property::query()->pluck('id')->toArray();
        $values     = [
            ['id' => Str::uuid(), 'value' => 'red', 'property_id' => array_first($properties)],
            ['id' => Str::uuid(), 'value' => 'blue', 'property_id' => array_first($properties)],
            ['id' => Str::uuid(), 'value' => 'black', 'property_id' => array_first($properties)],
            ['id' => Str::uuid(), 'value' => 'white', 'property_id' => array_first($properties)],
            ['id' => Str::uuid(), 'value' => 'sm', 'property_id' => array_last($properties)],
            ['id' => Str::uuid(), 'value' => 'md', 'property_id' => array_last($properties)],
            ['id' => Str::uuid(), 'value' => 'lg', 'property_id' => array_last($properties)],
            ['id' => Str::uuid(), 'value' => 'xlg', 'property_id' => array_last($properties)],
        ];

        PropertyValue::query()->insert($values);
    }
}
