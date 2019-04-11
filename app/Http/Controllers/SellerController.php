<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellerController extends Controller
{
    public function index()
    {
        $data = DB::table('users')->where('id','=',session('user')->id)->first();
        return view('seller.index')->with('user',$data);
    }
}
