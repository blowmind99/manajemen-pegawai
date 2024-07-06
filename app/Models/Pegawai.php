<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';

    protected $fillable = [
        'nama_lengkap',
        'jabatan',
        'gaji',
        'alamat',
        'telepon',
        'email',
        'photo',
    ];
}
