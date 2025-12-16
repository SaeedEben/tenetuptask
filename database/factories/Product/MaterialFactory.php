<?php

namespace Database\Factories\Product;

use App\Models\Product\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product\Material>
 */
class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() :array
    {
        $categories = Category::pluck('id')->toArray();
        return [
            'id'          => $this->faker->uuid(),
            'surface'     => $this->faker->word(),
            'composition' => $this->faker->word(),
            'percentage'  => $this->faker->randomFloat(2, 0, 100),
            'category_id' => $this->faker->randomElement($categories),
        ];
    }
}
