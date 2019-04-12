<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactoryManagementController extends Controller
{
    public function addFactory(){
        return view('bdAdmin.factory.add_factory');
    }

    public function assignRawMaterials(){
        return view('bdAdmin.factory.assign_raw_materials');
    }

    public function addShipmentInfo(){
        return view('bdAdmin.factory.add_shipment_info');
    }

    public function factoryInfo(){
        return view('bdAdmin.factory.factory_info');
    }
}
