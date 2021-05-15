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
        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" placeholder="Nama Produk" >
        @error('nama_produk') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="fomr-group">
      <label for="kondisi" class="form-label">Kondisi</label>
      <input type="text" class="form-control @error('kondisi') is-invalid @enderror " id="kondisi" name="kondisi" placeholder="Kondisi Laptop Saat Ini">
      @error('kondisi') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="fomr-group">
      <label for="stok" class="form-label">Stok</label>
      <input type="text" class="form-control @error('stok') is-invalid @enderror " id="stok" name="stok" placeholder="Stok Saat Ini">
      @error('stok') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="fomr-group">
      <label for="harga_produk" class="form-label">Harga Produk</label>
      <input type="text" class="form-control @error('harga_produk') is-invalid @enderror " id="harga_produk" name="harga_produk" placeholder="Masukkan tipe data Float Misal :12.6">
      @error('harga_produk') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="fomr-group">
      <label for="toko" class="form-label">Nama Toko Penjual</label>
      <input type="text" class="form-control @error('toko') is-invalid @enderror" id="toko" name="toko" placeholder="Nama Toko">
      @error('toko') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="fomr-group">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Alamat">
      @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="fomr-group">
      <label for="spesifikasi" class="form-label">Spesifikasi</label>
      <input type="text" class="form-control @error('spesifikasi') is-invalid @enderror" id="spesifikasi" name="spesifikasi" placeholder="Masukkan Spesifikasi">
      @error('spesifikasi') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="fomr-group">
      <label for="gambar" class="form-label">Gambar</label>
      <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" placeholder="Gambar">
      @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <button type="submit" class="btn btn-primary" 
    style="margin-top=30px;
          margin-left:550px;">Tambah Produk</button>
    </form>
    </div>
    </body>
    @endsection