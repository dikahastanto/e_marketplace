@extends('layouts.index')

@section('slider')
<section id="slider"><!--slider-->
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#slider-carousel" data-slide-to="1"></li>
            <li data-target="#slider-carousel" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
              <div class="col-sm-6">
                <h1><span>E</span>-MARKETPLACE</h1>
                <h2>ENJOY YOUR LIFE</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <button type="button" class="btn btn-default get">Get it now</button>
              </div>
              <div class="col-sm-6">
                <img src="images/home/1.png" class="girl img-responsive" alt="" />
              </div>
            </div>
            <div class="item">
              <div class="col-sm-6">
                <h1><span>E</span>-MARKETPLACE</h1>
                <h2>SELL OR BUY ITEM</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <button type="button" class="btn btn-default get">Get it now</button>
              </div>
              <div class="col-sm-6">
                <img src="images/home/2.png" class="girl img-responsive" alt="" />
              </div>
            </div>

            <div class="item">
              <div class="col-sm-6">
                <h1><span>E</span>-MARKETPLACE</h1>
                <h2>STAR YOUR BUSSINESS WITH US</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <button type="button" class="btn btn-default get">Get it now</button>
              </div>
              <div class="col-sm-6">
                <img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
              </div>
            </div>

          </div>

          <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>

      </div>
    </div>
  </div>
</section><!--/slider-->
@section('konten')
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="left-sidebar">
          <h2>Category</h2>
          <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            @foreach($kategori_barang_tampil as $kategori_barang)
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"><a href="{{route('kategori', $kategori_barang->nama_kategori)}}">{{ $kategori_barang->nama_kategori }}</a></h4>
              </div>
            </div>
            @endforeach
          </div><!--/category-products-->

          <div class="brands_products"><!--brands_products-->
            <h2>Brands</h2>
            <div class="brands-name">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
              </ul>
            </div>
          </div><!--/brands_products-->

          <div class="price-range"><!--price-range-->
            <h2>Price Range</h2>
            <div class="well text-center">
               <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
               <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
            </div>
          </div><!--/price-range-->

          <div class="shipping text-center"><!--shipping-->
            <img src="images/home/shipping.jpg" alt="" />
          </div><!--/shipping-->

        </div>
      </div>

      <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
          <h2 class="title text-center">Kategori {{ $kategori }}</h2>
          @foreach($barang as $tampil_barang)
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="images/{{$tampil_barang->nama_gambar_utama}}" style="width:250px;height:250px;" />
                  <h2>{{$tampil_barang->harga_barang}}</h2>
                  <p>{{$tampil_barang->nama_barang}}</p>
                  <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                </div>
                <div class="product-overlay">
                  <div class="overlay-content">
                    <h2>{{$tampil_barang->harga_barang}}</h2>
                    <p>{{$tampil_barang->nama_barang}}</p>
                    <div class="row">
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                      <a href="{{ route('tapil_detail_barang',$tampil_barang->id_barang) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <br><br>
            <center>{{ $barang->links() }}</center>
        </div><!--features_items-->

      </div>
    </div>
  </div>
</section>
@endsection
@stop
