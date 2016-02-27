<?php

namespace Vicky\MdlProduk\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MdlProdukController extends Controller
{
	public function index(Request $request)
	{

		$produk = ['tas', 'baju', 'celana', 'sabuk'];

		return view('mdlproduk::index', compact('produk'));
	}
}