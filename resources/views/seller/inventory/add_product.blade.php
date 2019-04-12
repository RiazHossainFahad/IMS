@extends('layouts.master')

@section('title')
    Seller-Inventory-Add Product
@endsection

@section('inventoryModule')
    active
@endsection

@section('ap')
    class="active"
@endsection


@section('mainContent')

<div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 style="text-align:center" class="panel-title">Add Product To Inventory</h3>
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
                                <input type="text" class="form-control" name="product_name" placeholder="Product name">
                            </div>

                            <div class="form-group">
                                <input type="number" min="1" class="form-control" name="quantity" placeholder="Quantity">
                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-large btn-block btn-info">Add Product</button>

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