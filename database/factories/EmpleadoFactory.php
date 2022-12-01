<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cedula' => rand(10000000,25000000),
            'pname' => fake()->name(),
            'psubname' => fake()->lastname(),
            'fecha_n' => rand(1,2000),
            'direccion' => 'Venezuela',
            'telefono' => rand(1,2000),
            'cargo' => 'Jefe de Ventas',
        ];
    }
}
