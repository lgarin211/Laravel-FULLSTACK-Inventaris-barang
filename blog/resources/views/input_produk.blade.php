@extends('template.head')
@section('conten')

<form action="/insert" method="POST">
    <input type="text" name="barcode" autofocus>
    @csrf
    <button type="submit">kirim</button>
</form>

<div class="container">
    {{-- <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">nama_item</th>
        <th scope="col">kondisi_item</th>
        <th scope="col">banyak_item</th>
        <th scope="col">lokasi_item</th>
        <th scope="col">kategori</th>
        <th scope="col">barcode</th>
      </tr>
    </thead>
    <tbody>--}}



<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
          <thead>
            <tr role="row">
                <th>id</th>
                <th>nama_item</th>
                <th>kondisi_item</th>
                <th>banyak_item</th>
                <th>lokasi_item</th>
                <th>kategori date</th>
                <th>barcode</th></tr>
          </thead>
          <tfoot>
            <tr>
                <th>id</th>
                <th>nama_item</th>
                <th>kondisi_item</th>
                <th>banyak_item</th>
                <th>lokasi_item</th>
                <th>kategori</th>
                <th>barcode</th></tr>
          </tfoot>
          <tbody>
      @foreach ($flights as $itm)
      <tr>
        <tr>
          <td >{{$itm->id}}</td>
          <td >{{$itm->nama_item}}</td>
          <td>{{$itm->kondisi_item}}</td>
          <td>{{$itm->banyak_item}}</td>
          <td>{{$itm->kategori}}</td>
          <td>{{$itm->lokasi_item}}</td>
          <td>{{$itm->barcode}}</td>
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
  </table></div>

@endsection
