@extends('layout.main')
@section('title','Katalog')
@section('container')

<div class="container">
        <h2><u><center>CATALOG</center></u></h2>
        <br><br>

    <div class="row">
    @foreach($produk as $pr)
    <div class="col-md-4">
    <span class="mt-2">
        <div class="card" style="width: 18rem;">
            <img src="{{ url('img') }}/{{ $pr->Foto }}" class="img-fluid" style="width:300px; ">
            <div class="card-body" >
                <h5 class="card-title">{{$pr->Nama_Produk}}</h5>
                <p class="card-text">Toko : {{$pr->Toko}}</p>
                <p class="card-text">Alamat : {{$pr->Alamat}}</p>
                <a class="btn btn-primary" href="{{url('/order')}}" >Beli</a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Spesifikasi
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Selengkapnya</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Kondisi : {{$pr->Kondisi}} <br>
                            Stok : {{$pr->Stok}} <br>
                            Harga : Rp.{{$pr->Harga_Produk}} <br><br>
                            Spesifikasi :<br> {{$pr->Spesifikasi}} <br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <a class="btn btn-primary" href="{{url('/order')}}" >Beli</a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <br><br>
            </div>
            </span>
        </div>
    </div>

    @endforeach
</div>

    <!--
    <div class="row">
        @foreach($produk as $pr)
        <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img src="img/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$pr->Nama_Produk}}</h5>
                        <p class="card-text">Toko: {{$pr->Toko}}</p>
                        <p class="card-text">Alamat : {{$pr->Alamat}}</p>
                        <p class="card-text">Kondisi : {{$pr->Kondisi}}</p>
                        <p class="card-text">Stok : {{$pr->Stok}}</p>
                        <p class="card-text">Harga : Rp.{{$pr->Harga_Produk}} Juta</p>
                        <p class="card-text">Spesifikasi : {{$pr->Spesifikasi}}</p>
                        <a class="btn btn-primary" href="{{url('/order')}}" >Beli</a>
                       Button trigger modal 
                        <a type="button" class="btn btn-primary"  href="/catalog/{{$pr->id}}"> Spesifikasi </a>
                        <div class="modal" tabindex="-1"></div>
                    </div>
                    </div>
                    @endforeach
                    -->
    @endsection
