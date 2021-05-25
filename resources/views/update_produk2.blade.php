<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('/INVENTARIS-removebg-preview.png')}}">


    <title>RPL - SMKN 4 BOGOR</title>

    <!-- Custom fonts for this template-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="{{ asset('data') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('data') }}/css/sb-admin-2.css" rel="stylesheet">

</head>

<body>


    <form action="{{url('/')}}/ui/{{$final[0]->id}}?cas=add" method="POST">
        <h1>produk barcode is: {{ $final[0]->barcode }}</h1>
        @if (session('status'))
        <h3 class="btn text-center btn-success">{{session('status')}}</h3>
        @endif
        @method('PUT')
        <div class="form-group row. card-body card  text-white bg-primary mb-3">
            <label for="NAMA PRODUK">NAMA PRODUK</label>
            <div class="row">
                <select required class="col-md-2 text-center form-control" name="key_p" id="">
                    <option value="{{ $final[0]->t_key }}">{{ $final[0]->t_key }}</option>
                    @foreach ($final[2][4] as $key)
                    <option value="{{$key->value}}">{{$key->key}}</option>
                    @endforeach
                </select>
                <input required type="text" name="nama_item" class="text-center col-md-8 form-control" placeholder="{{$final[0]->nama_item}}" value="{{$final[0]->nama_item}}" autofocus>
                <input required type="number" name="banyak_item" class="text-center col-md-2 form-control" placeholder="{{$final[0]->banyak_item}}" value="{{$final[0]->banyak_item}}">
            </div>
            <hr>
            <label for="my-editor">DESKRISI PRODUK</label>
            <textarea id="my-editor" required type="text" name="deksripsi" class="text-center form-control" placeholder="masukan deskripsi" class="form-control">
            {{$final[0]->deks}}
            </textarea>
            <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
            <script>
                var options = {
                    filebrowserImageBrowseUrl: '{{url("/")}}/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '{{url("/")}}/laravel-filemanager/upload?type=Images&_token=',
                    filebrowserBrowseUrl: '{{url("/")}}/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '{{url("/")}}/laravel-filemanager/upload?type=Files&_token='
                };
            </script>
            <script>
                CKEDITOR.replace('my-editor', options);
            </script>
            <label for="konsi">KONDISI PRODUK</label>
            <select required id="konsi" name="kondisi_item" class="form-control">
                <option value="{{$final[0]->kondisi_item}}">{{$final[0]->kondisi_item}}</option>
                @foreach ($final[2][1] as $kondisi)
                <option value="{{$kondisi->value}}">{{$kondisi->value}}</option>
                @endforeach
            </select>
            <hr>
            <label for="kaet">KATEGORY</label>
            <select required name="kategori" id="kaet" class="form-control">
                <option value="{{$final[0]->kategori}}">{{$final[0]->kategori}}</option>
                @foreach ($final[2][3] as $kategori)
                <option value="{{$kategori->value}}">{{$kategori->value}}</option>
                @endforeach
            </select>
            <hr>
            <div class="form-row">
                <div id='asds' class="col-md-12">
                    <label for="validationDefault01">Default Lokasi Item</label>
                    <select required name="lok1" class="form-control">
                        <option value="{{$final[0]->lokasi_item}}">{{$final[0]->lokasi_item}}</option>
                        @foreach ($final[2][2] as $lokasi)
                        <option value="{{$lokasi->value}}">{{$lokasi->value}}</option>
                        @endforeach
                        <option value="0" onselect="caskf()">Costem</option>
                    </select>
                </div>
            </div><br>
            {{-- <input type="text" name="barcode"> --}}
            @csrf
            <a class="btn btn-danger " href="{{url('/di/'.$final[0]->id.'/item')}}">Batal</a>
            <button type="submit" class="btn btn-success">kirim</button>
        </div>
    </form>


</body>
