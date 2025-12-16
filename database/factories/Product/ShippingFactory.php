<?php

namespace Database\Factories\Product;

use App\Enum\Product\ShippingBox;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product\Shipping>
 */
class ShippingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() :array
    {
        return [
            'box'                                   => $this->faker->randomElement(ShippingBox::values()),
            'has_cites_Permit'                      => $this->faker->boolean(),
            'has_fad_medical_device_classification' => $this->faker->boolean(),
            'has_dangerous_good_classification'     => $this->faker->boolean(),
        ];
    }
}
