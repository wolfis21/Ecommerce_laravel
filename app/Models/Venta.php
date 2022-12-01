<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{

    static $rules = [
		'date_vent' => 'required',
        'client_ref' => 'required',
        'cant_product' => 'required',
        'precio_total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date_vent','client_ref','cant_product', 'precio_total'];

}
