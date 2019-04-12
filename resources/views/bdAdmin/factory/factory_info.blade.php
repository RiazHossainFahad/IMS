@extends('layouts.bdAdmin')

@section('title')
    BD_Admin-Factory-Factory Info
@endsection

@section('style')
label {
    font-size: 20vw
}

th {
    background-color: rgb(95, 85, 231);
    color: #fff;
}

td {
    text-align: center;
}   
@endsection

@section('factoryModule')
    active
@endsection

@section('fi')
    class="active"
@endsection


@section('mainContent')

<div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 style="text-align:center" class="panel-title">Factory Informations</h3>
                    </div>
                    <div class="panel-body">


                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Factory Name</th>
                                    <th>Factory Address</th>
                                    <th>Factory Phone No</th>
                                    <th>Working Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>XYZ</td>
                                    <td>XYZ</td>
                                    <td>123456789</td>
                                    <td>Active</td>
                                </tr>
                            </tbody>
                        </table>


                        <div class="col-xs-12">
                            <a href="http://" class="btn btn-block btn-danger">Back</a>
                        </div>



                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection