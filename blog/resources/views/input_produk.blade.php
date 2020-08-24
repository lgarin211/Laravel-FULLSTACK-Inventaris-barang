@extends('template.head')
@section('conten')

<form action="/insert" method="POST">
    <input type="text" name="barcode" autofocus>
    @csrf
    <button type="submit">kirim</button>
</form>

<div class="container"><table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">nama_item</th>
        <th scope="col">kondisi_item</th>
        <th scope="col">banyak_item</th>
        <th scope="col">lokasi_item</th>
        <th scope="col">kategori</th>
        <th scope="col">barcode</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($flights as $itm)
      <tr>
          {{-- {{dd($itm)}} --}}
         @php
            //  $i=$i++

            // var_dump($itm);
         @endphp
              <th scope="col">{{$itm->nama_item}}</th>
              <th scope="col">{{$itm->kondisi_item}}</th>
              <th scope="col">{{$itm->banyak_item}}</th>
              <th scope="col">{{$itm->lokasi_item}}</th>
              <th scope="col">{{$itm->kategori}}</th>
              <th scope="col">{{$itm->barcode}}</th>
      </tr>
  @endforeach

  </tbody>
  </table></div>

@endsection
