@extends('layouts.bdAdmin')

@section('title')
    BD_Admin-Factory-Add Shipment Info
@endsection

@section('factoryModule')
    active
@endsection

@section('asi')
    class="active"
@endsection


@section('mainContent')

<div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 style="text-align:center" class="panel-title">Add Shipment Info</h3>
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
                                <input type="text" class="form-control" name="product_name" placeholder="Product name" value="{{old('product_name')}}">
                            </div>

                            <div class="form-group">
                                <input type="number" min="1" class="form-control" name="quantity" placeholder="Quantity" value="{{old('quantity')}}">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="send_date" placeholder="Send Date" value="{{now()->toDateString('Y-m-d')}}">
                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-large btn-block btn-info">Add Shipment</button>

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