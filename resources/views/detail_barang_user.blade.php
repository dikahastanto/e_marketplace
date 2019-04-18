@extends('layouts.login_user')

@section('konten')
<script type="text/javascript" src="{{url('js/ckeditor/ckeditor.js')}}"></script>
<div class="container">
  <div class="row">
    <div class="col-lg-8 productinfo">
      <h2>Update Barang</h2><br>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <div class="login-form">
        <form class="login-form" action="{{route('barang.update', $barang->id_barang)}}" method="post">
          {{ csrf_field() }} {{ method_field('PUT')}}
          <input type="text" name="nama_barang" value="{{$barang->nama_barang}}">
          <input type="text" name="harga_barang" value="{{$barang->harga_barang}}">
          Deskrisi Barang Anda
          <textarea name="deskripsi" class="ckeditor" id="ckedtor" placeholder="Deskrisi Barang Anda">{{$barang->deskripsi}}</textarea>
          <div class="col-sm-4">
            <button type="submit" name="send" class="btn btn-default">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@stop
