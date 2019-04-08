<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AccountIndiaRequest;
use Illuminate\Support\Facades\DB;

class AccountIndiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('seller.account.add_daily_sells'); 
    }

    public function storeDailySells(AccountIndiaRequest $req){

        $total_amount = ($req->quantity*$req->rate);

        $status = DB::table('daily_sells')->insert([
            'sells_point_name' => $req->sells_point_name,
            'product_name' => $req->product_name,
            'quantity' => $req->quantity,
            'rate' => $req->rate,
            'customer_name' => $req->customer_name,
            'ammount_paid' => $req->ammount_paid,
            'ammount_left' => $req->ammount_left,
            'total_amount' => $total_amount
        ]);

        if($status)
        return back()->with('success','Daily sells stored successfully!!');
        else
        return back()->with('success','Oops!!Error occured while storing Daily sells!!');
    }

        /**
     * Display a listing of the daily sells reports.
     *
     * @return \Illuminate\Http\Response
     */

    public function showReport()
    {
       return view('seller.account.daily_sells_report'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function moneyTransfer()
    {
        return view('seller.account.money_transfer'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addCustomer()
    {
        return view('seller.account.add_customer'); 
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
