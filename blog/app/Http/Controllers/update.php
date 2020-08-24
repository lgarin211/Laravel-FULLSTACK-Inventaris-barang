<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item_model;

class update extends Controller
{
    //
    public function update_out(Request $request,$id)
{


    $item_set =item_model::find($id);
    $item_set->kondisi_item =   $request->kondisi_item;
    $item_set->lokasi_item =    $request->lokasi_item;
    $item_set->save();
    return redirect('/');

}
public function update(Request $request,$id)
{
// \dd($_POST);
    // item_model::where('id', 1)
    //       ->where('nama_item', $request->nama_item)
    //       ->update(['delayed' => 1]);
    //       return redirect('/insert');
    # code...
// \dd($_POST);

// \dd($request->lokasi_item);
    if ($request->lok1==0) {
        $request->lokasi_item= $request->lok2;
    }else {
        $request->lokasi_item=$request->lok1;
    }

    $item_set =item_model::find($id);
    $item_set->nama_item =      $request->nama_item;
    $item_set->kondisi_item =   $request->kondisi_item;
    $item_set->banyak_item =    $request->banyak_item;
    $item_set->lokasi_item =    $request->lokasi_item;
    $item_set->kategori =       $request->kategori;
    // $item_set->barcode=         $request->barcode;
    // dd($item_set);
// \dd($item_set);
    $item_set->save();
    return redirect('/read_read');

}
}
