<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{

    public function login(){
        return view('user/login');
    }

    public function registoUser(){
        return view('user/registo');
    }


    public function autenticarUser(Request $request)
    {
        if(Auth::attempt( ['email' => $request->input('email'), 'password' => $request->input('password')] )){

            return redirect()->route('/');
          }
        return redirect()->back();
    }


    public function salvarUser(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);

        $user = User::create([
            'name' => $request->input('nome'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))]);

        Auth::login($user);

        return redirect()->route('/');

    }




    public function logout(){

        Auth::logout();
        return redirect()->route('user');
    }

}
