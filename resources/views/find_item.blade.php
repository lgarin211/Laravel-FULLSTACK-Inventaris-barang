@extends('template.head')
@section('openddb')
Data Barang Keluar
@endsection
@section('conten')
<form action="{{url('/')}}/out_find" method="post">
    <input autofocus required type="text" class="form-control" name="barcode">
    @csrf
    <button type="submit" class="form-control btn-primary">kirim</button>
</form>
<br>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DATA BARANG KELUAR</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th>id</th>
                                    <th>nama_item</th>
                                    <th>kondisi_item</th>
                                    <th>banyak_item</th>
                                    <th>lokasi_item</th>
                                    <th>kategori date</th>
                                    <th>barcode</th>
                                    <th>keluar Pada</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>id</th>
                                    <th>nama_item</th>
                                    <th>kondisi_item</th>
                                    <th>banyak_item</th>
                                    <th>lokasi_item</th>
                                    <th>kategori</th>
                                    <th>barcode</th>
                                    <th>Keluar Pada</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($flights as $itm)
                                <tr>
                                <tr>
                                    <td>{{$itm->id}}</td>
                                    <td>{{$itm->nama_item}}</td>
                                    <td>{{$itm->kondisi_item}}</td>
                                    <td>{{$itm->banyak_item}}</td>
                                    <td>{{$itm->kategori}}</td>
                                    <td>{{$itm->lokasi_item}}</td>
                                    <td>{{$itm->barcode}}</td>
                                    <td>{{$itm->updated_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </tbody>
    </table>
</div>

@endsection
