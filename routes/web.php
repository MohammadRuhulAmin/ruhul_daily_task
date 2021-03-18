<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tution\TutionController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tutioni',[TutionController::class,'index']);
Route::post('/tutioni/store/',[TutionController::class,'store']);
Route::get('/tutioni/all/',[TutionController::class,'alltutionilist']);
Route::post('/tutioni/delete/{id}',[TutionController::class,'deleteTutioni']);
Route::get('/tutioni/edit/{id}',[TutionController::class,'edit']);
Route::post('/tutioni/update/{student_id}',[TutionController::class,'update']);