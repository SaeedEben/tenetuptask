<?php

namespace Database\Factories\Product;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product\Variant>
 */
class VariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() :array
    {
        $colors = ['red', 'blue', 'black', 'white'];
        $sizes  = ['sm', 'md', 'lg', 'xlg'];
        return [
            'sku'   => $this->faker->lexify('??'). $this->faker->randomNumber() . '-' . $colors[array_rand($colors)] . '-' . $sizes[array_rand($sizes)],
            'price' => $this->faker->randomFloat(2, 10, 100),
            'stock' => $this->faker->randomNumber(2),
        ];
    }
}
