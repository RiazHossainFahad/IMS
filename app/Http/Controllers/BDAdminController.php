<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BDAdminController extends Controller
{
    public function index(){
        $data = DB::table('users')->where('id','=',session('user')->id)->first();
        return view('bdAdmin.index')->with('user',$data);
    }
}
