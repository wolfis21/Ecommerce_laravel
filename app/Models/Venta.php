<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{

    static $rules = [
		'date_vent' => 'required|date',
        'client_ref' => 'required',
        'cant_product' => 'required|integer',
        'precio_total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date_vent','client_ref','cant_product', 'precio_total'];

    public function products(){
        return $this->belongsToMany(Product::class);
    }

}
