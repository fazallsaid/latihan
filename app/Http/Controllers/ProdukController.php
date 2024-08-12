<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    function tampil_produk(){
        $produk = Produk::all();
        return view('produk', compact('produk'));
    }

    function tampil_produk_a(){
        $produk = Produk::where('nama_produk','a')->first();
        return view('produk');
    }
}
