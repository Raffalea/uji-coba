<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    protected $table = 'aset';

    protected $fillable = [
        'nama_aset',
        'kategori_id',
        'lokasi_id'
    ];

    public function kategori() {
        return $this->belongsTo(KategoriAset::class, 'kategori_id');
    }

    public function lokasi() {
        return $this->belongsTo(Lokasi::class, 'lokasi_id');
    }
}
