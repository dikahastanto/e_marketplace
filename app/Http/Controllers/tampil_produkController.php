<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Barang;

class tampil_produkController extends Controller
{
  public function detail_barang($id){

  $barang=DB::table('tb_barang')->where('id_barang',$id)->first();

  $rekomendasi = DB::table('tb_barang')
                ->join('tb_cart', 'tb_barang.id_barang', '=', 'tb_cart.id_barang')
                ->get();

    return view('detail_barang')->with([
      'id'=>$id,
      'barang'=>$barang,
      'rekomendasi' => $rekomendasi
    ]);

  }

  public function detail_barang_user($id){

  $barang=DB::table('tb_barang')->where('id_barang',$id)->first();

    return view('detail_barang_user')->with([
      'id'=>$id,
      'barang'=>$barang
    ]);

  }
}
