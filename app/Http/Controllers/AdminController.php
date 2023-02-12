<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\clinic;
use App\Models\register;
use App\Models\adminpublic;
use App\Models\surgery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller{

    public function adminpage(){
        return view('Admin.adminpage');
    }
    public function finduser(Request $request){  
       $find_card = User::where('card_number' , '=', $request->card_number)->first();
       $total = User::where('card_number', '=', $request->card_number)->first();    
       if($find_card){        
            return view('Admin.display', compact('total'));
       }
       else{
            $nouser= 'NO PATIENT FOUND IN DATABASE';
            return  view('Admin.display', compact('nouser'));
       }
        
    }
    public function PublicM(){
        return view('Admin.public');
    }
    public function storepublic(Request $request){
        //release a public message to all users 
       $request->validate([
            'public_message' => 'required'
        ]);
        adminpublic::create([
            'public'=>$request->public_message
        ]);
        return view('Admin.public');
    }

    public function Message(){
        return view('Admin.message');
    }

    public function nose(){
        
    }

    public function surgery(){
        return view('admin.surgery');
    }
    public function surgerystore(Request $request){
        $request->validate([
            'name' => 'required',
            'surgery_type'=>'required',
            'date'=>'required',
            'clinic'=>'required'
        ]);
       
        $get_info  = clinic::where($request->clinic , '=',$request->name)->first();
        if($get_info){
            surgery::create([
                'name'=>$request->name,
                'surgery_type'=>$request->surgery_type,
                'patient_clinic'=>$request->clinic,
                'date'=>$request->date
            ]);
          
            return redirect()->route('booksurgery')->with('message', 'SURGERY BOOKED SUCCSESFULLY ');
        }else{
            return redirect()->route('booksurgery')->with('error', 'PATIENT NAME IS INVAILD  '); 
        }

    }

    public function allSurgerys(){
        $collection = surgery::all();
        return view('admin.allSurgerys', compact('collection'));
    }
}

