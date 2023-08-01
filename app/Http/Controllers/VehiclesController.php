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

        if ($Vehicles == null) {
            return false;
        }

        return $Vehicles->delete();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if (Vehicle::where('card',$data['card'])->count() == 0) {
            $Vehicles = new Vehicle();
            $Vehicles->name = $data['name'];
            $Vehicles->last_name = $data['last_name'];
            $Vehicles->card = $data['card'];
            $Vehicles->phone = $data['phone'];
            $Vehicles->email = $data['email'];
            $Vehicles->hospital_id = $data['hospital_id'];
            $Vehicles->save();
        }
    }
}