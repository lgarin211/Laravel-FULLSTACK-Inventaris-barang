@extends('template.head')
@section('openddb')
DATA BARANG
@endsection
@section('conten')
<h3>Input Barcode</h3>
<form action="{{url('/')}}/insert" method="POST">
    <input required type="text" class="form-control " name="barcode" autofocus>
    @csrf
    <button type="submit" class="form-control btn-primary">kirim</button>
</form>
<br>

<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DATA INVENTARIS BARANG</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="col-sm-12">
                    <table class="table table-bordered dataTable" width="100%" cellspacing="0" role="grid"
                        style="width: 100%;">
                        <thead>
                            <tr role="row">
                                <th>Nama Produk</th>
                                <th>banyak</th>
                                <th>Grub</th>
                                <th>barcode</th>
                                <th>DESKRIPSI</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Produk</th>
                                <th>banyak</th>
                                <th>Grub</th>
                                <th>barcode</th>
                                <th>DESKRIPSI</th>
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
                                                <?= $it->deks ?>
                                            </li>
                                            </li>
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
        </tbody>
        </table>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    @endsection
