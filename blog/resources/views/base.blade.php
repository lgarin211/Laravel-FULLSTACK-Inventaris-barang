@extends('template.head')
@section('conten')
<div class="container text-center">
    <div class="card btn-warning alert-danger">
        <div class="card-body">
            <a href="/read_read" class="btn btn-primary ">barang masuk</a>
        </div>
      </div>
    <br>
    <div class="card btn-warning alert-danger">
        <div class="card-body">
            <a href="/pijam" class="btn btn-primary ">peminjaman</a>
        </div>
      </div>
    <br>
    <div class="card btn-warning alert-danger">
        <div class="card-body">
            <a href="/out" class="btn btn-primary ">keluar</a>
        </div>
      </div>
    <br>

</div>
    @endsection


