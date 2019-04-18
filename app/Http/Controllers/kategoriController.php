<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function tampil($kategori){
      $batas=6;

      $kategori_barang_tampil = DB::table('tb_kategori_barang')->get();

      $barang=DB::table('tb_barang')->where('kategori',$kategori)->paginate($batas);

      return view('halaman_kategori') -> with ([
        'kategori_barang_tampil' => $kategori_barang_tampil,
        'barang' => $barang,
        'kategori'=>$kategori
      ]);
      $no = $batas * ($barang->currentpage() - 1);
    }

}
