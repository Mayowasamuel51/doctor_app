<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(){
        return view('Apponitment.login');
    }

    public function storelogin(Request $request){
        $credentials = $request->validate([        
            'phone_number'=>'required',
            'password'=>'required',
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
      

    }
}
