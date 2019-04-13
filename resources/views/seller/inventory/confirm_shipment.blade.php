@extends('layouts.master')

@section('title')
    Seller-Account-Confirm Shipment
@endsection


@section('style')
label {
    font-size: 20vw;
}

th {
    background-color: rgb(95, 85, 231);
    color: #fff;
}
@endsection

@section('inventoryModule')
    active
@endsection

@section('cs')
    class="active"
@endsection


@section('mainContent')

<div class="container">

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 style="text-align:center" class="panel-title">Confirm Shipment</h3>
                    </div>
                    <div class="panel-body">
                        @if (count($newShipment)>0)
                        
                        <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Send Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @for ($i = 0; $i < count($newShipment); $i++)
                                    
                                        <tr>
                                            <td>{{$i+1}}</td>
                                            <td>{{$newShipment[$i]->product_name}}</td>
                                            <td>{{$newShipment[$i]->quantity}}</td>
                                            <td>{{$newShipment[$i]->send_date}}</td>
                                            <td><a data-toggle="modal" href="#modal-approve" class="btn btn-block btn-success">Approve</a></td>
                                        </tr>
                                <!-- Modal For alert while approving. -->
                                <div class="modal fade" id="modal-approve">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <center>
                                                        <h4 class="modal-title">Warning</h4>
                                                    </center>
                                                </div>
                                                <div class="modal-body">

                                                    <center>
                                                        <span class="h5" style="color:blue">Do you want to approve?</span><br>
                                                        <a class="btn btn-success" style="width:20%" href="{{route('inventory.updateShipment',$newShipment[$i]->id)}}">Approve</a>
                                                    </center>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        @endfor
    
                                </tbody>
                            </table>

                        @else
                            <h2>No New Shipment to Approve</h2>
                        @endif

                        <div class="col-xs-12">
                        <a href="{{route('seller.index')}}" class="btn btn-block btn-danger">Back</a>
                        </div>


                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection