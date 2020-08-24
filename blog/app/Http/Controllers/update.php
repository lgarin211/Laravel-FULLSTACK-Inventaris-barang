<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item_model;

class update extends Controller
{
    //
public function update(Request $request,$id)
{

    // item_model::where('id', 1)
    //       ->where('nama_item', $request->nama_item)
    //       ->update(['delayed' => 1]);
    //       return redirect('/insert');
    # code...
    $item_set =item_model::find($id);
    $item_set->nama_item =      $request->nama_item;
    $item_set->kondisi_item =   $request->kondisi_item;
    $item_set->banyak_item =    $request->banyak_item;
    $item_set->lokasi_item =    $request->lokasi_item;
    $item_set->kategori =       $request->kategori;
    // $item_set->barcode=         $request->barcode;
    // dd($item_set);
    $item_set->save();
    return redirect('/read_read');

}
}
