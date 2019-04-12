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


        $ch_product = DB::table('products')
                    ->where('product_name','=',$req->product_name)
                    ->first();

        if($ch_product){
            $q = $ch_product->quantity + $req->quantity;
            $aq = $ch_product->available_product + $req->quantity;
          $status = DB::table('products')
            ->where('product_name',$req->product_name)
            ->update([
                'quantity'=>$q,
                'available_product'=>$aq
            ]);

            if($status)
            return back()->with('success','Product Updated Successfully.');
            else
            return back()->with('success','Oops!!Error occured while updating product!!');
        }else{

            $status = DB::table('products')
            ->insert([
                'product_name' => $req->product_name,
                'quantity' => $req->quantity,
                'available_product' => $req->quantity,
            ]);

            if($status)
                return back()->with('success','Product added Successfully.');
            else
                return back()->with('success','Oops!!Error occured while adding product!!');
        }
    }

    public function productInfoReport(){
        // $product = DB::table('daily_sells')
        //         ->select('product_name', DB::raw('SUM(quantity) as total_sales'))
        //         ->groupBy('product_name')
        //         ->get();
        // print_r($product);
                 return view('seller.inventory.product_info_report');
    }

    public function shipmentReport(){
        return view('seller.inventory.shipment_report');
    }
}
