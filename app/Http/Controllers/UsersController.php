<?php


namespace App\Http\Controllers;


use App\Models\User;
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
        return User::all();
    }


    public function edit($id)
    {
        return User::find($id);
    }


    public function destroy($id)
    {
        $Users = User::find($id);

        if ($Users == null) {
            return false;
        }

        return $Users->delete();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if (User::where('card',$data['card'])->count() == 0) {
            $Users = new User();
            $Users->name = $data['email_verified_at'];
            $Users->last_name = $data['datetime'];
            $Users->card = $data['password'];
            $Users->phone = $data['hashed'];
            $Users->email = $data['email'];
            $Users->hospital_id = $data['hospital_id']; 
            $Users->email = $data['name'];
            $Users->email = $data['remember_token'];
            $Users->save();
        }
    }
}