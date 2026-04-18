@extends('layout')

@section('content')

<h2>Data Aset</h2>

<form method="POST" action="/aset">
@csrf

<input type="text" name="nama_aset" placeholder="Nama Aset">

<select name="kategori_id">
@foreach($kategori as $k)
<option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
@endforeach
</select>

<select name="lokasi_id">
@foreach($lokasi as $l)
<option value="{{ $l->id }}">{{ $l->nama_lokasi }}</option>
@endforeach
</select>

<button type="submit">Tambah</button>
</form>

<hr>

@foreach($aset as $a)
<p>
{{ $a->nama_aset }} |
{{ $a->kategori->nama_kategori }} |
{{ $a->lokasi->nama_lokasi }}
</p>
@endforeach

@endsection
