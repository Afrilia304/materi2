@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Tambah Data Product
					</div>

					<div class="card-body">
						<form action="{{url('product', $product->id)}}" method="post">
							@csrf
							@methode("PUT")
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class= "form-control" name="nama" value="{{$product->nama}}"
						</div>

						
						<div class="form-group">
							<label for="" class="control-label">Stok</label>
							<input type="text" class= "form-control" name="stok" value="{{$product->stok}}">
						</div>

						<div class="form-group">
							<label for="" class="control-label">Harga</label>
							<input type="text" class= "form-control" name="harga" value="{{$product->harga  }}">
						</div>

						<button class="btn-btn-dark float right"><i class="fa fa-save">Simpan</i></button>

					</form>
					</div>
				</div>
			</div>
		</div>
		
	</div>

@endsection