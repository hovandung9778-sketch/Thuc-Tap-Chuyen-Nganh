<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User; 
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); 
        return view('user.user', compact('users')); 
    }
     public function create(){
        return view('user.add');
    }
    public function store(Request $request){
        $user = User::create(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
                
            ]
            );
            if($user)
                return redirect()->route('admin.user.index');
            else{
                return back();
            }
    }
    public function show($id){    }


    public function destroy($id){
        $users = User::find($id);
        $users->delete();
        if($users)

            return redirect()->route('admin.user.index');
        else
            return back();
    }
}