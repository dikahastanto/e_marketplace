@extends('layouts.login_user')

@section('konten')
<div class="container">
    <div class="row">
      <div class="col-sm-2 ">
        <a href="{{route ('insert.barang')}}"><button name="insert" class="btn btn-primary">Insert</button></a>
      </div>
      <div class="col-sm-12 ">
        @if (count($barang))
          <h3>Barang Anda</h3>
        @else
          Anda Belum Menjual Barang Apapun
        @endif
        <table class="table table-stripped table-hover">
          <tr>
            <th>Id Barang</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Deskripsi</th>
            <th>Action</th>
          </tr>
          @foreach ($barang as $tampil_item)
          <tr>
            <td>{{ $tampil_item->id_barang }}</td>
            <td>{{$tampil_item->nama_barang}}</td>
            <td>{{$tampil_item->harga_barang}}</td>
            <td>{{$tampil_item->deskripsi}}</td>
            <td>
              <a href="{{ route('tapil_detail_barang_user',$tampil_item->id_barang) }}"><input type="submit" class="btn btn-success" value="Detail"></a>
              <form class="" action="{{ route('barang.destroy',$tampil_item->id_barang ) }}" method="post">
                {{ csrf_field() }} {{ method_field('DELETE')}}
                <input type="submit" onClick='return konfirmasi()' class="btn btn-danger" value="Delete">
              </form>
            </td>
          </tr>
          @endforeach
        </table>
        <center>{{ $barang->links() }}</center>
    </div>
  </div>
</div>
<script type="text/javascript" language="javascript">
	function konfirmasi () {
		var pilihan = confirm ("Apakah Anda Yakin Menghapus Data ?");
		if(pilihan){
			return true
			}else{
			alert ("Proses Di Batalkan")
			return false
			}
	}
</script>

@endsection
