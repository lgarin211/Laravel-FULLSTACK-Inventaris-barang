@extends('template.head')
@section('conten')
<div class="row">
<div class="card border-left-success col-md-6 shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Barang Baru</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">
              <a href="/buatpc" class="btn btn-success ">New Komputer</a></div>
        </div>
        <div class="col-auto">
          <i class="fas fa-calendar fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="card border-left-dark col-md-6 shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">

          <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Report</div>

          <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="/komputer1" class="btn btn-dark ">New Komputer</a></div>
        </div>
        <div class="col-auto">
          <i class="fas fa-calendar fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="card dark">
<table class=" table  ">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Barcode</th>
        <th scope="col">Name</th>
        <th scope="col">SYTM</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
@foreach ($flights as $item)
        <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->Komputer_barcode}}</td>
        <td>{{$item->Komputer_name}}</td>
        <td>{{$item->SYMT}}</td>
        <td><a class="btn btn-primary" href="/komputer2/{{$item->id}}">view all</a></td>
      </tr>
@endforeach
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>

  <hr>

</div>

@endsection
