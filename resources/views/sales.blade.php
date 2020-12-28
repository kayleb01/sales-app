@extends('layouts.app')

@section('content')

<div class="container bg-gray">
	<div class="row">
		<div class="col-md-9 col-lg-9">
			<div class="card card-body shadow">
				<h3>Today's Sales sofar..</h3>
				<table class="table table-striped">
					<thead>
						<tr>
							
						</tr>
							<th>Product</th> 
							<th>Quantity</th>
							<th>Price</th>
					</thead>
					@foreach($sales as $sale)	
					<tr>
						<td >
							{!!$sale->stock->description!!}
						</td>
						<td>
							{{$sale->quantity}}
						</td>
						<td>
							{{$sale->stock->sellingPrice}}
						</td>
					</tr>
					@endforeach 
				</table>
			</div>

			<div class="panel panel-body m-2 p-3 bg-light" style="border: 1px #ccc solid;">
				<h3>SALES</h3>
				@if(session('success'))
					<div class="alert alert-success">{{session('success')}}</div>
				@endif
				@if(session('error'))
					<div class="alert alert-danger">{{session('error')}}</div>
				@endif
				<form method="POST" action="/makeSales">
					{{csrf_field()}}
					<select class="form-control rounded-pill mb-2" name="product_id" required>
						<option value=""> Select Product </option>
						@foreach($stocks as $stock)
						<option value="{{$stock->id}}">{{$stock->description}}</option>
						@endforeach
					</select>
					<input type="number" class="form-control mb-2 rounded-pill" placeholder="Select Quantity" name="quantity" id="quantity" required>
					<button name="add" class="btn btn-outline-secondary rounded-pill float-right mb-4 px-4">Add</button>
					<button type="submit" name="submit" class="btn btn-secondary btn-block p-2 rounded-pill"> Submit</button>
				</form>
				
			</div>
		</div>
		
			@include('_partials._widget')
		
	</div>
</div>
@endsection