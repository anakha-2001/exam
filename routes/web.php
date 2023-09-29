<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[StudentController::class,'index']);
Route::post('add-student',[StudentController::class,'store'])->name('add-student');
Route::get('delete-student/{id}',[StudentController::class,'destroy'])->name('delete-student');
Route::get('view-student/{id}',[StudentController::class,'show'])->name('view-student');
Route::post('update-student',[StudentController::class,'edit'])->name('update-student');

