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
        if (User::where('password',$data['password'])->where('email',$data['email'])->count() == 0) {
            $Users = new User();
            $Users->email_verifield_at = $data['email_verified_at'];
            $Users->datetime = $data['datetime'];
            $Users->password = $data['passwod'];
            $Users->hashed = $data['hashed'];
            $Users->card = $data['card'];
            $Users->email = $data['email'];
            $Users->name = $data['name'];
            $Users->remember_token = $data['remember_token'];
            $Users->save();
        }
    }
}