<?php

use App\Http\Controllers\InformationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Task\TaskController;
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


//########################## Tutioni ##################################


Route::get('/tutioni',[TutionController::class,'index']);
Route::post('/tutioni/store/',[TutionController::class,'store']);
Route::get('/tutioni/all/',[TutionController::class,'alltutionilist']);
Route::post('/tutioni/delete/{id}',[TutionController::class,'deleteTutioni']);
Route::get('/tutioni/edit/{id}',[TutionController::class,'edit']);
Route::post('/tutioni/update/{student_id}',[TutionController::class,'update']);


//#########################################################################


//############################ Task #######################################


Route::get('/task/',[TaskController::class,'index']);
Route::get('/task/all/',[TaskController::class,'showAllTask']);
Route::post('/task/store/',[TaskController::class,'store']);
Route::post('/task/delete/{id}',[TaskController::class,'deleteTask']);
Route::get('/task/edit/{id}',[TaskController::class,'editTask']);
Route::post('/task/update/{task_id}',[TaskController::class,'updateTask']);
Route::post('/task/group/delete/',[TaskController::class,'taskGroupDelete']);


 
//########################################################################


//############################### Search Task #################################


Route::get('/task/search/items/',[SearchController::class,'searchItem']);



//##########################################################################



//################################# Information ############################


Route::get('/information/',[InformationController::class,'index']);
Route::get('/student/email/',[InformationController::class,'studentEmailValidation']);

//##########################################################################




