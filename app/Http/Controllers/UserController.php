<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $user = User::latest()->get();
        return response()->json([
            'result'=>$user
        ],200);
    }
    public function create(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3|unique:users',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password == $request->password_confirmation){
            $user->password = Hash::make($request->password );
        }
        $user->save();

    }
    public function edit($id){
        $user = User::find($id);
        return response()->json([
            'result'=>$user
        ],200);
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'name'=>'required|min:',
            'email'=>'required|email',

        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

    }

    public function destroy($id){
        $user = User::find($id)->delete();
    }
}
