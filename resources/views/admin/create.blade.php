@extends('layouts.app')
@section('content')
<div class="col-lg-9 col-md-9">
<div class="panel panel-default">
	<div class="panel-heading">
		<h4>Create a new history for customer</h4>
		
	</div>
	<div class="panel-body">
		@if(session()->has('message'))
			<div class="alert alert-success">
				{{ session()->get('message') }}
			</div>
		@endif
		<form action="{{route('customer.Insert')}}" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="firstname">First Name</label>
				<input type="text" name="firstname" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="lastname">Last Name</label>
				<input type="text" name="lastname" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="gender">Gender</label>
				<input type="text" name="gender" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" name="address" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="phone">Phone Number</label>
				<input type="text" name="phone" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="purchaseamount">Purchase Amount</label>
				<input type="text" name="purchaseamount" class="form-control" required>
			</div>
			<div class="form-group">
				<div class="text-center">
					<button class="btn btn-success" type="submit">
						Store Details
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
@stop