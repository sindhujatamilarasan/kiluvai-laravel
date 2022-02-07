<?php

use Illuminate\Support\Facades\Route;

use App\http\controllers\InterviewController;


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
   

    Route::group(['middleware' => ['auth']], function() 
    {

    Route::get('logout', 'LogoutController@perform')->name('logout.perform');});

    Route::get('delete/{id}/{from}','InterviewController@destroy')->name('delete');

    Route::get('details/{id}/{from}','InterviewController@details')->name('details');
  
    Route::get('delete/{id}','InterviewController@delete')->name('jobs/delete');

    Route::post('update/{id}',[InterviewController::class,'update']);




    /* sdfdf */


    
    Route::get('index','InterviewController@index')->name('index');

    Route::get('job/{id}/fresher','InterviewController@fresher');

    Route::get('job/{id}/exp','InterviewController@exp');
 
    Route::post('store-form','InterviewController@store')->name('store')->middleware('auth'); 

    Route::post('exp-form','InterviewController@experience')->middleware('auth'); 

        
    Route::get('admindash','InterviewController@admindash')->middleware('auth');


    Route::get('jobpost','InterviewController@jobpost')->middleware('auth');
 
    Route::post('jobpost-form','InterviewController@job');
 
    Route::get('postedjobs','InterviewController@postedjobs')->middleware('auth')->name('postedjobs');
 
    Route::get('edit/{id}','InterviewController@edit')->middleware('auth');

    Route::get('view/{id}','InterviewController@view')->middleware('auth');
 
   
    Auth::routes();

    Route::get('insert',[jobs::class,'insertform']);

    Route::get('insert',[Fresher::class,'insertform']);

    Route::get('insert',[Experienced::class,'insertform']);



    /* sad */