<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item_model;

class read extends Controller
{
    public function index()
    {
        return view('base');
        # code...
    }
    public function read()
    {
        $flights=item_model::all();
        foreach ($flights as $flight) {
            if ($flight->nama_item=="default") {

                return view('update_produk',compact('flight'));
            } else {
                return view('input_produk',compact('flight')); }                  }


    }
    public function out_view()
    {
        return view('find_item');
    }
    public function data_out(Request $request)
    {
        echo "rin";
        $data=item_model::where('barcode', $request->barcode)->frist();
        dd($data);
    }



}
