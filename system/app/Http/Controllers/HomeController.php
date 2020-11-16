<?php 

namespace App\Http\Controllers;

class HomeController extends Controller {

		
		function showBeranda(){
			return view('beranda');
		}

		function showProduct(){
			return view('product');
		}

		function showKategori(){
			return view ('kategori');
		}

		function showDiscount(){
			return view ('discount');
		}





}


 ?>