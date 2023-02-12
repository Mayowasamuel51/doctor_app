<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class input extends Controller
{
    //
    public function sigh(){
        return view('input');
    }
    public function input(Request $request){
        // var_dump($request->all());
        // var_dump($request->only(['name']));
        if($request->has('may')){
            echo 'may';
        }else{
            echo 'false';
        }
    }
}
