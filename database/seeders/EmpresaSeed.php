<?php

namespace Database\Seeders;

use App\Models\Empresa;
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
            'name_empre' => fake()->name().'C.A',
            'descript_empre' => fake()->lastname(),
            'num_p' => rand(10000000,25000000),
        ]);
    }
}
