@extends('layouts.bdAdmin')

@section('title')
    BD_Admin-Account-Balance Sheet 
@endsection

@section('style')
label {
    font-size: 20vw;
}
 
@endsection

@section('accountModule')
    active
@endsection

@section('bs')
    class="active"
@endsection


@section('mainContent')
<div class="container">

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 style="text-align:center" class="panel-title">Balance Sheet</h3>
                </div>
                <div class="panel-body">

                    <div class="col-xs-2">
                        <h4> <span class="label label-info">Total Expense:</span></h4>
                    </div>
                    <div class="col-xs-3 col-xs-offset-5 col-sm-offset-3">
                        <h4><span>1000</span></h4>
                    </div>
                    <br>
                    <br>

                    <div class="col-xs-2">
                        <h4> <span class="label label-info">Total Receive:</span></h4>
                    </div>
                    <div class="col-xs-3 col-xs-offset-5 col-sm-offset-3">
                        <h4><span>1000</span></h4>
                    </div>
                    <br>
                    <br>
                    <hr>

                    <div class="col-xs-2">
                        <h4> <span class="label label-info">Cash In Hand:</span></h4>
                    </div>
                    <div class="col-xs-3 col-xs-offset-5 col-sm-offset-3">
                        <h4><span>0000</span></h4>
                    </div>
                    <br>
                    <br>


                    <hr>

                    <div class="col-xs-12">
                        <a href="http://" class="btn btn-block btn-danger">Back</a>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection