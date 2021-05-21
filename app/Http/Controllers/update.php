<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item_model;
use App\item_pinjam_model;
use Illuminate\Support\Facades\DB;

class update extends Controller
{
    public function update_out(Request $request, $id, $pic)
    {

        if ($pic == 0) {
            $casea = item_model::where('id', $id)->first();;
            $case = new item_pinjam_model;
            $case->nama_item = $casea['nama_item'];
            $case->kondisi_item = $casea['kondisi_item'];
            $case->banyak_item = $casea['banyak_item'];
            $case->pic = $pic;
            $case->item_id = $id;
            $case->petugas = 'none';
            $case->peminjam = $request->lokasi_out;
            $case->kategori = $casea['kategori'];
            $case->barcode = $casea['barcode'];
            $case->deks = $casea['deks'];
            $case->save();
        } elseif ($pic == 1) {
            $casr = item_pinjam_model::where('item_id', $id)->orderByDesc('created_at')->first();
            item_pinjam_model::where('id', $casr->id)
                ->update(['pic' => $pic, 'Petugas' => $request->lokasi_out]);
        }

        $item_set = item_model::find($id);
        $item_set->kondisi_item =   $request->kondisi_item;
        $item_set->lokasi_item =    $request->lokasi_out;
        $item_set->pos = $pic;
        // echo $request->kondisi_item . $request->lokasi_out;
        $item_set->save();


        return redirect('/pijam');
    }
    // public function update_out2(Request $request, $id)
    // {
    //     $item_set = item_model::find($id);
    //     $item_set->kondisi_item =   $request->kondisi_item;
    //     $item_set->lokasi_item =    $request->lokasi_out;
    //     $item_set->pos = 1;
    //     echo $request->kondisi_item . $request->lokasi_out;
    //     $item_set->save();
    //     return redirect('/');
    // }
    // public function update_in(Request $request, $id)
    // {
    //     $item_set = item_model::find($id);
    //     $item_set->kondisi_item =   $request->kondisi_item;
    //     $item_set->lokasi_item =    $request->lokasi_item;
    //     $item_set->pos = 0;
    //     $item_set->save();
    //     return redirect('/');
    // }

    public function send(Request $request, $id)
    {
        $item_set = item_model::find($id);
        $item_set->kondisi_item =   $request->kondisi_item;
        $item_set->lokasi_item =    $request->lokasi_item;
        $item_set->pos = 0;
        $item_set->save();

        return redirect('/');
    }
    public function update(Request $request, $id)
    {

        $room = 0;
        if ($request->lok1 == 0) {
            $room == $request->lok2;
        } else {
            $room == $request->lok1;
        }

        $item_set = item_model::find($id);
        $item_set->nama_item =      $request->nama_item;
        $item_set->kondisi_item =   $request->kondisi_item;
        $item_set->banyak_item =    $request->banyak_item;
        $item_set->lokasi_item =   $request->lok1;
        $item_set->kategori =       $request->kategori;
        $item_set->t_key =       $request->key_p;
        $item_set->deks = $request->deksripsi;
        // dd($item_set);
        $item_set->save();
        if (!empty($_GET['cas'])) {
            return redirect('/edit/'.$id)->with('status', 'Update sudah Berhasil');
        }
        return redirect('/read_read');
    }
    public function up_delet(Request $request, $id, $tabel)
    {
        DB::table($tabel)->where('id', $id)->delete();
        return redirect('/read_read');
    }
}
