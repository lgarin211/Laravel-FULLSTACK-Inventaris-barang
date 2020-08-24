@extends('template.head')
@section('conten')
<form action="/out_find" method="post">
<input type="text" name="barcode">
@csrf
<button type="submit">kirim</button>
</form>

@endsection
