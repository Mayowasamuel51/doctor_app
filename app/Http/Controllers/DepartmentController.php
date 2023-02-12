<?php

namespace App\Http\Controllers;

use App\Models\department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //
    //this Controller will be for setting pulic annoccment and department annoccment to the paitent dashboard 

    public function Department_nose_ear(){
        return view('department.nose_ear');
    }
    public function display(Request $request){
        $this->validate($request,[
            'nose_ear' =>'required'
        ]);
        department::create([
            'DEPARTMENTOFEARNOSETHROAT'=>$request->nose_ear
        ]);
        $m= 'MESSAGE SUCCESSFULLY SENT';
        return view('department.display', compact('m'));
    }
    public function medical(){
        return view('department.medical');
    }
    public function medicalstore(Request $request){
        $this->validate($request,[
            'medical' =>'required'
        ]);
        department::create([
            'MEDICALDEPARTMENT'=>$request->medical
        ]);
        $m= 'MESSAGE SUCCESSFULLY SENT';
        return view('department.display', compact('m'));
    }

    public function pharmacy(){
        return view('department.pharmacy');
    }
    public function pharmacystore(Request $request){
        $this->validate($request,[
            'text' =>'required'
        ]);
        department::create([
            'PHARMACYDEPARTMENT'=>$request->text
        ]);
        $m= 'MESSAGE SUCCESSFULLY SENT';
        return view('department.display', compact('m'));
    }

    public function nursing(){
        return view('department.nursing');
    }
    public function nursingstore(Request $request){
        $this->validate($request,[
            'text' =>'required'
        ]);
        department::create([
            'NURSINGSDEPARTMENT'=>$request->text
        ]);
        $m= 'MESSAGE SUCCESSFULLY SENT';
        return view('department.display', compact('m'));
    }

    public function radiology(){
        return view('department.radiology');
    }

    public function radiologystore(Request $request){
        $this->validate($request,[
            'text' =>'required'
        ]);
        department::create([
            'RADIOLOGYXrayDEPARTMENT'=>$request->text
        ]);
        $m= 'MESSAGE SUCCESSFULLY SENT';
        return view('department.display', compact('m'));
    }

    public function pathology(){
        return view('department.pathology');
    }
    public function pathologystore(Request $request){
        $this->validate($request,[
            'text' =>'required'
        ]);
        department::create([
            'PATHOLOGYDEPARTMENT'=>$request->text
        ]);
        $m= 'MESSAGE SUCCESSFULLY SENT';
        return view('department.display', compact('m'));
    }

}
