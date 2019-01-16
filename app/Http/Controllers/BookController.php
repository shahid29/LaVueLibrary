<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::with('author','category')->latest()->get();
        return response()->json([
           'result'=>$books
        ],200);
    }
    public function store(Request $request){
        $this->validate($request,[
        'title'=>'required|min:3',
        'category_id'=>'required',
        'author_id'=>'required',
        'isbn'=>'required',
        'date_of_publication'=>'required',
        ]);

        $book = new Book();
        $book->author_id = $request->author_id;
        $book->category_id = $request->category_id;
        $book->isbn = $request->isbn;
        $book->title = $request->title;
        $book->date_of_publication = $request->date_of_publication;
        $book->save();
    }

    public function edit($id){
        $book = Book::with('author','category')->find($id);
        return response()->json([
            'result'=>$book
        ],200);
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'title'=>'required|min:3',
            'category_id'=>'required',
            'author_id'=>'required',
            'isbn'=>'required',
            'date_of_publication'=>'required',
        ]);

        $book = Book::find($id);
        $book->author_id = $request->author_id;
        $book->category_id = $request->category_id;
        $book->isbn = $request->isbn;
        $book->title = $request->title;
        $book->date_of_publication = $request->date_of_publication;
        $book->save();
    }
    public function destroy($id){
        Book::find($id)->delete();
    }
}
