@extends('layouts.bdAdmin')

@section('title')
    BD_Admin-Home
@endsection

@section('mainContent')
        <div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 style="text-align:center" class="panel-title">Your Information</h3>
                    </div>
                    <div class="panel-body">

                        <div class="col-xs-2">
                            <h4> <span class="label label-info">Your ID:</span></h4>
                        </div>
                        <div class="col-xs-3 col-xs-offset-5 col-sm-offset-3">
                            <h4><span>{{$user->id}}</span></h4>
                        </div>
                        <br>
                       <hr>

                        <div class="col-xs-2">
                            <h4> <span class="label label-info">Your Name:</span></h4>
                        </div>
                        <div class="col-xs-3 col-xs-offset-5 col-sm-offset-3">
                            <h4><span>{{$user->uname}}</span></h4>
                        </div>
                        <br>
                        <hr>

                        <div class="col-xs-2">
                            <h4> <span class="label label-info">Your Location:</span></h4>
                        </div>
                        <div class="col-xs-3 col-sm-offset-3 col-xs-offset-5">
                            <h4><span>{{$user->location}}</span></h4>
                        </div>
                        <br>
                        <hr>

                        <div class="col-xs-2">
                            <h4> <span class="label label-info">Your are a:</span></h4>
                        </div>
                        <div class="col-xs-3 col-sm-offset-3 col-xs-offset-5">
                            <h4><span>{{$user->type}}</span></h4>
                        </div>
                        <br>
                        <hr>

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection