<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function login(){
        $credentials = $this->validate(request(),[
            'email' =>'email|required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credentials))
        {
            return 'Tu sesion ha iniciado';
        }

        return back()
            ->withErrors(['email'=>'No concuerda con la Base de Datos'])
            ->withInput(request(['email']));

    }
}
