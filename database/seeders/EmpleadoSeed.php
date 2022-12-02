<?php

namespace Database\Seeders;

use App\Models\Empleado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('empleados')->insert([
            'cedula' => rand(10000000,25000000),
            'pname' => fake()->name(),
            'psubname' => fake()->lastname(),
            'fecha_n' => fake()->dateTimeBetween('-30 days', '+30 days'),
            'direccion' => 'Venezuela',
            'telefono' => rand(10000000,25000000),
            'cargo' => 'Jefe de Ventas',
        ]);
    }
}
