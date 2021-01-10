@extends('template.head')
@section('conten')
<h1 class="btn btn-warning">Tidak ada Barang</h1>
<form action="/insert" method="POST">
    <input required type="text" class="form-control " name="barcode" autofocus>
    @csrf
    <button type="submit" class="form-control btn-primary">kirim</button>
</form>

@endsection
