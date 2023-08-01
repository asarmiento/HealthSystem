<?php


namespace App\Http\Controllers;


use App\Models\HTransfer;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class HTransfersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listHTransfer()
    {
        return HTransfer::all();
    }


    public function edit($id)
    {
        return HTransfer::find($id);
    }


    public function destroy($id)
    {
        $driver = HTransfer::find($id);

        if ($driver == null) {
            return false;
        }

        return $driver->delete();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if (HTransfer::where('patient_id',$data['patient_id'])->count() == 0) {
            $driver = new HDriver();
            $driver->date = $data['date'];
            $driver->origin = $data['origin'];
            $driver->destination = $data['destination'];
            $driver->stretcher = $data['stretcher'];
            $driver->companion = $data['companion'];
            $driver->patient_id = $data['patient_id'];
            $driver->driver_id = $data['driver_id'];
            $driver->vehicle_id = $data['vehicle_id'];
            $driver->save();
        }
    }
}