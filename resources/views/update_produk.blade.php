@extends('template.head')
@section('conten')
@php
// dd($final);
// var_dump($final[0]);
@endphp
<form action="{{url('/')}}/ui/{{$final[0]->id}}" method="POST">
    <h1>produk barcode is: {{ $final[0]->barcode }}</h1>
    @method('PUT')
    <div class="form-group row. card-body card  text-white bg-primary mb-3">
        <label for="NAMA PRODUK">NAMA PRODUK</label>
        <div class="row">
            <select required class="col-md-2 text-center form-control" name="key_p" id="">
                <option value="">select your key</option>
                @foreach ($final[2][4] as $key)
                <option value="{{$key->value}}">{{$key->key}}</option>
                @endforeach
            </select>
            <input required type="text" name="nama_item" class="text-center col-md-8 form-control" placeholder="{{'nama item'}}" autofocus>
            <input required type="number" name="banyak_item" class="text-center col-md-2 form-control" placeholder="{{'Banyak Barang'}}" value="1">
        </div>
        <hr>
        <label for="NAMA PRODUK">DESKRISI PRODUK</label>
        <textarea required type="text" name="deksripsi" class="text-center form-control" placeholder="masukan deskripsi" autofocus></textarea>
        {{-- <hr>
        <input required type="hidden" name="banyak_item" value="1"> --}}
        <label for="NAMA PRODUK">KONDISI PRODUK</label>
        <select required name="kondisi_item" class="form-control">
            <option>pilih Kondisi Barang
                <hr>
            </option>
            @foreach ($final[2][1] as $kondisi)
            <option value="{{$kondisi->value}}">{{$kondisi->value}}</option>
            @endforeach
        </select>
        <hr>
        <label for="NAMA PRODUK">KATEGORY</label>
        <select required name="kategori" class="form-control">
            <option value="komputer">pilih kategori
                <hr>
            </option>
            @foreach ($final[2][3] as $kategori)
            <option value="{{$kategori->value}}">{{$kategori->value}}</option>
            @endforeach
        </select>
        <hr>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationDefault01">Default Lokasi Item</label>
                <select required name="lok1" class="form-control">
                    <option value="">pilih lokasi</option>
                    @foreach ($final[2][2] as $lokasi)
                    <option value="{{$lokasi->value}}">{{$lokasi->value}}</option>
                    @endforeach
                    <option value="0">Costem</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationDefault02">Costem Lokasi Item</label>
                <input type="text" name="lok2" class="form-control" id="validationDefault02" placeholder="Custem Lokasion">
            </div>
        </div><br>
        {{-- <input type="text" name="barcode"> --}}
        @csrf
        <button type="submit" class="btn bg-primary text-danger ">kirim</button>
    </div>
</form>

@endsection