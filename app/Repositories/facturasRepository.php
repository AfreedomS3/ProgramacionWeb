<?php

namespace App\Repositories;

use App\Models\facturas;
use App\Repositories\BaseRepository;

/**
 * Class facturasRepository
 * @package App\Repositories
 * @version March 5, 2020, 11:03 pm UTC
*/

class facturasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'valor',
        'fecha',
        'hora_entrada',
        'hora_salida',
        'fk_vehiculos'
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
        return facturas::class;
    }
}
