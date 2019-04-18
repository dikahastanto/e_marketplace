<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\halaman_utama;

class halaman_utamaController extends Controller
{
  public function index (){

    $nama="<strong>dika hastanto</strong>";
    $jurusan="Sistem Informasi";

    return view('tampil') -> with([
      'nama' => $nama,
      'jurusan' => $jurusan
    ]);
  }

  public function kategori(){
      $batas=6;

      $kategori= DB::table('tb_kategori_barang')->get();

      $barang=DB::table('tb_barang')->paginate($batas);

      $badges = 3;

      return view('halaman_utama') -> with ([
        'kategori' => $kategori,
        'barang' => $barang,
        'badges' => $badges
      ]);
      $no = $batas * ($barang->currentpage() - 1);



  }

  public function tampil_login(){
    return view('login');
  }
}
