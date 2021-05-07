<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="{{asset('/INVENTARIS-removebg-preview.png')}}">

    <title>RPL - SMKN 4 BOGOR</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('data') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('data') }}/css/sb-admin-2.css" rel="stylesheet">

</head>

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
</body>
