@extends('layout.Admin')
@section('container')


<div class="container">
    <div class="row">
    <div class="col-1o">
        <div class="mt-3">Daftar Saran</div>
        <table class="table">
                <thead class="thead-dark">
                <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama</th>
                <th scope="col">Komentar</th>
                <th scope="col">Aksi</th>
                </tr>
                
                </thead>
                <tbody>
                @foreach ($komen as $k)
                <tr>
                <td scope="row">{{$loop->iteration}}</td>
                <td scope="row">{{$k->nama_pengirim}}</td>
                <td scope="row">{{$k->komentar}}</td>
                <td scope="row">
                   <a href="komentar/hapus/{{ $k->id }}"  class="badge bg-danger">Hapus</a>
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