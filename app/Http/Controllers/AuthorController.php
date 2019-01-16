<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::latest()->get();
        return response()->json([
            'author'=>$authors
        ],200);
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3|unique:authors'
        ]);
        $author = new Author();
        $author->name = $request->name;
        $author->save();
    }
    public function edit($id){
        $authors = Author::find($id);
        return response()->json([
            'result'=>$authors
        ],200);
    }
    public function update(Request $request,$id){
        $this->validate($request,[
           'name'=>'required|min:3'
        ]);
        $author = Author::find($id);
        $author->name = $request->name;
        $author->save();

    }
    public function destroy($id){
        $author = Author::find($id)->delete();
    }
}
