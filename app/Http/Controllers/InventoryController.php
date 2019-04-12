<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    public function confrimShipment(){
        return view('seller.inventory.confirm_shipment');
    }

    public function addProduct(){
        return view('seller.inventory.add_product');
    }

    public function storeProduct(Request $req){
        $req->validate([
            'product_name'=>'required',
            'quantity'=>'required|numeric'
        ]);

        $status = DB::table('products')
                        ->insert([
                            'product_name' => $req->product_name,
                            'quantity' => $req->quantity
                        ]);

        if($status)
        return back()->with('success','Product added Successfully.');
        else
        return back()->with('success','Oops!!Error occured while adding product!!');
    }

    public function productInfoReport(){
        return view('seller.inventory.product_info_report');
    }

    public function shipmentReport(){
        return view('seller.inventory.shipment_report');
    }
}
