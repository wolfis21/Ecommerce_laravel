<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'codig_prod' => rand(10000000,25000000),
            'name_produc' => fake()->name(),
            'descrip_produc' => fake()->lastname(),
            'precio_product' => rand(1,2000),
            'cant_stock' =>rand(1,200),
        ];
    }
}
