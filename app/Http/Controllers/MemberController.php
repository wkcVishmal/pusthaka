<?php
namespace App\Http\Controllers;
use App\Student;
use DB;
use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller{

    public function postRegisterMember(Student $student){
        
    }
    
    public function postLocateMember(Request $request){
        $this->validate($request,[
            'nic' => 'required|digits:9|exists:members,nic',
        ]);
        $nic = $request["nic"];
        $member = DB::table('members')->where('nic', $nic )->first();
        $user_id = $member->user_id;      
        return view('locateCopy',['user_id' => $user_id]);
    }

}
