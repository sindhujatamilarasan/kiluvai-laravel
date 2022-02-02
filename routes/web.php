<?php

use Illuminate\Support\Facades\Route;

use App\http\controllers\JobsController;


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
    
    //for basic welcome page
    Route::get('/', function () {
             return view('welcome');
        });

    //for careers page
    Route::get('index',[JobsController::class,'index']);
    
    Route::get('job/{id}/fresher',[JobsController::class,'fresher']);

    Route::get('job/{id}/exp',[JobsController::class,'exp']);

    Route::post('store-form', [JobsController::class,'store']);

    Route::post('exp-form', [JobsController::class,'experience']);
       
    Route::get('admindash',[JobsController::class,'admindash'])->middleware('auth');

    Route::get('jobpost',[JobsController::class,'jobpost'])->middleware('auth');

    Route::post('jobpost-form',[JobsController::class,'job']);

    Route::get('postedjobs',[JobsController::class,'postedjobs'])->middleware('auth');

    Route::get('edit/{id}',[JobsController::class,'edit'])->middleware('auth');
   
    Auth::routes();

    Route::get('insert',[jobs::class,'insertform']);

    Route::get('insert',[Fresher::class,'insertform']);

    Route::get('insert',[Experienced::class,'insertform']);

    Route::group(['middleware' => ['auth']], function() 
    {
         Route::get('logout', 'LogoutController@perform')->name('logout.perform');});

    Route::get('delete/{id}/{from}','JobsController@destroy')->name('delete');
  
    Route::get('delete/{id}','JobsController@delete')->name('jobs/delete');

    Route::post('update/{id}',[JobsController::class,'update']);