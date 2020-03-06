<?php

namespace App\Repositories;

use App\Models\tipo_vehiculo;
use App\Repositories\BaseRepository;

/**
 * Class tipo_vehiculoRepository
 * @package App\Repositories
 * @version March 5, 2020, 10:15 pm UTC
*/

class tipo_vehiculoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_vehiculo'
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
        return tipo_vehiculo::class;
    }
}
