             <table class="table table-bordered table-responsive text-left" cellspacing="0" style="width: 100%" role="grid">
                        <thead>
                            <tr role="row">
                                <th >Tangal Masuk</th>
                                <th >Nama Produk</th>
                                <th >banyak</th>
                                <th >Grub</th>
                                <th >barcode</th>
                                <th >DESKRIPSI</th>
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
                                 <td style="width:300px!importItem">
                                    <div class="cass">
                                        <ul>
                                            @foreach ($itm as $it)
                                            @php
                                            @endphp
                                            <li>
                                                <?= substr($it->created_at,0,10); ?>
                                            </li>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </td>
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