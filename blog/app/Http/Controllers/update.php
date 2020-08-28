<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item_model;

class update extends Controller
{
public function update_out(Request $request,$id,$pic)
{
$item_set =item_model::find($id);
$item_set->kondisi_item =   $request->kondisi_item;
$item_set->lokasi_item =    $request->lokasi_out;
$item_set->pos=$pic;
echo $request->kondisi_item.$request->lokasi_out;
$item_set->save();
return redirect('/');
}
public function update_out2(Request $request,$id)
{
$item_set =item_model::find($id);
$item_set->kondisi_item =   $request->kondisi_item;
$item_set->lokasi_item =    $request->lokasi_out;
$item_set->pos=1;
echo $request->kondisi_item.$request->lokasi_out;
$item_set->save();
return redirect('/');
}
public function update_in(Request $request,$id)
{
$item_set =item_model::find($id);
$item_set->kondisi_item =   $request->kondisi_item;
$item_set->lokasi_item =    $request->lokasi_item;
$item_set->pos=0;
$item_set->save();
return redirect('/');
}

public function send(Request $request,$id)
{
$item_set =item_model::find($id);
$item_set->kondisi_item =   $request->kondisi_item;
$item_set->lokasi_item =    $request->lokasi_item;
$item_set->pos=0;
$item_set->save();
return redirect('/');
}
public function update(Request $request,$id)
{
$room=0;
if ($request->lok1==0) {
$room== $request->lok2;
}else {
$room==$request->lok1;
}

$item_set =item_model::find($id);
$item_set->nama_item =      $request->nama_item;
$item_set->kondisi_item =   $request->kondisi_item;
$item_set->banyak_item =    $request->banyak_item;
$item_set->lokasi_item =   $request->lok1;
$item_set->kategori =       $request->kategori;
$item_set->t_key =       $request->key_p;
// dd($item_set);
$item_set->save();
return redirect('/read_read');

}
}
