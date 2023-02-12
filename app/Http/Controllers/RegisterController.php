<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\register;
use App\Models\appointment;
use App\Models\clinic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller{
    //
    public function store(Request $request){

        // dd(request()->all());
      

        $credentials = $request->validate([
            'fullname' =>'required',
            'phone_number'=>'required|unique:users|max:255',
            'password'=>'required',
            'age'=>'required',
            'clinic'=>'required',
        ]);

        $card= rand(121,929);
        $card_number = $card;
       User::create([
            'fullname'=>$request->fullname,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email,
            'card_number'=>$card_number,
            'clinic'=> trim( $request->clinic),
            'age'=>$request->age,
            'password'=>Hash::make($request->password)
        ]);
        if($request->clinic === 'MEDICAL DEPARTMENT'){
            clinic::create([
                'MEDICALDEPARTMENT'=>$request->fullname
            ]);
        }elseif($request->clinic === 'RADIOLOGY (X-ray DEPARTMENT'){
            clinic::create([
                'RADIOLOGYX-rayDEPARTMENT'=>$request->fullname
            ]);
        }elseif($request->clinic === 'NURSING DEPARTMENT'){
            clinic::create([
                'NURSINGDEPARTMENT'=>$request->fullname
            ]);
        }elseif($request->clinic === 'PHARMACY DEPARTMENT'){
            clinic::create([
                'PHARMACYDEPARTMENT'=>$request->fullname
            ]);
        }elseif($request->clinic === 'DEPARTMENT OF ANAESTHESIA'){
            clinic::create([
                'DEPARTMENTOFANAESTHESIA'=>$request->fullname
            ]);
        }elseif($request->clinic === 'DEPARTMENT OF EAR NOSE THROAT'){
            clinic::create([
                'DEPARTMENTOFEARNOSETHROAT'=>$request->fullname
            ]);
        }elseif($request->clinic === 'DEPARTMENT OF CHIID DENTAL HEALTH'){
            clinic::create([
                'DEPARTMENTOFCHIIDDENTALHEALTH'=>$request->fullname
            ]);
        }elseif($request->clinic === 'DEPARTMENT OF FAMILY MEDICINE'){
            clinic::create([
                'DEPARTMENTOFFAMILYMEDICINE'=>$request->fullname
            ]);
        }
        
         // $request->session()->flash('status', 'U have register Thank u ');
        // auth()->attempt($request->only($enter_user));
        if (auth()->attempt($credentials)) {
            // $request->session()->regenerate();
            return redirect()->intended('dashboard');
            // return redirect()->route('dashboard');
        } // return redirect()->route('dashboard');
        }

        public function apponitment(Request $request){
            // $check_patient = User::where('name' ,'=', $request->sunname)->whereExist()
            //check if the user has registered ,

            $credentials = $request->validate([
                    'p_surname' =>'required',
                    'p_card_number'=>'required',
                    'p_date'=>'required',
                ]);
            $check_patient = User::where('surname', '=' ,$request->p_surname)->where('card_number' , '=', $request->p_card_number)->first();
            if($check_patient){
                appointment::create([
                    'fullname'=>$request->p_surname,
                    'card_number'=>$request->p_card_number,
                    'date'=>$request->p_date
                ]);
                return redirect()->route('register')->with('message', 'Apponintment Booked SuccessFully');
            }else{
               return redirect()->route('register')->with('notfound', 'This user has not registered as a patient ');    
            }

        }
   
}
