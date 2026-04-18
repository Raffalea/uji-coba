@extends('layout')

@section('content')

<h2>Data Lokasi</h2>

<form method="POST" action="/lokasi">
@csrf
<input type="text" name="nama_lokasi" placeholder="Nama Lokasi">
<button type="submit">Tambah</button>
</form>

<hr>

@foreach($data as $item)
<p>{{ $item->nama_lokasi }}</p>
@endforeach

@endsection
