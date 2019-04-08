@extends('layouts.master')

@section('title')
    Seller-Account-Shipment Report
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

@section('sr')
    class="active"
@endsection


@section('mainContent')

<div class="container">

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 style="text-align:center" class="panel-title">Shipment Report</h3>
                    </div>
                    <div class="panel-body">

                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Send Date</th>
                                    <th>Receive Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>XYZ</td>
                                    <td>2019</td>
                                    <td>10/04/2019</td>
                                    <td>10/04/2019</td>
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