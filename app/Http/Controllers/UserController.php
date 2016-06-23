<?php
namespace App\Http\Controllers;

use App\Privilege;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{

    public function postSignUp(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'privilege' => 'required',
            'password' => 'required|min:4',
            'phone_number' => 'required|min:10|max:10',
            'address' => 'required'
        ]);

        $name = $request['name'];
        $privilege = $request['privilege'];
        $email = $request['email'];
        $password = bcrypt($request['password']);
        $phone_number = $request['phone_number'];
        $address = $request['address'];

        $user = new User();
        $user->name = $name;
        $user->privilege = $privilege;
        $user->email = $email;
        $user->password = $password;
        $user->phone_no = $phone_number;
        $user->address = $address;

        $user->save();

        //Auth::login($user);  //when we use this, it direct to the user login page

        return redirect()->back();
    }

    public function getHome(){
        return view('home');
    }

    public function getUserRegister(){
        if(Auth::user()->privilege=='admin'){
            return view('register');
        }else{
            return view('home');
        }
    }

    public function postSignIn(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            return redirect()->route('home');
        }
        return redirect()->back();
    }
    
    public function getLogout(){
        Auth::logout();
        return view('auth/login');
    }
}
