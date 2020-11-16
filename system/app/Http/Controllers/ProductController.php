<?php 

namespace App\Http\Controllers;

class ProductController extends Controller{
	function index(){
		$data['list_product'] = Product::all();
		return view ('product.index', $data);
	}

	function create(){
		return view ('product.create');
	}
	function store(){
		$product = new Product;
		$product->nama = request('nama');
		$product->stok = request('stok');
		$product->harga = request('harga');
		$product->save();

		return redirect('product') -> with ('succes', 'Data Berhasil Ditambahkan');
	}
	function show(Product $product){
		$data['product'] = $product;
		return view('product.show', $data);
	}
	function edit(Product $product){
		$data['product'] = $product;
		return view('product.edit', $data);
	}
	function update(Product $product){
		$product->nama = request('nama');
		$product->stok = request('stok');
		$product->harga = request('harga');
		$product->save();

		return redirect('product')-> with ('succes', 'Data Berhasil Diedit');
	}
	function destroy(Product $product){

	}
?>