@extends('template.head')
@section('openddb')
INPUT BY EXEL DATA
@endsection
@section('conten')
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <h1>Input Exel Data dan Undu Template <a href="{{asset('storage/files/2/TEMPLATE/TEMPLATE.xlsx')}}"> di SINI.</a></h1>
            <input type="file" name="file" class="form-control ">
        </div>
        <input type="submit" value="Upload" class="btn btn-primary form-control ">
    </form>
@endsection
