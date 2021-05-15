<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;
    protected $fillable=['email','nama_pemesan','alamat','nama_produk','no_hp','jumlah','pesan'];
}
