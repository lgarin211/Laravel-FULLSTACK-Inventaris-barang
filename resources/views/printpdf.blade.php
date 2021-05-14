<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="{{asset('/INVENTARIS-removebg-preview.png')}}">

    <title>RPL - SMKN 4 BOGOR</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('data') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('data') }}/css/sb-admin-2.css" rel="stylesheet">

    <style>
.container-all{
margin: 50px;
}
.con{
margin-bottom: 50px;
}
h5{
    margin-bottom: 2px;
}
h6{
    margin-bottom: 2px;
}
.thin{
    margin-bottom: -15px;
}
.bawah{
    margin-bottom: -13px;
}
.smk{
    height: 170px;
    width: 230px;
    position: absolute;
    right: 10%;
    top : 5%;
}
.bogor{
    height: 160px;
    width: 130px;
    position: absolute;
    left: 14%;
    top : 5%;
}

</style>
</head>
<div class="container-all">

    <header>
        <div class="con">
            <h5 style="text-align: center">PEMERINTAH DAERAH PROVINSI JAWA BARAT<br>
                DINAS PENDIDIKAN<br>
                <span style="font-weight: bold">CABANG DINAS PENDIDKAN WILAYAH II</span><br>
                <span style="font-weight: bold">SEKOLAH MENENGAH KEJURUAN (SMK) NEGERI 4 KOTA BOGOR</span><br></h5>
                <h6 style="text-align: center">Jl. Raya Tajur Kp. Buntar Rt.02/08 Kel. Muarasari Kec. Bogor Selatan Telp. 02517547381<br>
                    E-mail : smkn4@smkn4bogor.sch.id Web: www.smkn4bogor.sch.id
                </h6>
                <h5 class="bawah" style="text-align: center" >
                    KOTA BOGOR - 16137
                </h5>
                <img class="smk" src="../data/img/smkn4.jpg">
                <img class="bogor" src="../data/img/bogor.png">
                <hr class="thin" style="border-top: 1.2px solid black">
                <hr style="border-top: 4.5px solid black">
            </div>
        </header>
        <body>

            <table class="table table-bordered dataTable text-center">
                <thead>
                    @foreach ($data as $a=>$item)
                    @if ($a==0)
                    @foreach ($item as $b=>$itm)
                    <th>{{$b}}</th>
                    @endforeach
                    @endif
                    @endforeach
                    <tbody>

                        @foreach ($data as $a=>$item)
                        <tr>
                            @foreach ($item as $b=>$itm)
                            <td><?=$itm?></td>
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>

                </thead>
            </table>
        </div>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
            -->



        </body>
