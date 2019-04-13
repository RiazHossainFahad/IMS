<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FactoryManagementController extends Controller
{
    public function addFactory(){
        return view('bdAdmin.factory.add_factory');
    }

    public function storeFactory(Request $req){
        $req->validate([
            'factory_name'=>'required|unique:factory',
            'factory_address'=>'required',
            'phone_number'=>'required|regex:/(01)[0-9]{9}/|max:11'
        ]);

        $status = DB::table('factory')
        ->insert([
            'factory_name' => $req->factory_name,
            'factory_address' => $req->factory_address,
            'phone_number' => $req->phone_number
        ]);

        if($status)
            return back()->with('success','Factory added Successfully.');
        else
            return back()->with('success','Oops!!Error occured while adding factory!!');
    }

    public function assignRawMaterials(){
        return view('bdAdmin.factory.assign_raw_materials');
    }


    public function storeAssignedMaterials(Request $req){
        $req->validate([
            'factory_name'=>'required|exists:factory',
            'assign_date'=>'required|date',
            'materials_name'=>'required',
            'quantity'=>'required|numeric',
            'price'=>'required|numeric',
            'production_type'=>'required',     
        ]);

        $total_cost = $req->quantity * $req->price; 
        $status = DB::table('factory_raw_materials')
        ->insert([
            'factory_name' => $req->factory_name,
            'assign_date' => $req->assign_date,
            'materials_name' => $req->materials_name,
            'quantity' => $req->quantity,
            'price' => $req->price,
            'total_cost' => $total_cost,
            'production_type' => $req->production_type,
        ]);

        if($status)
            return back()->with('success','Assign materaials stored Successfully.');
        else
            return back()->with('success','Oops!!Error occured while stroing raw materials!!');
    }

    public function addShipmentInfo(){
        return view('bdAdmin.factory.add_shipment_info');
    }

    public function storeShipmentInfo(){
        
    }

    public function factoryInfo(){
        return view('bdAdmin.factory.factory_info');
    }
}
