<?php

namespace App\Http\Controllers;

use App\Member;
use App\Privilege;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController as UC;
use DB;

class StudentController extends Controller{

    public function getStudentRegister(){
        if((Auth::user()->privilege=='admin') || (Auth::user()->privilege=='librarian')){
            return view('student');
        }else{
            return view('home');
        }
    }
    
    public function postRegisterStudent(Request $request){
        $uc = new UC();
        $uc->postSignUp($request);

        $id = DB::table('users')->where('email', $request['email'])->first();
        $nic = $request['nic'];
        
        $member = new Member();
        $member->user_id = $id;
        $member->nic = $nic;
        
        $member->save();

        $reg_no = $request['reg_no'];
        $index = $request['index'];
        $year = $request['year'];

        $student = new Student();
        $student->member_user_id = $id;
        $student->reg_no = $reg_no;
        $student->index_no = $index;
        $student->year = $year;

        $student->save();

        return redirect()->back();
    }
}
?>