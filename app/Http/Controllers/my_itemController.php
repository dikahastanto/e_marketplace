<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use App\my_item;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class my_itemController extends Controller
{

    public function tampil_item ($auth){
      $batas = 5;

      $vendor = $auth;
      $null = "";
      $barang=DB::table('tb_barang')->where('id_vendor',$vendor)->paginate($batas);

      return view('user_item')->with([
        'barang'=>$barang,
        'auth'=>$auth,
        'null' => $null
      ]);
      $no = $batas * ($barang->currentpage() - 1);
    }

    public function insert_item (Request $req,$auth){
      $vendor = $auth;

      if($req->hasFile('gambar')){

        $temp = explode(".", $_FILES["gambar"]["name"]);
        $nama_baru = round(microtime(true)) . '.' . end($temp);

        $folder_cover = "../public/images/";
        $asal = $_FILES['gambar']['tmp_name'];
        $foto = $folder_cover. basename($nama_baru);
        $prosesupload = move_uploaded_file($_FILES['gambar']['tmp_name'], $foto);

        $image = $nama_baru;

      }else {
        $image = "default.png";
      }

      if($req->hasFile('gambar1')){

        $temp1 = explode(".", $_FILES["gambar1"]["name"]);
        $nama_baru1 = "1".round(microtime(true)) . '.' . end($temp1);

        $folder_cover1 = "../public/images/";
        $asal1 = $_FILES['gambar1']['tmp_name'];
        $foto1 = $folder_cover1. basename($nama_baru1);
        $prosesupload1 = move_uploaded_file($_FILES['gambar1']['tmp_name'], $foto1);

        $image1 = $nama_baru1;

      }else {
        $image1 = "default.png";
      }

      if($req->hasFile('gambar2')){

        $temp2 = explode(".", $_FILES["gambar2"]["name"]);
        $nama_baru2 = "2".round(microtime(true)) . '.' . end($temp2);

        $folder_cover2 = "../public/images/";
        $asal2 = $_FILES['gambar2']['tmp_name'];
        $foto2 = $folder_cover2. basename($nama_baru2);
        $prosesupload2 = move_uploaded_file($_FILES['gambar2']['tmp_name'], $foto2);

        $image2 = $nama_baru2;

      }else {
        $image2 = "default.png";
      }

      if($req->hasFile('gambar3')){

        $temp3 = explode(".", $_FILES["gambar"]["name"]);
        $nama_baru3 = "3".round(microtime(true)) . '.' . end($temp3);

        $folder_cover3 = "../public/images/";
        $asal3 = $_FILES['gambar3']['tmp_name'];
        $foto3 = $folder_cover3. basename($nama_baru3);
        $prosesupload3 = move_uploaded_file($_FILES['gambar3']['tmp_name'], $foto3);

        $image3 = $nama_baru3;

      }else {
        $image3 = "default.png";
      }

      $nama_barang = $req->input('nama_barang');
      $harga_barang = $req->input('harga_barang');
      $deskripsi = $req->input('deskripsi');
      $kategori = $req->input('kategori');

      $data = array('nama_barang' =>$nama_barang , 'harga_barang'=>$harga_barang, 'kategori'=>$kategori ,'id_vendor'=>$vendor, 'deskripsi'=>$deskripsi,'nama_gambar_utama'=>$image,'nama_gambar_1'=>$image1,'nama_gambar_2'=>$image2,'nama_gambar_3'=>$image3);

      DB::table('tb_barang')->insert($data);

      if ($data) {
        echo "<script type=text/Javascript> alert( 'Data Berhasil Di Simpan !')
                window.location = '../form/insert_barang';
              </script>";
      }else {
        echo "<script type=text/Javascript> alert( 'Data Gagal Di Simpan !')
                window.location = '../form/insert_barang';
              </script>";
      }

    }

    public function update_item (Request $req,$auth){

    }
}
