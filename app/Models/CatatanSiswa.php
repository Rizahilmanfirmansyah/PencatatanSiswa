<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanSiswa extends Model
{
    use HasFactory;
    protected $table = "catatan_siswa";
    protected $fillable = [
        'nama', 'kelas', 'alasan', 'gender'
    ];

}
