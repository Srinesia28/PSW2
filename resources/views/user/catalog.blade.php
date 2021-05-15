@extends('layout.main')
@section('title','Katalog')
@section('container')

<div class="container">
        <h2><u><center>CATALOG</center></u></h2>
        <br><br>
        <div class="row">
    @foreach($produk as $pr)
    <div class="col-md-4" style="margin-bottom: 10px;">
    <span class="mt-2">
        <div class="" style="width: 18rem;">
            <img src="{{ url('img') }}/{{ $pr->Foto }}" class="img-fluid" style="width:300px; ">
            <div class="card-body" >
                <h5 class="card-title">{{$pr->Nama_Produk}}</h5>
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
                                    Toko : {{$pr->Toko}}<br>
                                    Alamat : {{$pr->Alamat}}<br>
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
                    </div>
                </span>

            </div> 
             @endforeach
        </div>

</div>
    @endsection
