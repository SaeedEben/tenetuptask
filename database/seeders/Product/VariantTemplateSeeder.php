<?php

namespace Database\Seeders\Product;

use App\Models\Product\Category;
use App\Models\Product\Property;
use App\Models\Product\VariantTemplate;
use Illuminate\Database\Seeder;

class VariantTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() :void
    {
        $categories = Category::all();
        $properties = Property::all()->keyBy('name');

        foreach ($categories as $category) {

            $allowedProperties = match ($category->name) {
                'Baby' => ['color', 'size'],
                'Shoes' => ['color', 'size'],
                'Men' => ['color'],
                default => [],
            };

            foreach ($allowedProperties as $propertyName) {

                if (!isset($properties[$propertyName])) {
                    continue;
                }

                VariantTemplate::factory()->create(
                    [
                        'category_id' => $category->id,
                        'property_id' => $properties[$propertyName]->id,
                    ]
                );
            }
        }
    }
}
