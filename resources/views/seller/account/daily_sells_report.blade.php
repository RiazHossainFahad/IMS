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
h2,h3{
    text-align: center;
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
                        <h3 class="panel-title">Daily Sells Report</h3>
                    </div>
                    <div class="panel-body">
                            @if (count($daily_sells))
                            <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Sell ID</th>
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
                                        @foreach ($daily_sells as $sells)
                                        <tr>
                                        <td>{{$sells->id}}</td>
                                                <td>{{$sells->customer_name}}</td>
                                                <td>{{$sells->product_name}}</td>
                                                <td>{{$sells->quantity}}</td>
                                                <td>{{$sells->rate}}</td>
                                                <td>{{$sells->total_amount}}</td>
                                                <td>{{$sells->amount_paid}}</td>
                                                <td>{{$sells->amount_left}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>   
                            @else
                            <h2>There is no sells yet for today</h2>
                            @endif

                        <div class="col-xs-12">
                        <a href="{{route('seller.index')}}" class="btn btn-block btn-danger">Back</a>
                        </div>


                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection