@extends('layout.admin')
@section('title','Admin_View')
@section('container')
<body>
  <div class="container">
  <center><h1 class="lead">Daftar Pesanan</h1></center><br>
        <table border="1px" class="table">
        <thead class="thead-dark">
            <tr>
              <th>NO</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($pesan as $ps)
                <tr>
                <td scope="row">{{$loop->iteration}}</td>
                <td scope="row">{{$ps->Nama_Pemesan}}</td>
                <td scope="row">{{$ps->Email}}</td>
                <td scope="row">{{$ps->Alamat}}</td>
                <td scope="row">{{$ps->no_hp}}</td>
                <td scope="row">{{$ps->Pesan}}</td>
                <td scope="row">
                   <!---<a href=""   class="badge bg-success">Konfirmasi</a> -->
                   <a href="pesanan/hapus/{{ $ps->id }}"  class="badge bg-danger">Hapus</a>
                </td>
                
                </tr>
                @endforeach
                </tbody>

  </div>
</div>
</body>
@endsection