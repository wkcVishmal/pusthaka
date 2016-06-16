<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//signIn route
Route::get('/', function () {
    if(Auth::guest()){
        return view('auth/login');
    }else{
        return view('home');
    }
});
Route::post('/login', 'UserController@postSignIn');

//register route
Route::get('/register', function () {
    if( !Auth::guest() && (Auth::user()->privilege)=='admin' ){
        return view('auth/register');
    }else{
        return view('home');
    }
    return view('auth/register');
});
Route::post('/register', 'UserController@postSignUp');

Route::get('/bookRegister', function () {
    if( !Auth::guest() && (Auth::user()->privilege)=='librarian' ){
        return view('bookRegister');
    }else{
        return view('home');
    }
});
Route::post('/bookRegister', 'BookController@postBookRegister');

//logout
Route::get('/logout', 'UserController@getLogout');

//Locate member
Route::post('/locate', 'BookController@postBookRegister');

Route::get('/memberRegister', function () {
    if( !Auth::guest() && (Auth::user()->privilege)=='librarian' ){
        return view('memberRegister');
    }else{
        return view('home');
    }
});
Route::post('/memberRegister', 'MemberController@postMemberRegister');
