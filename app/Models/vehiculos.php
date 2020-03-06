<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class vehiculos
 * @package App\Models
 * @version March 5, 2020, 10:22 pm UTC
 *
 * @property string placa
 * @property string color
 * @property string modelo
 * @property string numero_motor
 * @property integer fk_tipo_vehiculo
 * @property integer fk_cliente
 */
class vehiculos extends Model
{

    public $table = 'vehiculos';
    



    public $fillable = [
        'placa',
        'color',
        'modelo',
        'numero_motor',
        'fk_tipo_vehiculo',
        'fk_cliente'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'placa' => 'string',
        'color' => 'string',
        'modelo' => 'string',
        'numero_motor' => 'string',
        'fk_tipo_vehiculo' => 'integer',
        'fk_cliente' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
