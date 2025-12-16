<?php

namespace Database\Factories\Product;

use App\Enum\Product\ProductGender;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() :array
    {
        return [
            'id'     => $this->faker->uuid(),
            'code'   => $this->faker->postcode(),
            'gender' => $this->faker->randomElement(ProductGender::values()),

            'shop_id'         => null,
            'brand_id'        => null,
            'collection_id'   => null,
            'category_id'     => null,
            'sub_category_id' => null,
        ];
    }
}
