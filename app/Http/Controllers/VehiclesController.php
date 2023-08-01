<?php


namespace App\Http\Controllers;


use App\Models\Vehicles;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class VehiclesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listVihicles()
    {
        return Vihicles::all();
    }


    public function edit($id)
    {
        return Vehicles::find($id);
    }


    public function destroy($id)
    {
        $driver = Vehicles::find($id);

        if ($Vehicles == null) {
            return false;
        }

        return $Vehicles->delete();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if (Vehicles::where('card',$data['card'])->count() == 0) {
            $Vehicles = new Vehicles();
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