@extends('template.head')
@section('conten')

<form action="{{url('/')}}/insert" method="POST">
    <input required type="text" class="form-control " name="barcode" autofocus>
    @csrf
    <button type="submit" class="form-control btn-primary">kirim</button>
</form>
<br>

<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTable_length">
                                <label>Show <select name="dataTable_length" aria-controls="dataTable"
                                        class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTable_filter" class="dataTables_filter">
                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                        aria-controls="dataTable"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                                role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th>Nama Produk</th>
                                        <th>banyak</th>
                                        <th>Grub</th>
                                        <th>barcode</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nama Produk</th>
                                        <th>banyak</th>
                                        <th>Grub</th>
                                        <th>barcode</th>
                                        <th>status</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @php
                                    $a=0;
                                    @endphp
                                    @foreach ($data[1] as $keyles=>$itm)
                                    @php
                                    $banyak=0;
                                    @endphp

                                    <tr>
                                    <tr>
                                        <td>
                                            <div class="cass">
                                                <ul>
                                                    @foreach ($itm as $it)
                                                    @php
                                                    $banyak=$banyak+$it->banyak_item;
                                                    @endphp
                                                    <li>
                                                        {{$it->nama_item}}
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            @foreach ($itm as $it)
                                            @endforeach
                                            {{$banyak}}
                                        </td>
                                        <td>{{$itm[0]->t_key}}</td>
                                        <td>
                                            <div class="cass">
                                                <ul>
                                                    @foreach ($itm as $it)
                                                    @php
                                                    $banyak=$banyak+$it->banyak_item;
                                                    @endphp
                                                    <li>{{$it->barcode}}
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        <td>

                                            <div class="cass">
                                                <ul>
                                                    @foreach ($itm as $it)
                                                    @php
                                                    @endphp
                                                    <li>
                                                        {{$it->deks}}
                                                    </li>                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>


                                        </td>
                                    </tr>
                                    <script>
                                        function das<?= ($keyles) + 1 ?>(a) {
                                            q = 'dosone' + a
                                            q1 = 'dostwo' + a
                                            q2 = 'dostree' + a
                                            console.log(q, q1, q2);
                                            document.getElementById('binpageitem<?= ($keyles) + 1 ?>').innerHTML = document.getElementById(q).innerHTML
                                            document.getElementById('binpagebarcode<?= ($keyles) + 1 ?>').innerHTML = document.getElementById(q1).innerHTML
                                            document.getElementById('binpagekondisi<?= ($keyles) + 1 ?>').innerHTML = document.getElementById(q2).innerHTML
                                        }
                                    </script>
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



    {{-- <div class="card shadow mb-4">
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
                <th>kategori item</th>
                <th>lokasi_item</th>
                <th>barcode</th></tr>
          </thead>
          <tfoot>
            <tr>
                <th>id</th>
                <th>nama_item</th>
                <th>kondisi_item</th>
                <th>banyak_item</th>
                <th>kategori</th>
                <th>lokasi_item</th>
                <th>barcode</th></tr>
          </tfoot>
          <tbody>
      @foreach ($data[0] as $itm)
        <tr>
          <td>{{$itm->id}}</td>
    <td>{{$itm->nama_item}}</td>
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
</table>
</div> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
@endsection
