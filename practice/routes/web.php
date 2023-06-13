<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formcontroller;
use App\Models\Student;
use App\Http\Controllers\employeecontroller;
use App\Http\Controllers\compnaycontroller;
use App\Http\Controllers\authcontroller;
use App\Models\Company;
use App\Models\Employee;

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
Route::get('/', function (){
    return view('index');

});
Route::get('/register',[formcontroller::class,'index'])->name('student.create');
Route::post('/register',[formcontroller::class,'register']);
// Route::get('/form',[formcontroller::class,'index']);
Route::get('/form/delete/{id}',[formcontroller::class,'delete'])->name('student.delete');
Route::get('/form/edit/{id}',[formcontroller::class,'edit'])->name('student.edit');
Route::post('/form/update/{id}',[formcontroller::class,'update'])->name('student.update');
Route::post('/form',[formcontroller::class,'register']);
Route::get('/form',[formcontroller::class,'view']);

// Route::get('/form', function (){
//     $student = Student::all();
//     echo "<pre>";
//     print_r($student->toArray());
// });
Route::get('/', function (){
    return view('home');

});
Route::get('/company',[compnaycontroller::class,'index'])->name('company.create');
Route::post('/company',[compnaycontroller::class,'register']);
Route::get('/company-view',[compnaycontroller::class,'view']);
Route::get('/company-view/delete/{id}',[compnaycontroller::class,'delete'])->name('company.delete');
Route::get('/company-view/edit/{id}',[compnaycontroller::class,'edit'])->name('company.edit');
Route::post('/company-view/update/{id}',[compnaycontroller::class,'update'])->name('company.update');


Route::get('/employee',[employeecontroller::class,'index'])->name('employee.create');
Route::post('/employee',[employeecontroller::class,'register']);
Route::get('/employee-view',[employeecontroller::class,'view']);
Route::get('/employee-view/delete/{id}',[employeecontroller::class,'delete'])->name('employee.delete');
Route::get('/employee-view/edit/{id}',[employeecontroller::class,'edit'])->name('employee.edit');
Route::post('/employee-view/update/{id}',[employeecontroller::class,'update'])->name('employee.update');


Route::get('/login',[authcontroller::class,'login']);
Route::get('/signup',[authcontroller::class,'signup']);
