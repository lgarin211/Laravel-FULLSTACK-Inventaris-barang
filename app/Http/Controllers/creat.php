<?php

namespace App\Http\Controllers;

use App\Imports\Item;
use App\item_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\out;
use Maatwebsite\Excel\Facades\Excel;

class creat extends Controller
{
    public function importcase(Request $request, $exelfile = null)
    {
        // gere error
        if (!empty($request->file('file'))) {
            $this->validate($request, [
                'file'  => 'required|mimes:xls,xlsx'
            ]);

            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('file');
            $tujuan_upload = 'storage/files/2/';
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $exelfile = $tujuan_upload.$file->getClientOriginalName();
            $data = Excel::import(new Item, $exelfile);
            return redirect('/','refresh');

        }
        if (empty($exelfile)) {
            return view('importITEM');
        }
        \dd(DB::table('item')->get());
    }

    public function creat(Request $request)
    {
        $cek = DB::table('item')->where('barcode', $request->barcode)->first();
        if ($cek == null) {
            $cek = 1;
        } else {
            $cek = 0;
        }

        if ($cek == 0) {
            return redirect('/read_read')->with('status', 'Barang Sudah ada');
        } else {
            $item_set = new item_model;
            $item_set->nama_item =      "default";
            $item_set->kondisi_item =   "default";
            $item_set->banyak_item =    0;
            $item_set->lokasi_item =    "default";
            $item_set->kategori =       "default";
            $item_set->pos =             1;
            $item_set->barcode =         $request->barcode;
            $item_set->save();
        }
        return redirect('/read_read');
        # code...
    }

    public function cread_out(Request $request, $id)
    {
        $item = DB::table('item')->where('id', $id)->first();

        $item_set = new out;
        $item_set->nama_item =      $item->nama_item;
        $item_set->kondisi_item =   $item->kondisi_item;
        $item_set->banyak_item =    $request->min_item;
        $item_set->lokasi_item =    $request->lokasi_out;
        $item_set->kategori =       $item->kategori;
        $item_set->barcode =         $item->barcode;
        $item_set->deks =            $item->deks;
        $item_set->save();

        $stok = $item->kondisi_item;
        if ($request->min_item < $item->banyak_item) {
            $new = $item->banyak_item - $request->min_item;
            if ($new < 0) {
                $new = 0;
            }
            $item_set = item_model::find($id);
            $item_set->banyak_item = $new;
            $item_set->save();
        } elseif ($request->min_item == $item->banyak_item) {
            DB::table('item')->where('id', $id)->delete();
        }
        return redirect('/');
    }
    public function creat_key(Request $request, $tabel)
    {
        DB::table($tabel)->insert(
            ['value' => $request->value, 'key' => $request->key]
        );
        return redirect('/');
    }
    //komputer
    public function kirimpc(Request $request)
    {
        echo 'most';
        dd($_POST);
    }
}
