<?php

use Illuminate\Support\Facades\Route;


// --------------
// Frontend
// --------------


Route::get('/', function(){
    return view('welcome');
});
Route::get('/admin','admin\AdminController@index');

// --------------
// Admin
// --------------

// Route::group(['prefix'=>'admin', 'middleware' =>'role'],function (){

//     Route::get('/',"admin\Admin@index");

// });

// --------------
// User
// --------------

// user login & reg

// Route::get('/register',"user\GeneralUser@index");
// Route::post('/register/save',"user\GeneralUser@store");

// Route::get('/login/{url?}',"user\GeneralUser@showLogin");
// Route::post('/login/match',"user\GeneralUser@matchLogin");
// Route::get('/logout',"user\GeneralUser@logout");
                                                                                        
// all-user-action

// Route::group(['prefix' => 'user','middleware' =>'useraction'], function () {

// });

