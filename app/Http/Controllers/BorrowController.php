<?php

namespace App\Http\Controllers;

use App\Borrow;
use App\Category;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BorrowController extends Controller
{
    public function index(){
        $borrows = Borrow::with('user','book')->latest()->get();
            return response()->json([
            'result'=>$borrows,

        ],200);
    }
    public function date_return(){
        $borrows = Borrow::where('date_return',null)->get();
        return response()->json([
            'result'=>$borrows,

        ],200);
    }
    public function store(Request $request){
        $this->validate($request,[
           'book_id'=>'required',
           'user_id'=>'required',
           'date_issued'=>'required',
           'date_due_for_return'=>'required',
        ]);

        $borrow = new Borrow();
        $borrow->book_id = $request->book_id;
        $borrow->user_id = $request->user_id;
        $borrow->date_issued = $request->date_issued;
        $borrow->date_due_for_return = $request->date_due_for_return;
        $borrow->save();
    }
    public function edit($id){
        $edit = Borrow::find($id);
        return response()->json([
            'result'=>$edit
        ],200);
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'book_id'=>'required',
            'user_id'=>'required',
            'date_issued'=>'required',
            'date_due_for_return'=>'required',
        ]);

        $borrow = Borrow::find($id);
        $borrow->book_id = $request->book_id;
        $borrow->user_id = $request->user_id;
        $borrow->date_issued = $request->date_issued;
        $borrow->date_due_for_return = $request->date_due_for_return;
        $borrow->save();
    }
    public function destroy(Request $request,$id){
        $borrow = Borrow::find($id);
        $borrow->date_return = Carbon::today();
        $borrow->save();
    }
}
