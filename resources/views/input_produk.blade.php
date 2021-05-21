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
<a class="form-control btn-success" href="{{url('/importItem')}}">Import VIA Exel</a>
<br>
<div class="row">
    <div class="card shadow mb-4 " id="tebls" style="width: 100%;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DATA INVENTARIS BARANG</h6>
        </div>
        <div class="card-body" id='tane'>

        </div>

    </div>
    <div class="modal-content" id="caslewa">
        <div class="modal-header">
            <h5 class="modal-title" id="itemmodalLabel">edit</h5>
            <button type="button" class="btn-close" aria-label="Close" onclick="modalrev()"></button>
        </div>
        <div class="modal-body col-md-12" id="caslewa" style="height: 500px;">
            <iframe src="" id="url_set_fream" frameborder="0" width="100%" height="100%"></iframe>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <script>
        var datacase = null
        gas();
        // console.log(datacase);
        setInterval(() => {
            gas()
        }, 50000);

        function gas() {
            if (this.datacase == null) {
                this.datacase = 1
            }

            fetch("{{url('/read_read?ajax=all')}}", {
                    method: 'GET',
                }).then((response) => response.text())
                .then((data) => {
                    if (this.datacase = 1) {
                        // console.log('masuk1');
                        document.getElementById('tane').innerHTML = data;
                        this.datacase = data
                        // console.log(this.datacase);
                    } else {
                        if (!this.datacase == data) {
                            document.getElementById('tane').innerHTML = data;
                        }
                    }
                });
        }

        // function getallbarcode() {
        //     const keyword = document.getElementById('barcode').value;
        //     if (keyword == null) {
        //         return gas();
        //     }
        //     const url = "{{url('/')}}/read_read?qbar=" + keyword
        //     fetch(url, {
        //             method: 'GET',
        //         }).then((response) => response.text())
        //         .then((data) => {
        //             document.getElementById('tane').innerHTML = data;
        //         });
        // }

        document.getElementById('caslewa').style = 'display: none;';

        function modalcall(id) {
            document.getElementById('tebls').style = 'display: none;';
            const url = "{{url('/')}}/edit/" + id
            document.getElementById('url_set_fream').src = url;
            document.getElementById('caslewa').style = 'display: block;';
        }

        function modalrev() {
            document.getElementById('tebls').style = 'display: block;';
            document.getElementById('caslewa').style = 'display: none;';
        }

        function tap(id,byn) {
            const dle = document.querySelectorAll(id)
            for (let i = 0; i < dle.length; i++) {
                dle[i].classList.toggle('tla');
            }
            document.getElementById(byn).classList.toggle('btn-primary')
            document.getElementById(byn).classList.toggle('btn-danger')
        }
    </script>

    <!-- Modal -->
    @endsection
