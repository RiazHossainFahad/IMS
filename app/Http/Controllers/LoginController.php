<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
   public function index(){
        return view('welcome');
   } 

   public function check(Request $req){
       $user = DB::table('users')
                    ->where('uname','=',$req->uname)
                    ->where('pass','=',$req->pass)
                    ->first();
        if($user){
            if($user->location == "India" && $user->type == 'Admin'){
                session(['user' => $user]);
                return redirect()->route('seller.index');
            }
            else if($user->location == "Bangladesh" && $user->type == 'Admin'){
                session(['user' => $user]);
                return redirect()->route('bdAdmin.index');
            }
        }
        else{
            return back()->with('success', 'Invalid User!');
        }  
    }
}
