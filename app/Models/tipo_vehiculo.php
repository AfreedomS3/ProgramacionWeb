<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class tipo_vehiculo
 * @package App\Models
 * @version March 5, 2020, 10:15 pm UTC
 *
 * @property string tipo_vehiculo
 */
class tipo_vehiculo extends Model
{

    public $table = 'tipo_vehiculo';
    



    public $fillable = [
        'tipo_vehiculo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipo_vehiculo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
