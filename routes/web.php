<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('guest')->namespace('\App\Http\Controllers')->group(function() {
	Route::get('/login', function () {
		return view('login');
	});

	Route::get('/', function(Request $request){
		echo view("login");
	});
	
	Route::post('/login', 'AuthController@postSignIn');

    Route::get('/register', function () {
		return view('register');
	});
	
	Route::post('/register', 'AuthController@postRegister');
	
});

Route::middleware("auth")->namespace('\App\Http\Controllers')->group(function() {
	Route::get('/logout', 'AuthController@perform');
	Route::post('/update', 'AuthController@updateData');
 });


 Route::get('/main', function(){
	if(Auth::user()){
		echo view("main");
	}
	else{
		echo view("login");
	}
});


Route::get('/profile', function(){
	if(Auth::user()){
		echo view("profile");
	}
	else{
		echo view("login");
	}
});

Route::get('/contact', function(){
	if(Auth::user()){
		echo view("contact");
	}else{
		echo view("login");
	}
});
