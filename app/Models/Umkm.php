<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $table = 'umkm';

    // Izinkan 5 laci ini diisi dari form Admin
    protected $fillable = [
        'nama',
        'pemilik',
        'kontak',
        'deskripsi',
        'gambar',
    ];
}