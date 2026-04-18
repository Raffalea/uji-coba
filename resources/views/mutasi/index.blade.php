@extends('layout')

@section('content')

<h2>Mutasi Aset</h2>

@if(session('success'))
<p style="color: green;">{{ session('success') }}</p>
@endif

<form method="POST" action="/mutasi">
@csrf

<select name="aset_id">
@foreach($aset as $a)
<option value="{{ $a->id }}">{{ $a->nama_aset }}</option>
@endforeach
</select>

<select name="lokasi_tujuan_id">
@foreach($lokasi as $l)
<option value="{{ $l->id }}">{{ $l->nama_lokasi }}</option>
@endforeach
</select>

<button type="submit">Mutasi</button>
</form>

<hr>

@foreach($mutasi as $m)
<p>
{{ $m->aset->nama_aset ?? '-' }} :
{{ $m->lokasiAsal->nama_lokasi ?? '-' }} →
{{ $m->lokasiTujuan->nama_lokasi ?? '-' }}
</p>
@endforeach

@endsection
