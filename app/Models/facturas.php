<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class facturas
 * @package App\Models
 * @version March 5, 2020, 11:03 pm UTC
 *
 * @property string valor
 * @property string fecha
 * @property string hora_entrada
 * @property string hora_salida
 * @property integer fk_vehiculos
 */
class facturas extends Model
{

    public $table = 'facturas';
    



    public $fillable = [
        'valor',
        'fecha',
        'hora_entrada',
        'hora_salida',
        'fk_vehiculos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'valor' => 'string',
        'fecha' => 'date',
        'hora_entrada' => 'datetime',
        'hora_salida' => 'datetime',
        'fk_vehiculos' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
