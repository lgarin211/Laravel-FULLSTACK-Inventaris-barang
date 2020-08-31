
@extends('template.head')
@section('conten')
@php
$data="form peminjaman barang";
@endphp
@if (session('status'))
<h1 class="btn text-center btn-danger">{{session('status')}}</h1>
@endif

<h1>pinjam</h1>
<form action="/pin_out" method="post">
@method('PUT')
<input type="text" class="form-control "name="barcode">
@csrf
<button type="submit"class="form-control btn-primary">kirim</button>
</form>

<h1>kembali</h1>
<form action="/pin_in" method="post">
@method('PUT')
<input type="text" class="form-control "name="barcode">
@csrf
<button type="submit"class="form-control btn-primary">kirim</button>
</form>
@endsection


