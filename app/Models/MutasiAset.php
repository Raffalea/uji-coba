<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MutasiAset extends Model
{
    //
    public function aset()
    {
        return $this->belongsTo(Aset::class, 'aset_id');
    }

    public function lokasiAsal()
    {
        return $this->belongsTo(Aset::class, 'lokasi_asal_id');
    }

    public function lokasiTujuan()
    {
        return $this->belongsTo(Aset::class, 'lokasi_tujuan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
