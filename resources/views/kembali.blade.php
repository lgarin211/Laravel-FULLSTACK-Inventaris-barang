@extends('template.head')
@section('conten')
@php
$kata="form pengembalian barang";
// dd($data);
@endphp
{{$data[1]}}

<form action="{{url('/')}}/send_news2/{{$data[0]->id}}/1" method="POST">
    <h1>produk barcode is: {{ $data[0]->barcode }}</h1>
    <h3>barang ini di pinjam oleh {{$data[0]->lokasi_item}}</h3>
    @method('PUT')
    <h1>{{ $kata }}</h1>
    <div class="form-group">
        <label for="lokasi">kondisi barang</label>
        <input required type="text" class="form-control" id="lokasi" name="kondisi_item" placeholder="max {{$data[0]->banyak_item}}" value="{{$data[0]->kondisi_item}}">
    </div>
    <div class="form-group">
        <label for="lokasi">penerima</label>
        <input required type="text" class="form-control" id="lokasi" name="lokasi_out" placeholder="">
    </div>
    @csrf
    <button type="submit" class="btn btn-primary btn-success">update data</button>
</form>


@endsection
