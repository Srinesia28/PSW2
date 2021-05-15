@extends('layout.admin')
@section('title','Produk')

@section('container')


<div class="container">
    <div class="row">
    <div class="col-1o">
    <h2 style="margin-left:500px">Halaman Produk</h2><br>
        <table class="table table-success table-bordered">
                <thead class="thead-dark">
                <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga Produk</th>
                <th scope="col">Kondisi</th>
                <th scope="col">Stok</th>
                <th scope="col">Toko</th>
                <th scope="col">Alamat</th>
                <th scope="col">Spesifikasi</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
                </tr>
                
                
                </thead>
                <tbody>
                @foreach ($produk as $pr)
                <tr>
                <td scope="row">{{$loop->iteration}}</td>

               
                <td scope="row">{{$pr->Nama_Produk}}</td>
                <td scope="row">{{$pr->Harga_Produk}}</td>
                <td scope="row">{{$pr->Kondisi}}</td>
                <td scope="row">{{$pr->Stok}}</td>
                <td scope="row">{{$pr->Toko}}</td>
                <td scope="row">{{$pr->Alamat}}</td>
                <td scope="row">{{$pr->Spesifikasi}}</td>
                <td scope="row"><img src="{{ url('img') }}/{{ $pr->Foto }}" class="img-fluid" style="width:300px; high:300px;"></td>
                <td scope="row">
                   <a href="produk/edit/{{ $pr->id }}"   class="badge bg-success">Ubah</a>
                   <a href="produk/hapus/{{ $pr->id }}"  class="badge bg-danger">Hapus</a>
                </td>
                
                </tr>
                @endforeach
                
                @if (session('status'))
                    <div class="aleart alert-danger">
                     {{ session('status') }} 
                    </div>
                @endif
                
                </tbody>
        </table>
    </div>
    </div>

</div>
@endsection