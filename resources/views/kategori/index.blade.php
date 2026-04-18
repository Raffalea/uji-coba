@extends('layout')

@section('content')

<h3>Data Kategori</h3>

@if(session('success'))
<p>{{ session('success') }}</p>
@endif

@if($errors->any())
@foreach($errors->all() as $error)
<p>{{ $error }}</p>
@endforeach
@endif

<form method="POST" action="/kategori">
@csrf

Nama Kategori:<br>
<input type="text" name="nama_kategori">
<br><br>

<button type="submit">Tambah</button>
</form>

<hr>

<table border="1" cellpadding="5">
<tr>
<th>No</th>
<th>Nama Kategori</th>
</tr>

@foreach($data as $i => $item)
<tr>
<td>{{ $i+1 }}</td>
<td>{{ $item->nama_kategori }}</td>
</tr>
@endforeach

</table>

@endsection
