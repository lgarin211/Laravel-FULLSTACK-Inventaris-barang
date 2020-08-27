
@extends('template.head')
@section('conten')
@php
$data="form peminjaman barang";
@endphp
<h1>pinjam</h1>
<form action="/pin_out" id="ppp">
<input type="text" name="barcode">
@csrf
@method('PUT')
<button type="submit">cari barang</button>
</form>

<h1>kembali</h1>
<form action="/pin_out" id="ppp">
    <input type="text" name="barcode">
    @csrf
@method('PUT')
    <button type="submit">cari barang</button>
</form>
@endsection


