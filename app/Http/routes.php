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

Route::group(['middleware' => ['web']], function (){

    Route::get('/', function () {
        return view('login');
    })->name('login');
    
    //logout
    Route::get('/logout', 'UserController@getLogout');

    Route::post('/userSignup',[
        'uses' => 'UserController@postSignUp',
        'as' => 'userSignUp',
        'middleware' => 'auth'
    ]);

    Route::post('/signin',[
        'uses' => 'UserController@postSignIn',
        'as' => 'signin'
    ]);

    Route::get('/home',[
        'uses' => 'UserController@getHome',
        'as' => 'home',
        'middleware' => 'auth'
    ]);

    Route::get('/usersignup',[
        'uses' => 'UserController@getUserRegister',
        'as' => 'userregister',
        'middleware' => 'auth'
    ]);

    Route::get('/studentreg',[
        'uses' => 'StudentController@getStudentRegister',
        'as' => 'studentreg',
        'middleware' => 'auth'
    ]);

    Route::post('/regstudent',[
        'uses' => 'StudentController@postRegisterStudent',
        'as' => 'regstudent'
    ]);

    //Locate member
    Route::get('/locate', function () {
        if( !Auth::guest() && (Auth::user()->privilege)=='librarian' ){
            return view('bookLending');
        }else{
            return view('home');
        }
    });
    Route::post('/locate', 'MemberController@postLocateMember');
    
    Route::get('/locateCopy', function () {
        if( !Auth::guest() && (Auth::user()->privilege)=='librarian' ){
            return view('locateCopy');
        }else{
            return view('home');
        }
    });
    Route::post('/locateCopy',[
        'uses' => 'CopyController@postLocateCopy',
        'as' => 'locateCopy'
    ]);
    
//Route::post('/login', 'UserController@postSignIn');

Route::get('/bookRegister', function () {
    if( !Auth::guest() && (Auth::user()->privilege)=='librarian' ){
        return view('bookRegister');
    }else{
        return view('home');
    }
});
Route::post('/bookRegister', 'BookController@postBookRegister');



Route::get('/memberRegister', function () {
    if( !Auth::guest() && (Auth::user()->privilege)=='librarian' ){
        return view('memberRegister');
    }else{
        return view('home');
    }
});


Route::get('/studentRegistration', function () {
    return view('student');
});








});