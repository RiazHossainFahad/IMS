@extends('layouts.master')

@section('title')
    Seller-Account-Money Transfer
@endsection

@section('accountModule')
    active
@endsection

@section('mt')
    class="active"
@endsection


@section('mainContent')

<div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 style="text-align:center" class="panel-title">Status Of Money Transferred</h3>
                    </div>
                    <div class="panel-body">

                            @if (count($errors))
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
                                <input type="text" class="form-control" name="receiver_name" placeholder="Receiver name" value="{{old('receiver_name')}}">
                            </div>


                            <div class="form-group">
                                <input type="number" min="1" class="form-control" name="amount" placeholder="Amount" value="{{old('amount')}}">
                            </div>

                            <div class="form-group">
                                <input type="text" readonly class="form-control" name="transfer_date" placeholder="Date" value="{{now()->toDateString('Y-m-d')}}">
                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-large btn-block btn-info">Submit Info</button>

                            </div>

                            <div class="form-group">

                                <a href='{{route('seller.index')}}' class="btn btn-large btn-block btn-danger">Back</a>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection