@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Product
					</div>

					<div class="card-body">
						<h3>{{$product->nama}}</h3>
						<hr>
						<p>
							Stok : {{$product->stok}}
							Rp. {{number_format($product->harga)}}</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>

@endsection