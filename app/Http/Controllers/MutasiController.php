<?php

namespace App\Http\Controllers;

use App\Models\MutasiAset;
use App\Models\Aset;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class MutasiController extends Controller
{
    public function index()
    {
        $aset = Aset::all();
        $lokasi = Lokasi::all();
        $mutasi = MutasiAset::with(['aset', 'lokasiAsal', 'lokasiTujuan'])->get();

        return view('mutasi.index', compact('aset', 'lokasi', 'mutasi'));
    }

    public function store(Request $request)
    {
        $aset = Aset::find($request->aset_id);

        MutasiAset::create([
            'aset_id' => $request->aset_id,
            'lokasi_asal_id' => $aset->lokasi_id,
            'lokasi_tujuan_id' => $request->lokasi_tujuan_id,
            'tanggal_mutasi' => now()
        ]);

        // UPDATE lokasi aset
        $aset->lokasi_id = $request->lokasi_tujuan_id;
        $aset->save();

        return redirect()->back()->with('success', 'Mutasi berhasil!');
    }
}
