<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hastantoController extends Controller
{
    public function index (){

      $nama="<strong>dika hastanto</strong>";
      $jurusan="Sistem Informasi";

      return view('tampil') -> with([
        'nama' => $nama,
        'jurusan' => $jurusan
      ]);
    }

    public function namajurusan (){
      $datas = ['Sistem Informasi','Teknik Informatika','Teknik Gaming'];

      return view('tampiljurusan') -> with ('datas',$datas);
    }
}
