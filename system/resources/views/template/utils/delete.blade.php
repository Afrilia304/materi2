<form action="{{$url}}" method="post" class="form-inline" onsubmit=" return confirm('Yakin Ingin Menghapus Data Ini?')">
		@csrf
		@methode("delete")
	<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
</form>