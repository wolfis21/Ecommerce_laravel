<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $idProducto
 *  @property $codig_produc
 *  @property $name_product
 *  @property $descrip_product
 * @property $precio_product
 * @property $cant_stock
 * @property $zona_idZona
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'codig_produc' => 'required',
        'name_product' => 'required',
        'descrip_product' => 'required',
        'precio_product' => 'required',
        'cant_stock' => 'required',
		'zona_idZona' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codig_produc','name_product','descrip_product', 'precio_product', 'cant_stock', 'zona_idZona'];



}
