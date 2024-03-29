@extends('layout.main')

@section('title','Halaman Order')
@section('container')
<body>

    
<section class="section pt-5 pb-5">
    <div class="container">
      <center><b><h1 style="font-size: 100px; padding-top: 100px;">BUAT ORDERAN</h1></b></center>
    </div>
  </section>

    <div class="container pt-5 pb-5">
        <div class="row pb-5 pt-5">
            <div class="col-md-4 pt-4">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th><h3>Info</h3></th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td> 
                            <!-- Bootstrap icons dari link: https://icons.getbootstrap.com/icons/geo-alt-fill/ -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                            </svg> Balige,Sumatera Utara
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- Bootstrap icons dari link: https://icons.getbootstrap.com/icons/telephone-fill/-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg> 08123456789
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- Bootstrap icons dari link: https://icons.getbootstrap.com/icons/envelope-fill/ -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                            </svg> msalaptop05@gmail.com
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- Bootstrap icons dari link: https://icons.getbootstrap.com/icons/twitter/ -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                            </svg> msalaptop05
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- Bootstrap icons dari link:  https://icons.getbootstrap.com/icons/instagram/ -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg> msalaptop05
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3 pt-1"></div>


            <div class="col-md-5">
            <h5>Masukkan Data Yang Diminta Pada Form:</h5>
                <form  method="post" action="{{route('pesanan.store')}}">
    
                @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" >
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="nama">Nama Pemesan</label>
                        <input type="text" class="form-control @error('nama_pemesan') is-invalid @enderror" id="nama" name="nama_pemesan" >
                        @error('nama_pemesan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama_produk">Nama Produk </label>
                            <select type="option" class="form-control @error('nama_produk') is-invalid @enderror"  id="nama_produk" placeholder="" name="nama_produk" >
                            <option></option>
                            <option>ASUS ZenBook Flip S (UX371)</option>
                            <option>ASUS ExpertBook P1440FA</option>
                            <option>ASUS VivoBook S S433</option>
                            <option>ASUS E410MA BV456FHD</option>
                            <option>ASUS ROG Strix G512LU Electro Punk</option>
                            <option>ASUS TUF Gaming F15 FX506</option>
                            <option>Lenovo Legion Y740</option>
                            <option>Lenovo Ideapad S530</option>
                            <option>Lenovo Ideapad L340</option>
                            <option>Lenovo Ideapad C340</option>
                            <option>Lenovo Yoga C940</option>
                            <option>Acer Spin 5 Lite SP513-55N</option>
                            <option>Acer ConceptD 7 Ezel Pro CC715-71P</option>
                            <option>Acer Aspire 5 A514-52G</option>
                            <option>Acer Aspire 5 A514-53</option>
                            <option>Acer Nitro 5 AN515-52</option>
                            </select>
                            @error('nama_produk') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror " id="alamat" name="alamat" >
                        @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="telp">No Telepon</label>
                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror " id="telp"  name="no_hp" >
                        @error('no_hp') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>  

                    <div class="form-group">
                        <label for="jumlah">jumlah</label>
                        <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" >
                        @error('jumlah') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <input type="text" class="form-control @error('pesan') is-invalid @enderror" id="pesan"  name="pesan" >
                        @error('pesan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                            
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>

  </body>
  @endsection