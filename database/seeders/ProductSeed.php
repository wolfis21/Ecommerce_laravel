<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            //
            'codig_produc' => rand(10000000,25000000),
            'name_product' => fake()->name(),
            'descrip_product' => fake()->lastname(),
            'precio_product' => rand(1,2000),
            'cant_stock' =>rand(1,200),
        ]);
    }
}
