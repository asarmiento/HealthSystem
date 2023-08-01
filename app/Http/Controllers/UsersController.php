<?php


namespace App\Http\Controllers;


use App\Models\Users;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listUsers()
    {
        return Users::all();
    }


    public function edit($id)
    {
        return Users::find($id);
    }


    public function destroy($id)
    {
        $Users = Users::find($id);

        if ($Users == null) {
            return false;
        }

        return $Users->delete();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if (Users::where('card',$data['card'])->count() == 0) {
            $Users = new Users();
            $Users->name = $data['name'];
            $Users->last_name = $data['last_name'];
            $Users->card = $data['card'];
            $Users->phone = $data['phone'];
            $Users->email = $data['email'];
            $Users->hospital_id = $data['hospital_id'];
            $Users->save();
        }
    }
}