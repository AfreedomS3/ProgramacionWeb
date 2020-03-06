<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class clientes
 * @package App\Models
 * @version March 5, 2020, 10:12 pm UTC
 *
 * @property integer cedula
 * @property string nombre
 * @property integer telefono
 */
class clientes extends Model
{

    public $table = 'clientes';
    



    public $fillable = [
        'cedula',
        'nombre',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cedula' => 'integer',
        'nombre' => 'string',
        'telefono' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
