<?php

namespace App\Http\Controllers;

use App\item_model;
use Illuminate\Http\Request;


class creat extends Controller
{
    //

    public function creat(Request $request)
    {
        $item_set = new item_model;
        $item_set->nama_item =      "default";
        $item_set->kondisi_item =   "default";
        $item_set->banyak_item =    "default";
        $item_set->lokasi_item =    "default";
        $item_set->kategori =       "default";
        $item_set->barcode=         $request->barcode;
        $item_set->save();
        return redirect('/read_read');
        # code...
    }
}
