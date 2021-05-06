<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=['Nama_Produk','Harga_Produk','Kondisi','Stok','Toko','Alamat','Spesifikasi','Foto'];
}
