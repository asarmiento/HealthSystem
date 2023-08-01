<?php


namespace App\Http\Controllers;


use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalsController extends Controller
{

    public function __construct()
    {
      //  $this->middleware('auth');
    }

    public function listsHospital()
    {
        return Hospital::all();
    }

    public function edit($id)
    {
        return Hospital::find($id);
    }

    public function destroy($id)
    {
        $hospital = Hospital::find($id);

        if($hospital){
            return $hospital->delete();
        }

        return false;
    }


    public function store(Request $request)
    {
        $data = $request->all();

        if(Hospital::where('name',$data['name'])->count() == 0){

            $hospital = new Hospital();
            $hospital->name = $data['name'];
            $hospital->save();
        }
    }
}
