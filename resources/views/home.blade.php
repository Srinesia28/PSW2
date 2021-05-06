@extends('layout.main')
@section('title','Home')
@section('container')

    <div class="container">
      <div class="row">
        <center>
        <div class="col-md-10 bg">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/6.jpg" class="d-block w-100" alt="..."  style="width:30%;"  >
            </div>
            <div class="carousel-item">
              <img src="img/2.jpg" class="d-block w-100" alt="..." style="width:55%;">
            </div>
            <div class="carousel-item">
              <img src="img/3.jpg" class="d-block w-100" alt="..."  style="width:55%;">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
          </center>
      </div>
      </div>
    </div>

  <div class="container">
    <font color="black">
    <center><h1 id="about">Do you know?</h1>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-4">
                    <p>Website MSA laptop is website that was built by laravel frame work ,this web was built by 5 members ,this website was made for 
                      sales Don't think about price firstly,you must visit our website to see what you are looking for if you find it you can contact us 
                      about price we can set it as you can and purchase laptop ,maybe you will find some 
                      deficiencys we hope if you find it we will make it as motivation for the next time</p>
                </div>
                <div class="col-md-4">
                    <p>MSA Laptop adalah salah satu toko penjualan laptop  di kawasan Balige, yang menyediakan 
                    berbagai macam laptop dengan kualitas yang baik namun dibanderol dengan harga yang terjangkau. 
                    Ada banyak jenis laptop yang dijual di toko ini. Mulai dari merek Asus, Lenovo, dan masih banyak lagi.
                    Semua jenis laptop dengan beragam merek dan harga yang dapat disesuaikan dengan kebutuhan dan budget anda. 
                    Laptop merupakan produk terbaru dan recommended sehingga anda tidak akan ragu lagi jika membeli laptop dari toko MSA Laptop ini. </div>
              </div>
        </div>
          <br>
          <br>
          <center>
          <div class="container">
            <div class="panel panel-default " >
            <div class="row justify-content-center" >
                <div class="col-md-6">
                <br>
                    <p><b>New Normal - New Laptop</b></p><br>
                    <p><b>Let Us Help You</b></p>
                </div>
                <br> 
                <div class="col-md-6">
                    <p><b>Hubungi Kami</b></p><br>
                    <a class="btn btn-primary" href="{{url('/order')}}" >Order</a>
                </div>
                <div class="panel-body">
                </div>
              </div>
                </font>  
               </div>
  </body>
  @endsection