@extends('layouts.bdAdmin')

@section('title')
    BD_Admin-Factory-Add Factory
@endsection

@section('factoryModule')
    active
@endsection

@section('af')
    class="active"
@endsection


@section('mainContent')

<div class="container">

  <div class="row">
      <div class="col-sm-6 col-sm-offset-3">

          <div class="panel panel-info">
              <div class="panel-heading">
                  <h3 style="text-align:center" class="panel-title">Add Factory</h3>
              </div>
              <div class="panel-body">
                  <form method="post">

                      <div class="form-group">
                          <input type="text" class="form-control" name="factory_name" placeholder="Factory name">
                      </div>

                      <div class="form-group">
                          <input type="text" class="form-control" name="factory_address" placeholder="Factory address">
                      </div>

                      <div class="form-group">
                          <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                      </div>


                      <div class="form-group">

                          <button type="submit" class="btn btn-large btn-block btn-info">Add Factory</button>

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