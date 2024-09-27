<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogInController extends Controller
{
    public function index(){
        return view("registeration.log_in");
    }
    public function check(Request $request){
        $request->validate([
            "email"=>"string|email",
            "password"=>"string"
        ]);
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect('/index');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
