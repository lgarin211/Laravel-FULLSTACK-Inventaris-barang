
@extends('template.head')
@section('openddb')
Peminjaman Barang
@endsection
@section('conten')
@php
$data="form peminjaman barang";
@endphp
<form action="{{url('/')}}/send_news/{{$item->id}}/0" method="POST">
    <h1>produk barcode is: {{ $item->barcode }}</h1>
    @method('PUT')
    <h1>{{ $data }}</h1>
    <div class="form-group">
      <label for="lokasi">Peminjam barang</label>
      <input required type="text" class="form-control" id="lokasi" name="lokasi_out" placeholder="">
    </div>
    <div class="form-group">
        <label for="lokasi">kondisi barang sebelum dipinjam</label>
        <input required type="text" class="form-control" id="lokasi" name="kondisi_item" value="{{$item->kondisi_item}}">
      </div>
    @csrf
    <button type="submit" class="btn btn-primary btn-success">update data</button>
  </form>
@endsection
