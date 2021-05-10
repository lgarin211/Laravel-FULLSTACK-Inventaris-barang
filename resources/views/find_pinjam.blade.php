@extends('template.head')
@section('openddb')
Data Peminjaman
@endsection
@section('conten')
@php
$data="form peminjaman barang";
@endphp
@if (session('status'))
<h1 class="btn text-center btn-danger">{{session('status')}}</h1>
@endif
<div class="row">
    <div class="col-md-6 text-center">
        <h1>PINJAM</h1>
        <form action="{{url('/')}}/pin_out" method="post">
            @method('PUT')
            <input required type="text" class="form-control " name="barcode">
            @csrf
            <button type="submit" class="form-control btn-primary">kirim</button>
        </form>
    </div>
    <div class="col-md-6 text-center">
        <h1>KEMBALI</h1>
        <form action="{{url('/')}}/pin_in" method="post">
            @method('PUT')
            <input required type="text" class="form-control " name="barcode">
            @csrf
            <button type="submit" class="form-control btn-primary">kirim</button>
        </form>
    </div>
</div>

<div class="card-body">
    <div class="table-responsive">
        <div class="col-sm-12">
            <table class="table table-bordered dataTable text-center" width="100%" cellspacing="0" role="grid" style="width: 100%;">
                <thead>
                    <tr role="row">
                        <th>nama_item</th>
                        <th>kondisi_item</th>
                        <th>Peminjam</th>
                        <th>barcode</th>
                        <th>Status</th>
                        <th>TGL Pinjam</th>
                        <th>Penerima</th>
                        <th>TGL Pinjam</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama Item</th>
                        <th>Kondisi Item</th>
                        <th>Peminjam</th>
                        <th>Barcode</th>
                        <th>Status</th>
                        <th>TGL Pinjam</th>
                        <th>Penerima</th>
                        <th>TGL Pinjam</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($items as $key=>$item )
                        @if ($item->pic==0)
                    <tr class="bg-warning">
                        @else
                    <tr class="bg-success">
                        @endif

                        <td>{{$item->nama_item}}</td>
                        <td>{{$item->kondisi_item}}</td>
                        <td>{{$item->peminjam}}</td>
                        <td>{{$item->barcode}}</td>
                        <td>@if ($item->pic==0)
                            {{"DIPINJAM"}}
                            @else
                            {{"Kembali"}}
                            @endif
                        </td>
                        <td>{{$item->created_at}}</td>
                        @if ($item->pic==1)
                        <td>{{$item->Petugas}}</td>
                        <td>{{$item->updated_at}}</td>
                        @else
                        <td>-</td>
                        <td>-</td>
                        @endif
                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
