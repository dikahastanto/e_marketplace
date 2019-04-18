@extends('layouts.index')

@section('konten')
<div class="container">
  <div class="row">
    <!-- <div class="col-lg-6">
      <div class="productinfo">
        <h1>{{$barang->nama_barang}}</h1>
        <h2>Rp. {{$barang->harga_barang}} ,-</h2>
        <h4>{!!$barang->deskripsi!!}</h4>
      </div>
    </div> -->
    <div class="col-sm-12 padding-right">
      <div class="product-details"><!--product-details-->
        <div class="col-sm-5">
          <div id="similar-product" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
                <div class="carousel-inner">
                <div class="item active">
                  <a href=""><img src="{{url('images/',$barang->nama_gambar_utama)}}" alt=""></a>
                </div>
                <div class="item">
                  <a href=""><img src="{{url('images/',$barang->nama_gambar_1)}}" alt=""></a>
                </div>
                <div class="item">
                  <a href=""><img src="{{url('images/',$barang->nama_gambar_2)}}" alt=""></a>
                </div>
                <div class="item">
                  <a href=""><img src="{{url('images/',$barang->nama_gambar_3)}}" alt=""></a>
                </div>

              </div>

              <!-- Controls -->
              <a class="left item-control" href="#similar-product" data-slide="prev">
              <i class="fa fa-angle-left"></i>
              </a>
              <a class="right item-control" href="#similar-product" data-slide="next">
              <i class="fa fa-angle-right"></i>
              </a>
          </div>

        </div>
        <div class="col-sm-7">
          <div class="product-information"><!--/product-information-->
            <img src="images/product-details/new.jpg" class="newarrival" alt="" />
            <h2>{{$barang->nama_barang}}</h2>
            <img src="images/product-details/rating.png" alt="" />
            <span>
              <span>Rp {{$barang->harga_barang}}</span>
              <label>Quantity:</label>
              <input type="text" value="3" />
              <button type="button" class="btn btn-fefault cart">
                <i class="fa fa-shopping-cart"></i>
                Tambah Ke Keranjang
              </button>
            </span>
            <p><b>Ketersediaan :</b> In Stock</p>
            <p><b>Kondisi :</b> BARU</p>
            <p><b>Penjual:</b> {{$barang->id_vendor}}</p>
          </div><!--/product-information-->
        </div>
      </div><!--/product-details-->

      <div class="category-tab shop-details-tab"><!--category-tab-->
        <div class="col-sm-12">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#details" data-toggle="tab">Details</a></li>
            <li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
            <li><a href="#tag" data-toggle="tab">Tag</a></li>
            <li ><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
          </ul>
        </div>
        <div class="tab-content">
          <div class="tab-pane fade active in" id="details" >
            {!!$barang->deskripsi!!}
          </div>

          <div class="tab-pane fade" id="companyprofile" >
            <h2>{{$barang->id_vendor}}</h2>
            Deskripsi
          </div>

          <div class="tab-pane fade" id="tag" >
            @foreach($rekomendasi as $barang_rekomendasi)
            <div class="col-sm-3">
              <div class="product-image-wrapper">
                <div class="single-products">
                  <div class="productinfo text-center">
                    <img src="images/home/gallery1.jpg" alt="" />
                    <h2>{{$barang_rekomendasi->harga_barang}}</h2>
                    <p>Easy Polo Black Edition</p>
                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>

          <div class="tab-pane fade  in" id="reviews" >
            <div class="col-sm-12">
              <ul>
                <li><a href=""><i class="fa fa-user"></i>{{$barang->id_vendor}}</a></li>
                <li><a href=""><i class="fa fa-clock-o"></i>{{$barang->created_at}}</a></li>
                <li><a href=""><i class="fa fa-calendar-o"></i>{{$barang->created_at}}</a></li>
              </ul>
              <p>*Text Review*</p>
              <p><b>Tulis Review Anda</b></p>

              <form action="#">
                <span>
                  <input type="text" placeholder="Your Name"/>
                  <input type="email" placeholder="Email Address"/>
                </span>
                <textarea name="" ></textarea>
                <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                <button type="button" class="btn btn-default pull-right">
                  Submit
                </button>
              </form>
            </div>
          </div>

        </div>
      </div><!--/category-tab-->



    </div>
  </div>
</div>
@stop
