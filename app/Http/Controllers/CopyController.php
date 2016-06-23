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
        $user_id = $request["user_id"];
        $copy = DB::table('book_copies')->where('borrowable_books_books_id', $book_id )->where('state','borrowable')->first();
        $copy_id = $copy->copy_id;
        DB::table('book_copies')->where('borrowable_books_books_id',$book_id )->where('copy_id',$copy_id)->update(['state' => 'borrowed']);
        DB::table('member_copy')->insert(
            ['members_user_id' => $user_id, 'book_copies_copy_id' => $copy_id,'borrowed_at' => Carbon::now()]
        );
        
    }
    

}
