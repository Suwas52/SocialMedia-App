<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registerUser(Request $req){
        // dd($req->all());

        $req->validate([
           'name' => 'required', 
           'email' => 'required|email', 
           'password' => 'required', 
        ]);

         User::create([
        'name' => $req->name,
        'email' => $req->email,
        'password' => Hash::make($req->password),
        ]);

        return redirect()->route('login')->with('success', 'Registered Successfully');

        
    }
    
    public function loginUser(Request $request){
        // dd($request->all());

        $request->validate([ 
            'email' => 'required|email', 
            'password' => 'required', 
         ]);

         if (Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
         }else{
            return back()->with('fail','User not found');
         }

        
    }
    public function logout(){
        
        auth()->logout();

        return redirect()->route('logout'); 
     }
}