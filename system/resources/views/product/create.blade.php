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
						<form action="{{url('product')}}" method="post">
							
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class= "form-control" name="nama">
						</div>

						
						<div class="form-group">
							<label for="" class="control-label">Stok</label>
							<input type="text" class= "form-control" name="stok">
						</div>

						<div class="form-group">
							<label for="" class="control-label">Harga</label>
							<input type="text" class= "form-control" name="harga">
						</div>

						<button class="btn-btn-dark float right"><i class="fa fa-save">Simpan</i></button>

					</form>
					</div>
				</div>
			</div>
		</div>
		
	</div>

@endsection