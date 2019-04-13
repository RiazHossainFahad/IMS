@extends('layouts.bdAdmin')

@section('title')
    BD_Admin-Account-Money Receive From India
@endsection

@section('style')
label {
    font-size: 20vw;
}

th {
    background-color: rgb(95, 85, 231);
    color: #fff;
    text-align: center;
}

td {
    text-align: center;
}   
@endsection

@section('accountModule')
    active
@endsection

@section('mrfi')
    class="active"
@endsection


@section('mainContent')
<div class="container">

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 style="text-align:center" class="panel-title">Money Recipt Report</h3>
                </div>
                <div class="panel-body">

                @if (count($reciptList) > 0)
                <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Receiver Name</th>
                                <th>Receive Date</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < count($reciptList); $i++)
                                
                            <tr>
                               
                                <td>{{$i+1}}</td>
                                <td>{{$reciptList[$i]->receiver_name}}</td>
                                <td>{{$reciptList[$i]->transfer_date}}</td>
                                <td>{{$reciptList[$i]->amount}}</td>
                            
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                @else
                    <h2>No Money recipt found</h2>
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