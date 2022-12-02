<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
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
            'rif_empresa' => rand(10000000,25000000),
            'name_empre' => fake()->name(),
            'descript_empre' => fake()->lastname(),
            'num_p' => rand(1,2000),
        ];
    }
}
