<?php


namespace App\Http\Controllers;


use App\Models\HDriver;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class HDriversController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listDrivers()
    {
        return HDriver::all();
    }


    public function edit($id)
    {
        return HDriver::find($id);
    }


    public function destroy($id)
    {
        $driver = HDriver::find($id);

        if ($driver == null) {
            return false;
        }

        return $driver->delete();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if (HDriver::where('card',$data['card'])->count() == 0) {
            $HDriver = new HDriver();
            $HDriver->last_name = $data['last_name'];
            $HDriver->name = $data['name'];
            $HDriver->phone = $data['phone'];
            $HDriver->email = $data['email'];
            $HDriver->hospital_id = $data['hospital_id'];
            $HDriver->save();
        }
    }
}
