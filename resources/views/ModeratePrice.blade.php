@extends('layouts.app')

@section('content')

<div class="container bg-gray">
	<div class="row">
		<div class="col-md-9 col-lg-9">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/sales">Back to Sales</a></li>
			</ol>
			<div class="card card-body shadow">
				<h3>Available Stock</h3>
				<table class="table table-striped">
					<thead>
						<tr>
							
						</tr>
							<th>Product</th> 
							<th>Quantity</th>
							<th>Cost Price</th>
							<th>Selling Price</th>
							<th>Action</th>

					</thead>
					@foreach($stocks as $stock)
						<tr>
							<td>{{$stock->description}}</td>
							<td>{{$stock->quantity}}</td>
							<td>{{$stock->costPrice}}</td>
							<td>{{$stock->sellingPrice}}</td>
							<td><a href="#">edit</a>|<a href="#" class="text-danger">del</a></td>
						</tr>
					@endforeach


				</table>
				<span class="mt-3">{{$stocks->links()}}</span>
			</div>

			
		</div>
		
			@include('_partials._widget')
		
	</div>
</div>
@endsection