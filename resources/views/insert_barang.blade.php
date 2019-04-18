@extends('layouts.login_user')

@section('konten')
<script type="text/javascript" src="{{url('js/ckeditor/ckeditor.js')}}"></script>
<div class="container">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="productinfo">
        <h2>Input Data Barang</h2><br>
          <div class="login-form col-sm-10">
            <form class="login-form" action="{{route('insert',Auth::user()->name)}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input type="text" name="nama_barang" placeholder="Nama Barang">
              <input type="text" name="harga_barang" placeholder="Harga Barang">
              Deskrisi Barang Anda
              <textarea name="deskripsi" class="ckeditor" id="ckedtor" placeholder="Deskrisi Barang Anda"></textarea><br>

              <div class="row">
                <div class="col-sm-8">
                  <select name="kategori">
                    @foreach($kategori as $tampil)
                    <option value="{{$tampil->nama_kategori}}">{{$tampil->nama_kategori}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-sm-4">
                  <h2>*Kategori</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <input type="file" name="gambar">
                </div>
                <div class="col-sm-4">
                  <h2>*Gambar Utama</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <input type="file" name="gambar1">
                </div>
                <div class="col-sm-4">
                  <h2>*Gambar Lain</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <input type="file" name="gambar2">
                </div>
                <div class="col-sm-4">
                  <h2>*Gambar Lain</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <input type="file" name="gambar3">
                </div>
                <div class="col-sm-4">
                  <h2>*Gambar Lain</h2>
                </div>
              </div>
              <div class="col-sm-4">
                <button type="submit" name="send" class="btn btn-default">Kirim</button>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
