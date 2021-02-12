@extends('layouts.app')
@section('content')
    <div class="col-lg-9 col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Update customer</h4>

            </div>
            <div class="panel-body">

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{route('customer.edit',['id'=>$customer->id])}}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" class="form-control" value="{{$customer->firstname}}" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lastname" class="form-control" value="{{$customer->lastname}}" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="text" name="gender" class="form-control" value="{{$customer->gender}}" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" value="{{$customer->address}}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" class="form-control" value="{{$customer->phone}}" required>
                    </div>
                    <div class="form-group">
                        <label for="purchaseamount">Purchase Amount</label>
                        <input type="text" name="purchaseamount" class="form-control" value="{{$customer->purchaseamount}}" required>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop