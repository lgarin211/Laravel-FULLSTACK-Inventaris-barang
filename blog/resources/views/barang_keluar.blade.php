
@extends('template.head')
@section('conten')
@php
// var_dump($item);
$data="form barang keluar";
@endphp

<form action="/keluar/{{$item->id}}" method="POST">
    <h1>produk barcode is: {{ $item->barcode }}</h1>
    @method('PUT')
    <h1>{{ $data }}</h1>
    <div class="form-group">
      <label for="lokasi">Lokasi tujuan barang</label>
      <input type="text" class="form-control" id="lokasi" name="lokasi_out" placeholder="{{$item->lokasi_item}}">
    </div>
    <div class="form-group">
        <label for="lokasi">banyak barang keluar</label>
        <input type="text" class="form-control" id="lokasi" name="min_item" placeholder="max {{$item->banyak_item}}">
      </div>
    @csrf
    <button type="submit" class="btn btn-primary btn-success">update data</button>
  </form>

@endsection
