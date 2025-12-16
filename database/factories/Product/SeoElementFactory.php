<?php

namespace Database\Factories\Product;

use App\Enum\Language\Languages;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product\SeoElement>
 */
class SeoElementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() :array
    {
        return [
            'id'          => $this->faker->uuid(),
            'title'       => $this->faker->title(),
            'description' => $this->faker->text(),
        ];
    }


    public function locale(Languages $language) :self
    {
        return $this->state(fn() => [
            'locale' => $language->value,
        ]);
    }
}
