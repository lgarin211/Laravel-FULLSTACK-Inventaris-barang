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
    <link href="{{ asset('data') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('data') }}/css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        @if (Route::has('login'))
        @auth
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-0">
                    <img src="{{asset('/INVENTARIS-removebg-preview.png')}}" alt="" width="100px">
                </div>
                <div class="sidebar-brand-text mx-3">INVENTARIS <br>LAB RPL</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item bg-success">
                <a class="nav-link" href="{{url('/')}}/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inventaris</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item bg-danger">
                <a class="nav-link" href="{{url('/')}}/komputer">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Komputer</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            @php
            $casal=['<a class="nav-link" href="'.url('/').'/kategori_t/katerori_k/tools.katerori_add"><i class="fas fa-fw fa-cog"></i>
                <span> Make new kategori</span></a>',
            '<a class="nav-link" href="'.url('/').'/kondisi_t/kondisi_k/tools.kondisi_add"><i class="fas fa-fw fa-cog"></i>
                <span> Make new kondisi</span></a>',
            '<a class="nav-link" href="'.url('/').'/key_primary/key_k/tools.key_add"><i class="fas fa-fw fa-cog"></i>
                <span> Make new key</span></a>',
            '<a class="nav-link" href="'.url('/').'/lokasi_t/lokasi_k/tools.location_add"><i class="fas fa-fw fa-cog"></i>
                <span> Make new costem
                    location</span></a>',
            '<a class="nav-link" href="'.url('/').'/lokasi_t/komponen/tools.komponen_add"><i class="fas fa-fw fa-cog"></i>
                <span> Make new komponen</span></a>'];
            @endphp
            @foreach ($casal as $menu)
            <li class="nav-item">
                @php
                echo $menu;
                @endphp
            </li>
            @endforeach


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}/try">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>home web site</span></a>
            </li>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        @endauth
        @endif
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Nav Item - User Information -->
                    <ul>
                        @if (Route::has('login'))
                        @auth
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    {{ Auth::user()->name }} </span>
                                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/user/profile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        @else
                        <div class="row">
                            <p class="nav-item active ">
                                <a class="nav-link" href="{{ url('login') }}">LOGIN<span class="sr-only">(current)</span></a>
                            </p>
                            @if (Route::has('register'))

                            <p class="nav-item active  dropdown no-arrow ">
                                <a class="nav-link" href="{{ route('register') }}">REGISTRASI<span class="sr-only">(current)</span></a>
                            </p>
                            @endif
                        </div>
                        @endauth
                        @endif
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @if (session('status'))
                    <h1 class="btn text-center btn-danger">{{session('status')}}</h1>
                    @endif
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Barang Baru</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="{{url('/')}}/read_read" class="btn btn-success ">Input</a></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Peminjaman Barang</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="{{url('/')}}/pijam" class="btn btn-primary ">Input</a></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Barang Keluar</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="{{url('/')}}/out" class="btn btn-danger ">Input</a></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card text-center">
                            <h5 class="card-header">@yield('openddb')</h5>
                            <div class="card-body">
                                @yield('conten')
                            </div>
                        </div>
                        @extends('template.foot')
