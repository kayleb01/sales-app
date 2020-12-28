@extends('layouts.app')

@section('content')

<div class="container bg-gray">
	<div class="row">
		<div class="col-md-9 col-lg-9">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/sales">Back to Sales</a></li>
			</ol>
			<div class="card card-body shadow">
				<h3>Book Credit</h3>
				@if(session('success'))
					<div class="alert alert-success">{{session('success')}}</div>
				@endif
				@if(session('error'))
					<div class="alert alert-danger">{{session('error')}}</div>
				@endif
				<form method="post" action="/makeCredit">
					<select class="form-control rounded-pill mb-2" name="description" required>
						<option value=""> Select Product </option>
						@foreach($stocks as $stock)
						<option value="{{$stock->id}}">{{$stock->description}}</option>
						@endforeach
					</select>
					<input type="number" class="form-control mb-2 rounded-pill" placeholder="Select Quantity" name="quantity" id="quantity" required>
					<input type="text" name="debtor" class="form-control rounded-pill mb-2" placeholder="Debtor" required>
					{{csrf_field()}}
					<button type="submit" name="submit" class="btn btn-secondary btn-block p-2 rounded-pill"> Submit</button>
				</form>
			</div>
		</div>
		
			@include('_partials._widget')
		
	</div>
</div>
@endsection