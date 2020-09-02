<?php

namespace App\Http\Controllers;

use App\item_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\out;

class creat extends Controller
{
//

public function creat(Request $request)
{
 $cek=DB::table('item')->where('barcode', $request->barcode)->first();
 if ($cek == null) {
     $cek=1; }else{$cek=0;}

    if ($cek==0) {
        return redirect('/read_read')->with('status', 'Barang Sudah ada');
    }else{
        $item_set = new item_model;
        $item_set->nama_item =      "default";
        $item_set->kondisi_item =   "default";
        $item_set->banyak_item =    0;
        $item_set->lokasi_item =    "default";
        $item_set->kategori =       "default";
        $item_set->pos=             1;
        $item_set->barcode=         $request->barcode;
        $item_set->save();
    }
return redirect('/read_read');
# code...
}

public function cread_out(Request $request,$id)
{
$item = DB::table('item')->where('id', $id)->first();

$item_set = new out;
$item_set->nama_item =      $item->nama_item;
$item_set->kondisi_item =   $item->kondisi_item;
$item_set->banyak_item =    $request->min_item;
$item_set->lokasi_item =    $request->lokasi_out;
$item_set->kategori =       $item->kategori;
$item_set->barcode=         $item->barcode;
$item_set->deks=            $item->deks;
$item_set->save();

$stok=$item->kondisi_item;
if ($request->min_item<$item->banyak_item) {
$new=$item->banyak_item-$request->min_item;
if ($new<0) {
$new=0;
}
$item_set =item_model::find($id);
$item_set->banyak_item = $new;
$item_set->save();
}elseif($request->min_item==$item->banyak_item) {
DB::table('item')->where('id', $id)->delete();
}
return redirect('/');
}
public function creat_key(Request $request,$tabel){
DB::table($tabel)->insert(
['value' => $request->value, 'key' => $request->key]
);
return redirect('/');
}
}
