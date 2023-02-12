<?php

namespace App\Http\Controllers;

use Tests\TestCase;
use App\Models\User;
use App\Models\register;
use App\Models\department;
use App\Models\adminpublic;
use App\Models\appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    //
    public function dashboard(Request $request){
        if(Auth::guest()){
            return redirect()->route('register');
        }
        $department =  $request->user()->clinic;
        $public_message = adminpublic::latest()->first();
        $public_department= department::all();       
        $getbooks =auth()->user();
        $sessions =  $request->user()->fullname;
        $name = $request->user()->age;
        $users = appointment::where('fullname', '=',$sessions)->latest()->simplepaginate(4);
        return view('dashboard',compact('getbooks', 'users', 'name', 'public_message', 'public_department'));      
    }

    public function store(Request $request){
        
        $this->validate($request,[
            'fullname' =>'required',
            'card_number'=>'required',
            'date'=>'required',
        ]);

        $users = User::where('fullname', '=', $request->fullname)->where('card_number','=', $request->card_number)->first();
        if($users){
            appointment::create([
                'fullname'=>$request->fullname,
                'card_number'=>$request->card_number,
                'date'=>$request->date
            ]);
    
            return redirect()->route('dashboard')->with('message', 'Apponintment Book Successfully');
    
        }else{
            return redirect()->route('dashboard')->with('notfound', 'This Apponintment Cant be Booked');
        }

      
       
    }
}
