@extends('layout.main')
@section('title','Tambah Produk Baru')
@section('container')

<body>
    <div class="container ">
        <h3 style="margin-left:500px">Halaman Saran</h3> <br>
        <h5>Masukkan Data Yang Diminta Pada Form:</h5>
                        <form  method="post" action="/komentar">
            
                        @csrf
                            <div class="form-group">
                                <label for="nama_pengirim">Nama</label>
                                <input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" >
                            </div>
            
                            <div class="form-group">
                                <label for="komentar">Saran</label>
                                <input type="text" class="form-control" id="komentar" name="komentar" >
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
    </div>

    <br><br>
    <h3 style="margin-left:600px">Daftar Saran </h3>
    <div class="container ">
        <div class="row">
                @foreach ($komen as $k)
                <div class="col-md-6" style="margin-bottom: 40px;">
                        <div class="card">
                            <h5 class="card-header" ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>
                            {{$k->nama_pengirim}}</h5>
                            <div class="card-body">
                                <h5 class="card-title">{{$k->komentar}}</h5>  
                            </div>
                        </div>
                </div>   
                @endforeach
        </div>
    </div>
<br>

@endsection