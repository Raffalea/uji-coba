<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    //
    public function index()
    {
        $data = Lokasi::all();
        return view('lokasi.index', compact('data'));
    }

    public function store(Request $request)
    {
        Lokasi::create($request->all());
        return redirect()->back();
    }
}
