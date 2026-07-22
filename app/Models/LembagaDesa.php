<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LembagaDesa extends Model
{
    // Pastikan ini 'lembaga_desas' (jamak), sesuai dengan file migrasi
    protected $table = 'lembaga_desas'; 
    
    // PERBAIKAN: Wajib menambahkan 'logo' agar lokasi gambar bisa tersimpan ke database
    protected $fillable = ['nama', 'deskripsi', 'logo'];
}