@extends('layout')

@section('content')
<form method="POST" action="/kategori">
    @csrf
    <input type="text" name="nama_kategori">
    <button type="submit">Tambah</button>
</form>

@foreach($data as $item)
    <p>{{ $item->nama_kategori }}</p>
@endforeach
@endsection
