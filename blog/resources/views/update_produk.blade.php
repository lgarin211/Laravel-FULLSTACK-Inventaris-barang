@extends('template.head')
@section('conten')
@php
// var_dump($flight);
@endphp
<form action="/ui/{{$flight->id}}" method="POST">
<h1>produk barcode is: {{ $flight->barcode }}</h1>
@method('PUT')

    <div class="form-group card-body card  text-white bg-primary mb-3">

        <label for="NAMA PRODUK">NAMA PRODUK</label>
        <input type="text" name="nama_item" class="text-center form-control" placeholder="{{'nama item'}}" autofocus>
<hr>

<label for="NAMA PRODUK">KONDISI PRODUK</label>
        <select name="kondisi_item" class="form-control">
            <option>pilih Kondisi Barang<hr></option>
            <option value="Baru">Baru</option>
            <option value="Baik">Baik</option>
            <option value="Rusak">Rusak</option>
        </select><hr>
        <label for="NAMA PRODUK">KUANTISA PRODUK</label>
        <input type="number" name="banyak_item" class="text-center form-control" placeholder="{{'banyak item'}}" autofocus>
<hr>
         <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationDefault01">Default Lokasi Item</label>
              <select name="lok1" class="form-control">
                <option value="Instruktur Rpl">Instruktur Rpl</option>
                <option value="Lab RPL1">Lab RPL1</option>
                <option value="Lab RPL2">Lab RPL2</option>
            </select>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationDefault02">Costem Lokasi Item</label>
              <input type="text" class="form-control" id="validationDefault02"  placeholder="Custem Lokasion">
            </div>
          </div><br>
        {{-- <input type="text" name="barcode"> --}}
        @csrf
        <button type="submit" class="btn bg-dark text-danger ">kirim</button>
    </div>
</form>

@endsection
