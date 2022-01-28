<?php

use Illuminate\Support\Facades\Route;

use App\http\controllers\Jobscontroller;


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

    Route::get('index',[Jobscontroller::class,'index']);

    Route::get('fresher',[Jobscontroller::class,'fresher']);

    Route::get('jobpost',[Jobscontroller::class,'jobpost']);

    Route::post('jobpost-form',[Jobscontroller::class,'job']);

    Route::get('uidevop',[Jobscontroller::class,'uidevop']);

    Route::get('exp',[Jobscontroller::class,'exp']);

    Route::post('store-form', [Jobscontroller::class,'store']);
    
    Route::post('exp-form', [Jobscontroller::class,'experience']);

    Route::get('adminlogin',[Jobscontroller::class,'adminlogin']);

    Route::post('adlogin-form', [Jobscontroller::class,'adlogin']);

    Route::get('admindash',[Jobscontroller::class,'admindash'])->middleware('auth');
   
    Auth::routes();

    Route::get('insert',[jobs::class,'insertform']);

    Route::get('insert',[Fresher::class,'insertform']);

    Route::get('insert',[Experienced::class,'insertform']);

    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['middleware' => ['auth']], function() {
         Route::get('logout', 'LogoutController@perform')->name('logout.perform');});

    Route::get('delete/{id}/{from}','JobsController@destroy')->name('delete');


      Route::get('books.show',[Jobscontroller::class,'show']);