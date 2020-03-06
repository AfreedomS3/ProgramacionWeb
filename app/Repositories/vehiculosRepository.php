<?php

namespace App\Repositories;

use App\Models\vehiculos;
use App\Repositories\BaseRepository;

/**
 * Class vehiculosRepository
 * @package App\Repositories
 * @version March 5, 2020, 10:22 pm UTC
*/

class vehiculosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'placa',
        'color',
        'modelo',
        'numero_motor',
        'fk_tipo_vehiculo',
        'fk_cliente'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return vehiculos::class;
    }
}
