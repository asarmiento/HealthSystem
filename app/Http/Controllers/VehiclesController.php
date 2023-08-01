<?php


namespace App\Http\Controllers;


use App\Models\Vehicle;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class VehiclesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listVehicles()
    {
        return Vehicle::all();
    }


    public function edit($id)
    {
        return Vehicle::find($id);
    }


    public function destroy($id)
    {
        $driver = Vehicle::find($id);

        if ($Vehicle == null) {
            return false;
        }

        return $Vehicle->delete();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if (Vehicle::where('card',$data['card'])->where('year',$data['year'])->count() == 0) {
            $Vehicles = new Vehicle();
            $Vehicles->plate = $data['plate'];
            $Vehicles->type = $data['type'];
            $Vehicles->card = $data['card'];
            $Vehicles->full_type = $data['full_type'];
            $Vehicles->year = $data['year'];
            $Vehicles->hospital_id = $data['hospital_id'];
            $Vehicles->save();
        }
    }
}