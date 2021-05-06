@extends('template.head')
@section('conten')
<h1 class="text-center">Tolong lengkapi data</h1>
<form class="card ">
    <div class="container">
        <div class="row">
        <div class="form-group col-md-6">
          <label for="inputCity">Prosesor</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="contoh: ">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">HDD</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="contoh: 250 gb">
        </div>
        <div class="form-group col-md-2">
            <label for="inputState">RAM</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="contoh: 8 gb">
          </div>
        </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Barcode</label>
        <input type="email" class="form-control" id="inputEmail4" readonly value="barcode">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Nama Pc</label>
        <input type="text" class="form-control" id="inputPassword4"  readonly value="Nama PC">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">SMYT</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="contoh: ">
    </div>
    <div class="form-group">
      <label for="inputAddress2">TPS</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="contoh: ">
    </div>
    <button type="submit" class="btn btn-primary col-md-12">Sign in</button>
    <br>
    <small>have a nice day</small>
</div>
</form>

@endsection
