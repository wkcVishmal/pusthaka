<?php
namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller{
    public function postMemberRegister(Request $request){
        $id = $request["id"];
        $name = $request["name"];
        
        $member = new Member();
        $member->mid = $id;
        $member->name = $name;
        $member->save();
        
        return redirect()->back();
    }
    

}
