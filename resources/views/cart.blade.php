@extends('layouts.index')

@section('konten')
<section id="cart_items">
  <div class="container">
    <div class="breadcrumbs">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Keranjang Anda</li>
      </ol>
    </div>
    <div class="table-responsive cart_info">
      <table class="table table-condensed">
        <thead>
          <tr class="cart_menu">
            <td class="image">Item</td>
            <td class="description"></td>
            <td class="price">Price</td>
            <td class="quantity">Quantity</td>
            <td class="total">Total</td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          @foreach($barang as $tampil_barang)
          <tr>
            <td class="cart_product">
              <a href=""><img src="../images/{{$tampil_barang->nama_gambar_utama}}" class="img-responsive" width="110" alt="Gambar Tidak Tersedia"></a>
            </td>
            <td class="cart_description">
              <h4><a href="">{{ $tampil_barang->nama_barang }}</a></h4>
            </td>
            <td class="cart_price">
              <p>{{$tampil_barang->harga_barang}}</p>
            </td>
            <td class="cart_quantity">
              <div class="cart_quantity_button">
                <a class="cart_quantity_up" href=""> + </a>
                <input class="cart_quantity_input" type="text" name="quantity" value="{{$tampil_barang->jumlah}}" autocomplete="off" size="2">
                <a class="cart_quantity_down" href=""> - </a>
              </div>
            </td>
            <td class="cart_total">
              <p class="cart_total_price">{{ $tampil_barang->harga_barang * $tampil_barang->jumlah }}</p>
            </td>
            <td class="cart_delete">
              <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>

<section id="do_action">
  <div class="container">
    <div class="heading">
      <h3>Apa yang akan anda lakukan selanjutnya ?</h3>
      <p>Pilih cara pembayaran. Gunakan diskon jika anda punya voucher diskon</p>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="chose_area">
          <ul class="user_option">
            <li>
              <input type="checkbox">
              <label>Gunakan Kode Kupon</label>
            </li>
            <li>
              <input type="checkbox">
              <label>Gunakan Voucher Gift</label>
            </li>
            <li>
              <input type="checkbox">
              <label>Pembayaran Langsung Di Tempat</label>
            </li>
          </ul>
          <ul class="user_info">
            <li class="single_field">
              <label>Provinsi :</label>
              <select>
                <option>Lampung</option>
                <option>Sumsel</option>
                <option>Jakarta</option>
                <option>Jawa Barat</option>
                <option>Jawa Timur</option>
                <option>Aceh</option>
                <option>Papua</option>
                <option>Kalimantan Tengah</option>
              </select>

            </li>
            <li class="single_field">
              <label>Kabupaten / Kota :</label>
              <select>
                <option>Select</option>
                <option>Bandar Lampung</option>
                <option>Pringsewu</option>
                <option>Liwa</option>
                <option>Pesawaran</option>
                <option>Kalianda</option>
                <option>Natar</option>
                <option>Kota Agung</option>
              </select>

            </li>
            <li class="single_field zip-field">
              <label>Kode Pos:</label>
              <input type="text" name="kode_post">
            </li>
          </ul>
          <a class="btn btn-default update" href="">Dapatkan Voucher</a>
          <a class="btn btn-default check_out" href="">Lanjutkan</a>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="total_area">
          <ul>
            <li>Jumlah Barang Yang Anda Beli <span>{{ $jumlah_barang }}</span></li>
            <li>Sub Total
              <span>Rp

                  {{ $sub = $tampil_barang->harga_barang * $tampil_barang -> jumlah }}

              </span></li>
            <li>Biaya Pengiriman <span>Free</span></li>
            <li>Total Keseluruhan <span>Rp</span></li>
          </ul>
            <a class="btn btn-default update" href="{{route('cart')}}">Update</a>
        </div>
      </div>
    </div>
  </div>
</section><!--/#do_action-->

@stop
