<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{

    static $rules = [
		'rif_empresa' => 'required',
        'name_empre' => 'required',
        'descript_empre' => 'required',
        'num_p' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rif_empresa','name_empre','descript_empre', 'num_p'];

}
