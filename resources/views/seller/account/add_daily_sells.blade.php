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
                  <form method="post">

                      <div class="form-group">
                          <input type="text" class="form-control" name="sell_point_name" placeholder="Sells point name">
                      </div>

                      <div class="form-group">

                          <select name="product" id="input" class="form-control">
                           <option id="opt" disabled >-- Select Product --</option>
                           <option value="Product-1"> Product-1 </option>
                           <option value="Product-2"> Product-2 </option>
                           <option value="Product-3"> Product-3 </option>
                          </select>

                      </div>

                      <div class="form-group">
                          <input type="number" min="1" class="form-control" name="quantity" placeholder="Quantity">
                      </div>

                      <div class="form-group">
                          <input type="number" min="1" class="form-control" name="rate" placeholder="Rate">
                      </div>

                      <div class="form-group">
                          <input type="text" class="form-control" name="customer_name" placeholder="Customer name">
                      </div>

                      <div class="form-group">
                          <input type="number" min="0" class="form-control" name="ammount_paid" placeholder="Ammount paid">
                      </div>

                      <div class="form-group">
                          <input type="number" min="0" class="form-control" name="ammount_left" placeholder="Ammount left">
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