<?php

namespace Database\Factories\Product;

use App\Enum\Product\ProductFileEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product\ProductFile>
 */
class ProductFileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() :array
    {
        return [
            'path'      => $this->faker->filePath(),
            'type'      => $this->faker->randomElement(ProductFileEnum::values()),
            'size'      => $this->faker->numberBetween([1, 1000]),
            'extension' => $this->faker->fileExtension(),
            'alt'       => $this->faker->word(),
            'position'  => $this->faker->numberBetween([1, 10]),
        ];
    }
}
