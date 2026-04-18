@extends('layout')

@section('content')

<h3>Data Aset</h3>

@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<form method="POST" action="/aset">
@csrf

Nama Aset:<br>
<input type="text" name="nama_aset"><br><br>

Kategori:<br>
<select name="kategori_id">
<option value="">-- Pilih Kategori --</option>
@foreach($kategori as $k)
<option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
@endforeach
</select>
<br><br>

Lokasi:<br>
<select name="lokasi_id">
<option value="">-- Pilih Lokasi --</option>
@foreach($lokasi as $l)
<option value="{{ $l->id }}">{{ $l->nama_lokasi }}</option>
@endforeach
</select>
<br><br>

<button type="submit">Tambah</button>
</form>

<hr>

<table border="1" cellpadding="5">
<tr>
<th>No</th>
<th>Nama Aset</th>
<th>Kategori</th>
<th>Lokasi</th>
</tr>

@foreach($aset as $i => $a)
<tr>
<td>{{ $i+1 }}</td>
<td>{{ $a->nama_aset }}</td>
<td>{{ $a->kategori->nama_kategori ?? '-' }}</td>
<td>{{ $a->lokasi->nama_lokasi ?? '-' }}</td>
</tr>
@endforeach

</table>

@endsection
