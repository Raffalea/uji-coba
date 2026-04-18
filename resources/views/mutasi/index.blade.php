@extends('layout')

@section('content')

<h3>Mutasi Aset</h3>

@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<form method="POST" action="/mutasi">
@csrf

Aset:<br>
<select name="aset_id">
<option value="">-- Pilih Aset --</option>
@foreach($aset as $a)
<option value="{{ $a->id }}">{{ $a->nama_aset }}</option>
@endforeach
</select>
<br><br>

Lokasi Tujuan:<br>
<select name="lokasi_tujuan_id">
<option value="">-- Pilih Lokasi --</option>
@foreach($lokasi as $l)
<option value="{{ $l->id }}">{{ $l->nama_lokasi }}</option>
@endforeach
</select>
<br><br>

<button type="submit">Mutasi</button>
</form>

<hr>

<table border="1" cellpadding="5">
<tr>
<th>No</th>
<th>Aset</th>
<th>Dari</th>
<th>Ke</th>
</tr>

@foreach($mutasi as $i => $m)
<tr>
<td>{{ $i+1 }}</td>
<td>{{ $m->aset->nama_aset ?? '-' }}</td>
<td>{{ $m->lokasiAsal->nama_lokasi ?? '-' }}</td>
<td>{{ $m->lokasiTujuan->nama_lokasi ?? '-' }}</td>
</tr>
@endforeach

</table>

@endsection
