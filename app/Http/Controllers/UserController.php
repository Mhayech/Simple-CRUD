<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Return the Registration Interface

    public function registerView(){
        return view('register');
    }


    public function logout(){
        auth()->logout();
        return redirect('/');
    }

    public function login(Request $request){
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if(auth()->attempt($data)){
            return redirect('/');
        }else{
            echo 'Login Failed';
        }

    }

    public function register(Request $request){
        $data = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password'=> 'required|min:8',
        ]);

        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        auth()->login($user);
        return redirect('/');
        
    }
}
