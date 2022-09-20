<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DoctorController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[HomeController::class, 'index']);

Route::get('/home',[HomeController::class, 'redirect'])->middleware('auth','verified');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/add_doctor_view',[AdminController::class, 'addview']);

Route::post('/upload_doctor',[AdminController::class, 'upload']);

Route::post('/appointment',[HomeController::class, 'appointment']);

Route::get('/myappointment',[HomeController::class, 'myappointment']);

Route::get('/cancel_appoint/{id}',[HomeController::class, 'cancel_appoint']);


Route::get('/approved/{id}',[AdminController::class, 'approved']);

Route::get('/cancelled/{id}',[AdminController::class, 'cancelled']);

Route::get('/showdoctor',[AdminController::class, 'showdoctor']);




Route::get('/deletedoctor/{id}',[AdminController::class, 'deletedoctor']);

Route::get('/updatedoctor/{id}',[AdminController::class, 'updatedoctor']);

Route::post('/editdoctor/{id}',[AdminController::class, 'editdoctor']);



Route::get('/emailview/{id}',[AdminController::class, 'emailview']);

Route::post('/sendemail/{id}',[AdminController::class, 'sendemail']);

Route::get('/search',[AdminController::class, 'search']);


Route::get('/getDoctors', [EmployeeController::class, 'getAllDoctors'])->name('getDoctors');

Route::get('/downloadDoctors', [EmployeeController::class, 'downloadDoctors'])->name('downloadDoctors');

Route::get('/showappointment',[AdminController::class, 'showappointment']);



Route::get('/about-us',[HomeController::class, 'about_us'])->name('about_us');

Route::get('/doctors',[HomeController::class, 'doctors'])->name('doctors');

Route::get('/news',[HomeController::class, 'news'])->name('news');

Route::get('/make-appointment',[HomeController::class, 'make_appointment'])->name('make_appointment');






Route::get('/doctorshowappointment',[DoctorController::class, 'doctorshowappointment']);
Route::get('/emailview/{id}',[DoctorController::class, 'emailview']);
Route::post('/sendemail/{id}',[DoctorController::class, 'sendemail']);
Route::get('/search',[DoctorController::class, 'search']);
Route::get('/approved/{id}',[DoctorController::class, 'approved']);
Route::get('/cancelled/{id}',[DoctorController::class, 'cancelled']);







Route::get('doctorschart', [\App\Http\Controllers\ChartController::class,'index']);
Route::get('appointmentschart', [\App\Http\Controllers\ChartController::class,'appointments']);
Route::get('appstatus', [\App\Http\Controllers\ChartController::class,'linechart']);
Route::get('appointmentstatus', [\App\Http\Controllers\ChartController::class,'appointmentstatus']);


