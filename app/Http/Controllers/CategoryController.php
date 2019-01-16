<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $result = Category::latest()->get();
        return response()->json([
            'result'=>$result
        ],200);
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|min:3|unique:categories'
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();
    }

    public function edit($id){
        $result = Category::find($id);
        return response()->json([
            'result'=>$result
        ],200);
    }

    public function update(Request $request,$id){
        $this->validate($request, [
            'name'=>'required|min:3'
        ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
    }

    public function destroy($id){
        $result = Category::find($id)->delete();
    }
}
