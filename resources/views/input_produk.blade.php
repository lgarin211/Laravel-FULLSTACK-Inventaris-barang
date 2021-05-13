@extends('template.head')
@section('openddb')
DATA BARANG
@endsection
@section('conten')
<h3>Input Barcode</h3>
<form action="{{url('/')}}/insert" method="POST">
    <input required type="text" class="form-control " name="barcode" id='barcode' oninput="getallbarcode()" autofocus>
    @csrf
    <button type="submit" class="form-control btn-primary">kirim</button>
</form>
<a class="form-control btn-success" href="/importItem">Import VIA Exel</a>


<br>

<div class="">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DATA INVENTARIS BARANG</h6>
        </div>
        <div class="card-body" id='tane'>
        </div>
        </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
 
<script>
    gas()
    function gas(argument) {
        fetch("{{url('/read_read?ajax=all')}}", {
            method: 'GET',
          }).then((response) => response.text())
          .then((data) => {
            document.getElementById('tane').innerHTML = data;
          });
    }

    function getallbarcode() {
        const keyword=document.getElementById('barcode').value;
        if (keyword=='        ') {
            return gas();
        }
        const url="{{url('/')}}/read_read?qbar="+keyword
        // console.log(url)
                fetch(url, {
            method: 'GET',
          }).then((response) => response.text())
          .then((data) => {
            document.getElementById('tane').innerHTML = data;
          });
    }

</script>

    </script>
    @endsection
