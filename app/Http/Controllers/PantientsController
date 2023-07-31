<?php


namespace App\Http\Controllers;


use App\Models\Pantients;
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
        return Pantients::all();
    }


    public function edit($id)
    {
        return Pantients::find($id);
    }


    public function destroy($id)
    {
        $driver = Pantients::find($id);

        if ($driver == null) {
            return false;
        }

        return $driver->delete();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if (Pantients::where('card',$data['card'])->count() == 0) {
            $driver = new Pantients();
            $driver->name = $data['name'];
            $driver->last_name = $data['last_name'];
            $driver->cell = $data['cell'];
            $driver->phone = $data['phone'];
            $driver->email = $data['email'];
            $driver->hospital_id = $data['hospital_id'];
            $driver->save();
        }
    }
}