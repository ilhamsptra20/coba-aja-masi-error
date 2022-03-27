<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = ['nik', 'isi_laporan', 'Foto', 'status'];


    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class, 'nik');
    }
}
