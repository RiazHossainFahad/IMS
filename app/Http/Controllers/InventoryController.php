<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    public function confrimShipment(){
        $newShipment = DB::table('shipment')
                            ->where('status',0)
                            ->get();
        return view('seller.inventory.confirm_shipment')->withNewShipment($newShipment);
    }

    public function updateShipment($id){
        $status = DB::table('shipment')
        ->where('id',$id)
        ->update([
            'receive_date'=>now()->toDateString('Y-m-d'),
            'status'=>1
        ]);

        return redirect()->route('inventory.confrimShipment');
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

       $ch_shipment = DB::table('shipment')
                    ->where('product_name','=',$req->product_name)
                    ->where('status','=',1)
                    ->first();

        if(!$ch_shipment){
            return back()->with('success','You don\'t have the product in the shipment.');
        }else{
            if($ch_shipment->quantity >= $req->quantity){
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
            else{
                return back()->with('success','You don\'t have the quantity in the shipment.');
            }
        }
    }

    public function productInfoReport(){
        $products = DB::table('products')
                ->get();

                 return view('seller.inventory.product_info_report')->withProductInfo($products);
    }

    public function shipmentReport(){
        $shipments = DB::table('shipment')->get();
        return view('seller.inventory.shipment_report')->withShipmentList($shipments);
    }
}
