<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class item_kategoriController extends Controller
{
    public function tampil_item(){

      $kategori= DB::table('tb_kategori_barang')->get();

      return view('insert_barang')->with('kategori' , $kategori);
    }
}
