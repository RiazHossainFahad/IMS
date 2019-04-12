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
        $products = DB::table('products')
                        ->select('product_name')
                        ->get();
          return view('seller.account.add_daily_sells')->with('product',$products); 
    }

    public function storeDailySells(AccountIndiaRequest $req){
        //check available product
        $aa_product = DB::table('products')
                                    ->select('available_product')
                                    ->where('product_name','=',$req->product_name)
                                    ->first();

        //check available product < than quantity sells
        if($aa_product->available_product > $req->quantity){
            $ap = $aa_product->available_product - $req->quantity;

            DB::table('products')
                ->where('product_name',$req->product_name)
                ->update([
                    'available_product'=>$ap
                ]);

            $total_amount = ($req->quantity*$req->rate);

            $status = DB::table('daily_sells')->insert([
                'sells_point_name' => $req->sells_point_name,
                'product_name' => $req->product_name,
                'quantity' => $req->quantity,
                'rate' => $req->rate,
                'customer_name' => $req->customer_name,
                'amount_paid' => $req->amount_paid,
                'amount_left' => $req->amount_left,
                'total_amount' => $total_amount
            ]);
    
            if($status)
            return back()->with('success','Daily sells stored successfully!!');
            else
            return back()->with('success','Oops!!Error occured while storing Daily sells!!');
        }
        else {
            return back()->with('success','Not enough available product <br> Add product first!!');
        }
    }

        /**
     * Display a listing of the daily sells reports.
     *
     * @return \Illuminate\Http\Response
     */

    public function showReport()
    {
       $today_sells = DB::table('daily_sells')
                            ->whereDate('created_at','=',now()->toDateString('Y-m-d'))
                            ->get();
        return view('seller.account.daily_sells_report')->with('daily_sells',$today_sells); 
    //echo now()->toDateString('Y-m-d');
    //print_r($today_sells);
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

    public function storeMoneyTransferInfo(Request $req)
    {
        $req->validate([
            'receiver_name'=>'required|exists:users,uname',
            'amount'=>'required|numeric'
        ]);

        $status = DB::table('transferredIntoBD')
                        ->insert([
                            'receiver_name' => $req->receiver_name,
                            'amount' => $req->amount,
                            'transfer_date' => $req->transfer_date
                        ]);

        if($status)
        return back()->with('success','Money Transfer Successfull.');
        else
        return back()->with('success','Oops!!Error occured while transferring money!!');
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

    public function storeCustomerInfo(Request $req)
    {
        $req->validate([
            'customer_name'=>'required|unique:customers',
            'customer_address'=>'required',
            'customer_email'=>'required|unique:customers',
            'customer_pass'=>'required',
        ]);
    
        $status = DB::table('customers')
                        ->insert([
                            'customer_name' => $req->customer_name,
                            'customer_email' => $req->customer_email,
                            'customer_address' => $req->customer_address,
                            'customer_pass' => $req->customer_pass
                        ]);

        if($status)
        return back()->with('success','Account Created Successfully.');
        else
        return back()->with('success','Oops!!Error occured while creating account!!');
    }

}
