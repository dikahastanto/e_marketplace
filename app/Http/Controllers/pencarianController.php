<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use app\pencarian;

class pencarianController extends Controller
{
    public function tampil_pencarian(Request $request){
      $batas = 5;
      $keyword = $request->input('keyword');

      $barang=DB::table('tb_barang')->where('nama_barang', 'LIKE' ,'%'.$keyword.'%')->paginate($batas);

      return view('hasil_pencarian')->with([
        'barang'=>$barang,
        'keyword'=>$keyword
      ]);
      $no = $batas * ($barang->currentpage() - 1);
    }
}
