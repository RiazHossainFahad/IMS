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
                        <form method="post">

                            <div class="form-group">
                                <input type="text" class="form-control" name="reciever_name" placeholder="Receiver name">
                            </div>


                            <div class="form-group">
                                <input type="number" min="1" class="form-control" name="ammount" placeholder="Ammount">
                            </div>

                            <div class="form-group">
                                <input type="text" min="0" class="form-control" name="date" placeholder="Date">
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