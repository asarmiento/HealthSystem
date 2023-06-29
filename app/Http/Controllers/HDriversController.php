<?php


namespace App\Http\Controllers;


use App\Models\HDriver;
use Illuminate\Http\Request;

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
        $driver =  HDriver::find($id);

        if($driver){
         return   $driver->delete();
        }
        return false;
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $driver = new HDriver();
        $driver->name = $data['name'];
        $driver->last_name = $data['last_name'];
        $driver->card = $data['card'];
        $driver->phone = $data['phone'];
        $driver->email = $data['email'];
        $driver->hospital_id = $data['hospital_id'];
        $driver->save();
    }
}
