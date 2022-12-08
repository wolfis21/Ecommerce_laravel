<?php

namespace App\Models;
use Illuminate\Support\Facades\Storage;
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
		    'codig_produc' => 'required|integer',
        'name_product' => 'required|string',
        'descrip_product' => 'required|string|min:10',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'precio_product' => 'required',
        'cant_stock' => 'required|integer',
		    'zona_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codig_produc','name_product','descrip_product','image', 'precio_product', 'cant_stock', 'zona_id'];

    public function getUrlPathAttribute(){
      return Storage::url($this->path);
    }


    public function zona(){
      return $this->belongsTo(Zona::class);
    }

    public function ventas(){
      return $this->belongsToMany(Venta::class);
  }
}
