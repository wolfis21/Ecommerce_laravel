<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{

    static $rules = [
		'cedula' => 'required',
        'pname' => 'required',
        'psubname' => 'required',
        'fecha_n' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'cargo' => 'required',
        'zona_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula','pname','psubname', 'fecha_n', 'direccion', 'telefono', 'cargo', 'zona_id'];

    public function zona(){
        return $this->belongsTo(Zona::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

}
