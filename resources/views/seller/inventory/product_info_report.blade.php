@extends('layouts.master')

@section('title')
    Seller-Account-Product Info Report
@endsection


@section('style')
label {
    font-size: 20vw;
}

th {
    background-color: rgb(95, 85, 231);
    color: #fff;
}
@endsection

@section('inventoryModule')
    active
@endsection

@section('pir')
    class="active"
@endsection


@section('mainContent')

<div class="container">

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 style="text-align:center" class="panel-title">Product Information  Report</h3>
                    </div>
                    <div class="panel-body">

                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Product Name</th>
                                    <th>Available Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < count($productInfo); $i++)
                                    
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$productInfo[$i]->product_name}}</td>
                                    <td>{{$productInfo[$i]->available_product}}</td>
                                </tr>
                                
                                @endfor
                            </tbody>
                        </table>


                        <div class="col-xs-12">
                        <a href="{{route('seller.index')}}" class="btn btn-block btn-danger">Back</a>
                        </div>


                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection