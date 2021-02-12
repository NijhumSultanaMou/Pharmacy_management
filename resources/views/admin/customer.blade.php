@extends('layouts.app')
@section('content')
    <div class="col-md-9">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="panel panel-default">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Purchase Amount</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $d)
                <tr>
                    <td>{{$d->firstname}}</td>
                    <td>{{$d->lastname}}</td>
                    <td>{{$d->gender}}</td>
                    <td>{{$d->address}}</td>
                    <td>{{$d->phone}}</td>
                    <td>{{$d->purchaseamount}}</td>
                    <td>
                        <a class="btn btn-info" href="{{route('customer.update',['id'=>$d->id])}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger" href="{{route('customer.delete',['id'=>$d->id])}}" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                        <a class="btn btn-danger" href="{{route('customer.discount',['id'=>$d->id])}}" data-toggle="tooltip" data-placement="top" title="Discount"><i class="fa fa-pencil"></i></a>
                    </td>

                </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
