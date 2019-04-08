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
        session(['id'=>$user->id, 'uname'=> $user->uname]);
        if($user){
            return redirect()->route('seller.index');
        }else{
            return back()->with('success', 'Invalid User!');
        }  
    }
}
