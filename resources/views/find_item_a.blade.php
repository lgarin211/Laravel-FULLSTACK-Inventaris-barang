@extends('template.head')
@section('conten')
<form action="{{url('/')}}/out_find" method="post">
<input autofocus required type="text" class="form-control" name="barcode">
@csrf
<button type="submit" class="form-control btn-primary" >kirim</button>
</form>
<br>

@endsection
