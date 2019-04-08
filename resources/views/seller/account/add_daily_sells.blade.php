@extends('layouts.master')

@section('title')
    Seller-Account-Add Daily Sells
@endsection

@section('accountModule')
    active
@endsection

@section('ads')
    class="active"
@endsection


@section('mainContent')

<div class="container">

  <div class="row">
      <div class="col-sm-6 col-sm-offset-3">

          <div class="panel panel-info">
              <div class="panel-heading">
                  <h3 style="text-align:center" class="panel-title">Daily Sells Info</h3>
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
                      <input type="text" class="form-control" name="sells_point_name" placeholder="Sells point name" value="{{old('sells_point_name')}}">
                      </div>

                      <div class="form-group">

                          <select name="product_name" id="input" class="form-control">
                           <option id="opt" disabled >-- Select Product --</option>
                           <option value="Product-1"> Product-1 </option>
                           <option value="Product-2"> Product-2 </option>
                           <option value="Product-3"> Product-3 </option>
                          </select>

                      </div>

                      <div class="form-group">
                          <input type="number" min="1" class="form-control" name="quantity" placeholder="Quantity" value="{{old('quantity')}}" >
                      </div>

                      <div class="form-group">
                          <input type="number" min="1" class="form-control" name="rate" placeholder="Rate" value="{{old('rate')}}">
                      </div>

                      <div class="form-group">
                          <input type="text" class="form-control" name="customer_name" placeholder="Customer name" value="{{old('customer_name')}}">
                      </div>

                      <div class="form-group">
                          <input type="number" min="0" class="form-control" name="ammount_paid" placeholder="Ammount paid" value="{{old('ammount_paid')}}">
                      </div>

                      <div class="form-group">
                          <input type="number" min="0" class="form-control" name="ammount_left" placeholder="Ammount left" value="{{old('ammount_left')}}">
                      </div>

                      <div class="form-group">

                          <button type="submit" class="btn btn-large btn-block btn-info">Submit Info</button>

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