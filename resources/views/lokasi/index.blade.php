@extends('layout')

@section('content')

<h3>Data Lokasi</h3>

@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<form method="POST" action="/lokasi">
@csrf
Nama Lokasi:<br>
<input type="text" name="nama_lokasi">
<br><br>

<button type="submit">Tambah</button>
</form>

<hr>

<table border="1" cellpadding="5">
<tr>
<th>No</th>
<th>Nama Lokasi</th>
</tr>

@foreach($data as $i => $item)
<tr>
<td>{{ $i+1 }}</td>
<td>{{ $item->nama_lokasi }}</td>
</tr>
@endforeach

</table>

@endsection
