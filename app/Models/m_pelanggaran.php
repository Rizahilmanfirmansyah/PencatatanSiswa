<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_pelanggaran extends Model
{
    use HasFactory;
    protected $table = 'tb_pelanggaran';
    protected $fillable = [
        'nama', 'bentuk_pelanggaran', 
    ];
}