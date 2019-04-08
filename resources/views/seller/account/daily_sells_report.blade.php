@extends('layouts.master')

@section('title')
    Seller-Account-Daily Sells Report
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

@section('accountModule')
    active
@endsection

@section('dsr')
    class="active"
@endsection


@section('mainContent')

<div class="container">

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 style="text-align:center" class="panel-title">Daily Sells Report</h3>
                    </div>
                    <div class="panel-body">

                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Customer Name</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Rate</th>
                                    <th>Total Ammount</th>
                                    <th>Ammount Paid</th>
                                    <th>Ammount Left</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>XYZ</td>
                                    <td>XYZ</td>
                                    <td>2019</td>
                                    <td>10000</td>
                                    <td>10000</td>
                                    <td>10000</td>
                                    <td>10000</td>
                                </tr>
                            </tbody>
                        </table>


                        <div class="col-xs-12">
                            <a href="http://" class="btn btn-block btn-danger">Back</a>
                        </div>


                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection