<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BDAccountController extends Controller
{
    public function showMoneyRecipt(){
        return view('bdAdmin.account.money_receive_from_india');
    }

    public function showBalanceSheet(){
        return view('bdAdmin.account.balancesheet');
    }
}
