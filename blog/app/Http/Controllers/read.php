<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item_model;
use Illuminate\Support\Facades\DB;
class read extends Controller
{
    public function index()
    {
        return view('base');
        # code...
    }
    public function read()
    {$flights=item_model::all();
        // var_dump($flights[0]['nama_item']);
        $p=$flights==null;
        $data='flights';
        if ($p) {
             return view('input_produk');
        } else {
            foreach ($flights as $flight) {
            if (
            $flight->nama_item=="default") {
            $view='update_produk';
            $data='flight';
            return \view($view,compact('flight'));
        }else{

            $view='input_produk';}

        }

    }return \view($view,compact('flights'));
    }
    public function a()
    {
        view('update_produk',compact($data));
    }
    public function out_view()
    {
        return view('find_item');
    }
    public function data_out(Request $request)
    {

$item = DB::table('item')->where('barcode', $request->barcode)->first();

        return \view('barang_keluar',compact('item'));
    }



}
