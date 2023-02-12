<?php

use App\Http\Controllers\input;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApponitmentController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DepartmentController;




//surgery 
Route::get('allSurgerys',[AdminController::class, 'allSurgerys'])->name('allSurgerys');
Route::get('booksurgery', [AdminController::class, 'surgery'])->name('booksurgery');
Route::post('surgerystore', [AdminController::class, 'surgerystore'])->name('surgerystore');


// end surgery



// department new 
// Route::get('department_nose_ear', [DepartmentController::class, 'Department_nose_ear']);
Route::get('department_nose_ear', [DepartmentController::class, 'Department_nose_ear']);
Route::post('display',[DepartmentController::class,'display'])->name('display');
Route::get('medical', [DepartmentController::class, 'medical']);
Route::post('medicalstore',[DepartmentController::class,'medicalstore'])->name('medicalstore');
Route::get('pharmacy', [DepartmentController::class, 'pharmacy']);
Route::post('pharmacystore', [DepartmentController::class, 'pharmacystore'])->name('pharmacystore');
Route::get('nursing', [DepartmentController::class, 'nursing']);
Route::post('nursingstore', [DepartmentController::class, 'nursingstore'])->name('nursingstore');

Route::get('radiology', [DepartmentController::class, 'radiology']);
Route::post('radiologystore', [DepartmentController::class, 'radiologystore'])->name('radiologystore');

Route::get('pathology', [DepartmentController::class, 'pathology']);
Route::post('pathologystore', [DepartmentController::class, 'pathologystore'])->name('pathologystore');
//department news





Route::get('/',function(){
    return view('test');
});


Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('storelogin',[LoginController::class,'storelogin'])->name('storelogin');

// dashboard
Route::get('dashboard',[DashboardController::class ,'dashboard'])->name('dashboard');
Route::post('app',[DashboardController::class,'store'])->name('app');
Route::post('logout',[LogoutController::class,'logout'])->name('logout');
Route::get('make_appointment',[ApponitmentController::class,'dashapponintment'])->name('make_appointment');
//dashboard


///admin
Route::get('admin',[ AdminController::class,'adminpage']);
// Route::get('message',[ AdminController::class,'Message'])->name('message');
Route::get('public',[ AdminController::class,'PublicM'])->name('public');
Route::post('storepublic',[ AdminController::class,'storepublic'])->name('storepublic');
Route::get('display',[AdminController::class ,'finduser'])->name('display');
//admin end 

//this is register into database
Route::get('appointment',[FormController::class,'index']);
Route::get('/register',[FormController::class,'register'])->name('register');

Route::post('store',[RegisterController::class,'store'])->name('store');
Route::post('apponitment',[RegisterController::class,'apponitment'])->name('apponitment');



// Route::get('/', function () {
//     return view('welcome');
// });
// make_appointment
// /?tags={{$tag}}
Route::get('sigh',[input::class, 'sigh']);
Route::post('/sighup', [input::class, 'input'])->name('sighup');
// Route::post('sighup' ,functi