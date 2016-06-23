<?php
namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller{
    public function postBookRegister(Request $request){
        $name = $request["name"];
        $id = $request["id"];
        $author = $request["author"];
        $isbn = $request["isbn"];
        $no_of_copies = $request["no_of_copies"];
        
        $book = new Book();
        $book->name = $name;
        $book->id = $id;
        $book->author = $author;
        $book->isbn = $isbn;
        $book->no_of_copies = $no_of_copies;
        
        $book->save();
        
        return redirect()->back();
    }
    

}
