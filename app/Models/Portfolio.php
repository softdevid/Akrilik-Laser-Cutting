<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['judul_produk', 'slug', 'gambar', 'lokasi', 'nama_kategori', 'client'];
}
