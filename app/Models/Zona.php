<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{

    static $rules = [
		'direccion_z' => 'required',
        'number_cont' => 'required',
        'empresa_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['direccion_z','number_cont','empresa_id'];

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }

}
