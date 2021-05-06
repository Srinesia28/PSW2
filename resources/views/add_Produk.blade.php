@extends('layout.admin')

@section('title','Tambah Produk Baru')
@section('container')

<body>
<div class="container ">
<h3 style="margin-left:500px">Halaman Tambah Produk</h3>
<form  method="post" action="/produk">
@csrf
    <div class="fomr-group ">
        <label for="nama_produk" class="form-label">Nama Produk</label>
        <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk" >
    </div>

    <div class="fomr-group">
      <label for="kondisi" class="form-label">Kondisi</label>
      <input type="text" class="form-control " id="kondisi" name="kondisi" placeholder="Kondisi Laptop Saat Ini">
    </div>
    <div class="fomr-group">
      <label for="stok" class="form-label">Stok</label>
      <input type="text" class="form-control " id="stok" name="stok" placeholder="Stok Saat Ini">
    </div>
    <div class="fomr-group">
      <label for="harga_produk" class="form-label">Harga Produk</label>
      <input type="text" class="form-control " id="harga_produk" name="harga_produk" placeholder="Masukkan tipe data Float Misal :12.6">
    </div>
    <div class="fomr-group">
      <label for="toko" class="form-label">Nama Toko Penjual</label>
      <input type="text" class="form-control" id="toko" name="toko" placeholder="Nama Toko">
    </div>
    <div class="fomr-group">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
    </div>

    <div class="fomr-group">
      <label for="spesifikasi" class="form-label">Spesifikasi</label>
      <input type="text" class="form-control" id="spesifikasi" name="spesifikasi" placeholder="Masukkan Spesifikasi">
    </div>
    <div class="fomr-group">
      <label for="gambar" class="form-label">Gambar</label>
      <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Gambar">
    </div>
    <button type="submit" class="btn btn-primary" 
    style="margin-top=30px;
          margin-left:550px;">Tambah Produk</button>
    </form>
    </div>
    </body>
    @endsection