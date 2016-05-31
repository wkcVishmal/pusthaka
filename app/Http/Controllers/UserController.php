<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{
    public function postSignUp(Request $request){
        $name = $request["name"];
        $email = $request["email"];
        $privilege = $request["privilege"];
        $password = bcrypt($request["password"]);
        
        $user = new User();
        $user->email = $email;
        $user->name = $name;
        $user->privilege = $privilege;
        $user->password = $password;
        
        $user->save();
        
        return redirect()->back();
    }
    
    public function postSignIn(Request $request){
        if( Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
            return view('home');
        }
        return redirect()->back();
    }
    
    public function getLogout(){
        Auth::logout();
        return view('auth/login');
    }
}
