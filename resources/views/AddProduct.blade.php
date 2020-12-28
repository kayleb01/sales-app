@extends('layouts.app')

@section('content')

<div class="container bg-gray">
	<div class="row">
		<div class="col-md-9 col-lg-9">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/sales">Back to Sales</a></li>
			</ol>
			<div class="card card-body mt-2 shadow">
				<span class="btn "> <a href="#stock" class="btn-flat float-right">Skip to Add Stock</a> </span>
				<h4>Available Products</h4>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Product</th>
							<th>Quantity</th>
							<th>Price</th>
						</tr>
					</thead>
					
						@foreach($stock as $stocks)
						<tr>
						<td>{{$stocks->description}}</td>
						<td>{{$stocks->quantity}}</td>
						<td>{{$stocks->sellingPrice}}</td>
						</tr>
						@endforeach
					{{$stock->links()}}
				</table>

			</div>
			<div class="panel panel-body m-3 p-3" style="border: 1px #ccc solid; background-color: #ccc" id="stock">
				<h3>Add Stock</h3>
				@if(session('success'))
					<div class="alert alert-success">{{session('success')}}</div>
				@endif
				@if(session('error'))
					<div class="alert alert-danger">{{session('error')}}</div>
				@endif
				<form method="POST" action="{{route('addProduct')}}">
					{{csrf_field()}}
					<input type="text" name="description" class="form-control rounded-pill mt-3 mb-2" placeholder="Description" required>
					 @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                     @endif  
					<input type="text" class="form-control mb-2 rounded-pill" placeholder="Cost Price" name="costPrice" required>
					 @if ($errors->has('costPrice'))
                        <span class="help-block">
                            <strong>{{ $errors->first('costPrice') }}</strong>
                        </span>
                     @endif  
					<input type="text" name="sellingPrice" class="form-control rounded-pill mb-2" placeholder="Selling Price" required>
					 @if ($errors->has('sellingPrice'))
                        <span class="help-block">
                         <strong>{{ $errors->first('sellingPrice') }}</strong>
                        </span>
                     @endif  
					<input type="number" name="quantity" class="form-control rounded-pill mb-4" placeholder="Quantity" required>
					 @if ($errors->has('quantity'))
                        <span class="help-block">
                            <strong>{{ $errors->first('quantity') }}</strong>
                        </span>
                     @endif  
					<input type="submit" name="submit" class="btn btn-block btn-secondary rounded-pill">
				</form>
				
			</div>
		</div>
			@include('_partials._widget')
	</div>
</div>
@endsection