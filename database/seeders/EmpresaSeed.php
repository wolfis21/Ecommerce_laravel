<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmpresaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
/*         Empresa::factory()
        ->count(10)
        ->hasPosts(1)
        ->create(); */

        DB::table('empresas')->insert([
            'rif_empresa' => rand(10000000,25000000),
            'name_empre' => 'Muebles Import C.A',
            'descript_empre' => 'Empresa n.1 en importaciones de muebles',
            'num_p' => rand(10000000,25000000),
            'created_at' => fake()->dateTimeBetween('-30 days', '+30 days'), 
            'updated_at' => fake()->dateTimeBetween('-30 days', '+30 days'),
        ]);
    }
}
