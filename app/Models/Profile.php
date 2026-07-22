<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    
    protected $fillable = [
        'sejarah', 'visi', 'misi', 'logo', 
        'jumlah_penduduk', 'jumlah_laki', 'jumlah_perempuan', 'jumlah_kk'
    ];
}