@extends('layout.admin')
@section('title', 'Ubah Data Produk')
@section('container')
    <div class="container">
        <br>

            <center><h1><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;UBAH DATA</h1></center>   
            <div class="hero rounded-3 px-5 pb-5 pt-5">
            <h4><a href="/produk" class="badge bg-primary">Kembali</a></h4>
            <br>
                <form  enctype="multipart/form-data" action="/produk/update/{{ $produk->id }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control" value="{{ $produk->Nama_Produk }}">
                    </div>
                    <div class="form-group">
                        <label>Harga Produk</label>
                        <input type="text" name="harga_produk" class="form-control" value="{{ $produk->Harga_Produk }}">
                    </div>
                    <div class="form-group">
                        <label>Kondisi</label>
                        <input type="text" name="kondisi" class="form-control" value="{{ $produk->Kondisi }}">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control" value="{{ $produk->Stok }}">
                    </div>
                    <div class="form-group">
                        <label>Toko</label>
                        <input type="text" name="toko" class="form-control" value="{{ $produk->Toko }}">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{ $produk->Alamat }}">
                    </div>
                    <div class="form-group">
                        <label>Spesifikasi</label>
                        <input type="text" name="spesifikasi" class="form-control" value="{{ $produk->Harga_Produk }}">
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="gambar" class="form-control" value=" $produk->Foto ">
                        <img src="{{ url('img') }}/{{ $produk->Foto }}" class="img-fluid" style="width:300px; high:300px;">
                    </div>
                    <div class="form-group">
                    <br><br>
                        <button type="submit" class="btn btn-warning px-5">Ubah</button>
                    </div>
                </form>
            </div>

    </div>
@endsection