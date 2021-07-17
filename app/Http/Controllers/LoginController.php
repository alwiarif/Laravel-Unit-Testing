<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function create(){

        return view('auth.login');

    }

    public function store(Request $request){

       
        Auth::attempt($request->only('email', 'password'));

        return redirect(RouteServiceProvider::HOME);

    }


}
