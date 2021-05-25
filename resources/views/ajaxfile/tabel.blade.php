<style>
    .tla {
        display: none;
    }
</style>
<div class="container text-center row mb-2 ">
    <div class="col-md-4 row mr-1 mb-1">
        <input type="text" name="find" class="col-md-10 form-control" id="finds">
        <button type="button" class="col-md-2 btn btn-primary">F</button>
    </div>
    <div class="col-md-6"></div>
    <div class="col-md-2 row text-center">
        <button class="btn btn-success" onclick="gas()">Reload</button>
    </div>
    <div class="col-md-12 row mr-1 ml-1">
        <div class="col-sm-2  row">
            <button class="btn btn-primary" id="btl1" onclick="tap('.tl1','btl1')">TLG</button>
        </div>
        <div class="col-sm-2  row">
            <button class="btn btn-primary" id="btl2" onclick="tap('.tl2','btl2')">Produk</button>
        </div>
        <div class="col-sm-2  row">
            <button class="btn btn-primary" id="btl3" onclick="tap('.tl3','btl3')">Stok</button>
        </div>
        <div class="col-sm-2  row">
            <button class="btn btn-primary" id="btl4" onclick="tap('.tl4','btl4')">Grub</button>
        </div>
        <div class="col-sm-2  row">
            <button class="btn btn-primary" id="btl5" onclick="tap('.tl5','btl5')">Barcode</button>
        </div>
        <div class="col-sm-2  row">
            <button class="btn btn-primary" id="btl6" onclick="tap('.tl6','btl6')">DESKRIPSI</button>
        </div>
    </div>



</div>
<table class="table table-bordered table-responsive text-left" cellspacing="0" style="width: 100%" role="grid">
    <thead>
        <tr role="row">
            <th class="tl1 ">Tangal Masuk</th>
            <th class="tl2 ">Nama Produk</th>
            <th class="tl3 ">banyak</th>
            <th class="tl4 ">Grub</th>
            <th class="tl5 ">barcode</th>
            <th class="tl6 ">DESKRIPSI</th>
        </tr>
    </thead>
    <tbody>
        @php
        $a=0;
        @endphp
        @foreach ($data[1] as $keyles=>$itm)
        @php
        $banyak=0;
        @endphp

        <tr>
            <td class="tl1 " style="width:300px!importItem">
                <div class="cass">
                    <ul>
                        @foreach ($itm as $it)
                        @php
                        @endphp
                        <li onclick="modalcall({{$it->id}})">
                            <?= substr($it->created_at, 0, 10); ?>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </td>
            <td class="tl2 ">
                <div class="cass">
                    <ul>
                        @foreach ($itm as $it)
                        @php
                        $banyak=$banyak+$it->banyak_item;
                        @endphp
                        <li onclick="modalcall({{$it->id}})">
                            {{$it->nama_item}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </td>
            <td class="tl3 ">
                @foreach ($itm as $it)
                @endforeach
                {{$banyak}}
            </td>
            <td class="tl4 ">{{$itm[0]->t_key}}</td>
            <td class="tl5 ">
                <div class="cass">
                    <ul>
                        @foreach ($itm as $it)
                        @php
                        $banyak=$banyak+$it->banyak_item;
                        @endphp
                        <li onclick="modalcall({{$it->id}})">
                            {{$it->barcode}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            <td class="tl6 ">
                <div class="cass">
                    <ul>
                        @foreach ($itm as $it)
                        @php
                        @endphp
                        <li onclick="modalcall({{$it->id}})">
                            <?= $it->deks ?>
                        </li>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </td>
        </tr>

        <!-- Modal -->
        @endforeach
    </tbody>
</table>



<!-- Modal -->
<div class="modal fade" id="itemmodal" tabindex="-1" aria-labelledby="itemmodalLabel" aria-hidden="true" style="">
    <div class="modal-dialog modal-fullscreen-xxl-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="itemmodalLabel">Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe src="" id="mbd" frameborder="0" width="100%" height="100%"></iframe>
            </div>
        </div>
    </div>
</div>
