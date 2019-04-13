<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BDAccountController extends Controller
{
    public function showMoneyRecipt(){
        $moneyRecipt = DB::table('transferredintobd')->get(); 
        return view('bdAdmin.account.money_receive_from_india')->withReciptList($moneyRecipt);
    }

    public function showBalanceSheet(){
        $total_expense = DB::table('factory_raw_materials')
                            ->sum('total_cost');

        $total_receive = DB::table('transferredintobd')
                            ->sum('amount');
        $cash_in_hand = $total_receive -$total_expense;
        return view('bdAdmin.account.balancesheet')->withTotalExpense($total_expense)
                                                    ->withTotalReceive($total_receive)
                                                    ->withCash($cash_in_hand);
    }
}
