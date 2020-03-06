<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtipo_vehiculoRequest;
use App\Http\Requests\Updatetipo_vehiculoRequest;
use App\Repositories\tipo_vehiculoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tipo_vehiculoController extends AppBaseController
{
    /** @var  tipo_vehiculoRepository */
    private $tipoVehiculoRepository;

    public function __construct(tipo_vehiculoRepository $tipoVehiculoRepo)
    {
        $this->tipoVehiculoRepository = $tipoVehiculoRepo;
    }

    /**
     * Display a listing of the tipo_vehiculo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoVehiculos = $this->tipoVehiculoRepository->paginate(10);

        return view('tipo_vehiculos.index')
            ->with('tipoVehiculos', $tipoVehiculos);
    }

    /**
     * Show the form for creating a new tipo_vehiculo.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_vehiculos.create');
    }

    /**
     * Store a newly created tipo_vehiculo in storage.
     *
     * @param Createtipo_vehiculoRequest $request
     *
     * @return Response
     */
    public function store(Createtipo_vehiculoRequest $request)
    {
        $input = $request->all();

        $tipoVehiculo = $this->tipoVehiculoRepository->create($input);

        Flash::success('Tipo Vehiculo saved successfully.');

        return redirect(route('tipoVehiculos.index'));
    }

    /**
     * Display the specified tipo_vehiculo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoVehiculo = $this->tipoVehiculoRepository->find($id);

        if (empty($tipoVehiculo)) {
            Flash::error('Tipo Vehiculo not found');

            return redirect(route('tipoVehiculos.index'));
        }

        return view('tipo_vehiculos.show')->with('tipoVehiculo', $tipoVehiculo);
    }

    /**
     * Show the form for editing the specified tipo_vehiculo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoVehiculo = $this->tipoVehiculoRepository->find($id);

        if (empty($tipoVehiculo)) {
            Flash::error('Tipo Vehiculo not found');

            return redirect(route('tipoVehiculos.index'));
        }

        return view('tipo_vehiculos.edit')->with('tipoVehiculo', $tipoVehiculo);
    }

    /**
     * Update the specified tipo_vehiculo in storage.
     *
     * @param int $id
     * @param Updatetipo_vehiculoRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetipo_vehiculoRequest $request)
    {
        $tipoVehiculo = $this->tipoVehiculoRepository->find($id);

        if (empty($tipoVehiculo)) {
            Flash::error('Tipo Vehiculo not found');

            return redirect(route('tipoVehiculos.index'));
        }

        $tipoVehiculo = $this->tipoVehiculoRepository->update($request->all(), $id);

        Flash::success('Tipo Vehiculo updated successfully.');

        return redirect(route('tipoVehiculos.index'));
    }

    /**
     * Remove the specified tipo_vehiculo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoVehiculo = $this->tipoVehiculoRepository->find($id);

        if (empty($tipoVehiculo)) {
            Flash::error('Tipo Vehiculo not found');

            return redirect(route('tipoVehiculos.index'));
        }

        $this->tipoVehiculoRepository->delete($id);

        Flash::success('Tipo Vehiculo deleted successfully.');

        return redirect(route('tipoVehiculos.index'));
    }
}
