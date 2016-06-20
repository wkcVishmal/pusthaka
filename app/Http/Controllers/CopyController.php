<?php
namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Copy;
use Illuminate\Http\Request;

class CopyController extends Controller{
    public function postCopyRegister(Request $request){
        /*
        $id = $request["id"];
        $name = $request["name"];
        $email = $request["email"];
        
        $member = new Member();
        $member->mid = $id;
        $member->name = $name;
        $member->email = $email;
        $member->save();

        return redirect()->back();
        */
    }
    
    public function postLocateCopy(Request $request){
        
        $book_id = $request["book_id"];
        $mid = $request["mid"];
        $copy = DB::table('book_copy')->where('book_id', $book_id )->where('state','borrowable')->first();
        $copy_id = $copy->copy_id;
        DB::table('book_copy')->where('book_id', $book_id )->where('copy_id',$copy_id)->update(['state' => 'borrowed']);
        DB::table('member_copy')->insert(
            ['mid' => $mid, 'copy_id' => $copy_id,'created_at' => Carbon::now()]
        );
    }
    

}
