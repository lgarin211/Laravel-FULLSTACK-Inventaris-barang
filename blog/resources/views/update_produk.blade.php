@extends('template.head')
@section('conten')
@php
// var_dump($flight);
@endphp
<form action="/ui/{{$flight->id}}" method="POST">
@method('PUT')
<input type="text" name="nama_item" placeholder="{{$flight->nama_item}}">
<input type="text" name="kondisi_item" placeholder="{{$flight->kondisi_item}}">
<input type="text" name="banyak_item" placeholder="{{$flight->banyak_item}}">
<input type="text" name="lokasi_item" placeholder="{{$flight->lokasi_item}}">
<input type="text" name="kategori" placeholder="{{$flight->kategori}}">
{{-- <input type="text" name="barcode"> --}}
@csrf
<button type="submit">kirim</button>
</form>

@endsection
