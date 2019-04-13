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
                            @if (count($factoryInfo))

                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Factory Name</th>
                                    <th>Factory Address</th>
                                    <th>Factory Phone Number</th>
                                    <th>Working Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @for ($i = 0; $i < count($factoryInfo); $i++)
                                    
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{$factoryInfo[$i]->factory_name}}</td>
                                        <td>{{$factoryInfo[$i]->factory_address}}</td>
                                        <td>{{$factoryInfo[$i]->phone_number}}</td>
                                        <td><label class="label label-success">Active</label></td>
                                    </tr>
                                    
                                    @endfor
                            </tbody>
                        </table>
                        @else 
                        <h2>No Factory Found</h2>
                        @endif
                        <div class="col-xs-12">
                            <a href="http://" class="btn btn-block btn-danger">Back</a>
                        </div>



                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection