@extends('template.head')
@section('conten')



{{$data[1]}}
<form action="/make_C/{{$data[1]}}" method="post">
@csrf
<input type="text" name="key">
<input type="text" name="value">
<button type="submit">kirim data baru</button>
</form>
<table>
    <thead>
        <th>key</th>
        <th>value</th>
    </thead>
    <tbody>
@foreach ($data[0] as $itm)
<tr>
<th>{{$itm->key}}</th>
<th>{{$itm->value}}</th>
</tr>
@endforeach
</tbody></table>

@endsection
