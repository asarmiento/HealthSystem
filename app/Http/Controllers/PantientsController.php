<?php


namespace App\Http\Controllers;


use App\Models\Patient;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class PantientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listPantients()
    {
        return Patient::all();
    }


    public function edit($id)
    {
        return Patient::find($id);
    }


    public function destroy($id)
    {
        $driver = Patient::find($id);

        if ($driver == null) {
            return false;
        }

        return $driver->delete();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if (Patient::where('name',$data['name'])->count() == 0) {
            $driver = new Patient();
            $driver->last_name = $data['last_name'];
            $driver->cell = $data['cell'];
            $driver->cell = $data['name'];
            $driver->phone = $data['phone'];
            $driver->email = $data['email'];
            $driver->hospital_id = $data['hospital_id'];
            $driver->save();
        }
    }
}