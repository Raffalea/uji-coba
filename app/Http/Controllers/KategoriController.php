<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriAset;

class KategoriController extends Controller
{
    //
    public function index() {
        $data = KategoriAset::all();
        return view('kategori.index', compact('data'));
    }

    public function store(Request $request) {
        KategoriAset::create($request->all());
        return redirect()->back();
    }

}
