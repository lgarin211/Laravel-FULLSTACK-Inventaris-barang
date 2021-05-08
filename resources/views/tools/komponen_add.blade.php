@extends('template.head')
@section('openddb')
Tools Add
@endsection
@section('conten')



{{$data[1]}}
<form action="{{url('/')}}/make_C/{{$data[1]}}" method="post" class="row">
    @csrf
    <div class="col-sm-6">
        <h3>Masukan Key</h3>
        <input class="form-control " type="text" name="key">
    </div>

    <div class="col-sm-6">
        <h3>Masukan Value Kategoti</h3>
        <input class="form-control" type="text" name="value">
    </div>


    <button type="submit" class="col-md-12 btn btn-primary">kirim data baru</button>
</form>
<table class="table table-bordered dataTable">
    <thead>
        <th>key</th>
        <th>value</th>
    </thead>
    <tbody>
        @foreach ($data[0] as $itm)
        <tr>
            <td>{{$itm->key}}</td>
            <td>{{$itm->value}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
