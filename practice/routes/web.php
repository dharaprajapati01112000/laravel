<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formcontroller;
use App\Models\Student;

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
