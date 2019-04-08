<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function confrimShipment(){
        return view('seller.inventory.confirm_shipment');
    }

    public function addProduct(){
        return view('seller.inventory.add_product');
    }

    public function productInfoReport(){
        return view('seller.inventory.product_info_report');
    }

    public function shipmentReport(){
        return view('seller.inventory.shipment_report');
    }
}
