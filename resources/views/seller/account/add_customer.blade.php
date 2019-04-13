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

                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                             <button type="button" class="close" data-dismiss="alert">×</button>
                             <ul>
                              @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                              @endforeach
                             </ul>
                            </div>
                           @endif
                           @if ($message = Session::get('success'))
                           <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                   <strong>{{ $message }}</strong>
                           </div>
                           @endif

                        <form method="post">
                            @csrf
                            <div class="form-group">
                            <input type="text" class="form-control" name="customer_name" placeholder="Customer name" value="{{old('customer_name')}}">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="customer_email" placeholder="Customer Email" value="{{old('customer_email')}}">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="customer_address" placeholder="Customer address" value="{{old('customer_address')}}">
                            </div>

                            <div class="form-group">
                                <input type="Password" class="form-control" name="customer_pass" placeholder="Password" value="{{old('customer_pass')}}">
                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-large btn-block btn-info">Create Account</button>

                            </div>

                            <div class="form-group">

                                <a href="{{route('seller.index')}}" class="btn btn-large btn-block btn-danger">Back</a>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection