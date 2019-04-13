@extends('layouts.bdAdmin')

@section('title')
    BD_Admin-Factory-Assign Raw Materials
@endsection

@section('factoryModule')
    active
@endsection

@section('armtf')
    class="active"
@endsection


@section('mainContent')

<div class="container">

  <div class="row">
      <div class="col-sm-6 col-sm-offset-3">

          <div class="panel panel-info">
              <div class="panel-heading">
                  <h3 style="text-align:center" class="panel-title">Add Raw Materials To Factory</h3>
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
                          <input type="text" class="form-control" name="factory_name" placeholder="Factory name" value="{{old('factory_name')}}">
                      </div>

                      <div class="form-group">
                          <input type="text" class="form-control" name="assign_date" placeholder="Assign Date" value="{{now()->toDateString('Y-m-d')}}">
                      </div>

                      <div class="form-group">
                          <input type="text" class="form-control" name="materials_name" placeholder="Materials name" value="{{old('materials_name')}}">
                      </div>

                      <div class="form-group">
                          <input type="number" min="1" class="form-control" name="quantity" placeholder="Quantity" value="{{old('quantity')}}">
                      </div>

                      <div class="form-group">
                          <input type="number" min="1" class="form-control" name="price" placeholder="Price" value="{{old('price')}}">
                      </div>

                      <div class="form-group">
                          <input type="text" class="form-control" name="production_type" placeholder="Production type" value="{{old('production_type')}}">
                      </div>


                      <div class="form-group">

                          <button type="submit" class="btn btn-large btn-block btn-info">Add Materials</button>

                      </div>

                      <div class="form-group">

                          <a href="{{route('bdAdmin.index')}}" class="btn btn-large btn-block btn-danger">Back</a>

                      </div>
                  </form>
              </div>
          </div>

      </div>
  </div>

</div>
@endsection