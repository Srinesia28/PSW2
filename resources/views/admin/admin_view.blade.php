@extends('layout.admin')

@section('title','Admin_View')

@section('container')
<body>
  <div class="container">
  <center><h2 style="margin-left:100px">Daftar Pesanan </h2><br></center><br>
        <table class="table table-warning table-bordered">
        <thead class="thead-dark ">
            <tr>
                <th>NO</th>
                <th>Email</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nama Produk</th>
                <th>Nomor Telepon</th>
                <th>Jumlah</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($pesan as $ps)
                <tr>
                <td scope="row">{{$loop->iteration}}</td>
                <td scope="row">{{$ps->email}}</td>
                <td scope="row">{{$ps->nama_pemesan}}</td>
                <td scope="row">{{$ps->alamat}}</td>
                <td scope="row">{{$ps->nama_produk}}</td>
                <td scope="row">{{$ps->no_hp}}</td>
                <td scope="row">{{$ps->jumlah}}</td>
                <td scope="row">{{$ps->pesan}}</td>
                <td scope="row">
                   <a href="pesanan/hapus/{{ $ps->id }}"  class="badge bg-danger">Hapus</a>
                </td>
                </tr>
                @endforeach

                @if (session('status'))
                    <div class="aleart alert-danger">
                     {{ session('status') }} 
                    </div>
                @endif
                </tbody>

  </div>
</div>
</body>
@endsection