
@extends('template.head')
@section('conten')
@php
// var_dump($item);
$data="form barang keluar";
if ($pos=0) {
$data="form kembali";
}@endphp

<form action="/keluar/{{$item->id}}" method="POST">
    <h1>produk barcode is: {{ $item->barcode }}</h1>
    @method('PUT')
    <h1>{{ $data }}</h1>
    <div class="form-group">
      <label for="kondisi">Kondisi</label>
      <input type="text" class="form-control" id="kondisi"name="kondisi_item" placeholder="{{$item->kondisi_item}}">
    </div>
    <div class="form-group">
      <label for="lokasi">Lokasi barang</label>
      <input type="text" class="form-control" id="lokasi" name="lokasi_item" placeholder="{{$item->lokasi_item}}">
    </div>
    @csrf
    <button type="submit" class="btn btn-primary btn-success">update data</button>
  </form>

@endsection
