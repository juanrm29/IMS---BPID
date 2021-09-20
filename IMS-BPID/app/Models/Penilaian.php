<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

     public $table = "penilaian";


    protected $fillable = [
        'id', 'pengaduan_id', 'penilaian_satu', 'penilaian_dua', 'penilaian_tiga', 'penilaian_empat', 'penilaian_lima', 'petugas_id',
    ];

    protected $hidden = [
    
    ];

    public function pengaduan()
    {
    	return $this->hasOne(Pengaduan::class,'id', 'id');
    }

    public function proses()
    {
    return $this->hasMany(Pengaduan::class, 'status_id','status');
    }

    public function country() {
        return $this->hasOne(Pengaduan::class);
    }
}