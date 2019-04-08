@extends('layouts.master')

@section('title')
    Seller-Account-Add Customer
@endsection

@section('accountModule')
    active
@endsection

@section('ac')
    class="active"
@endsection


@section('mainContent')

<div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 style="text-align:center" class="panel-title">Create Customer Account</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post">

                            <div class="form-group">
                                <input type="text" class="form-control" name="customer_name" placeholder="Customer name">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="customer_email" placeholder="Customer Email">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="customer_address" placeholder="Customer address">
                            </div>

                            <div class="form-group">
                                <input type="number" min="0" class="form-control" name="balance" placeholder="Balance">
                            </div>

                            <div class="form-group">
                                <input type="Password" class="form-control" name="customer_pass" placeholder="Password">
                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-large btn-block btn-info">Create Account</button>

                            </div>

                            <div class="form-group">

                                <a href="#" class="btn btn-large btn-block btn-danger">Back</a>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection