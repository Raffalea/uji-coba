<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\KategoriAset;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    public function index()
    {
        $aset = Aset::with(['kategori', 'lokasi'])->get();
        $kategori = KategoriAset::all();
        $lokasi = Lokasi::all();

        return view('aset.index', compact('aset', 'kategori', 'lokasi'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'nama_aset' => 'required',
            'kategori_id' => 'required',
            'lokasi_id' => 'required'
        ]);

        Aset::create([
            'nama_aset' => $request->nama_aset,
            'kategori_id' => $request->kategori_id,
            'lokasi_id' => $request->lokasi_id
        ]);

        return redirect()->back();
    }
}
