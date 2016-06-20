<?php
namespace App\Http\Controllers;
use DB;
use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller{
    public function postMemberRegister(Request $request){
        
        $id = $request["id"];
        $name = $request["name"];
        $email = $request["email"];
        
        $member = new Member();
        $member->mid = $id;
        $member->name = $name;
        $member->email = $email;
        $member->save();

        return redirect()->back();
    }
    
    public function postLocateMember(Request $request){
        
        $id = $request["mid"];
        
        $member = DB::table('members')->where('mid', $id )->first();
        $mid = $member->mid;
        
        return view('locateCopy',['mid' => $mid]);
        //return redirect()->back();
    }
    

}
