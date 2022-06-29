<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $fillable = ['judul_service', 'slug', 'jenis_service', 'gambar', 'kutipan', 'deskripsi'];
}
