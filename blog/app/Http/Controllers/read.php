<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item_model;
use App\komputer;
use Illuminate\Support\Facades\DB;

class read extends Controller
{
    public function index()
    {
        return view('base');
        # code...
    }

    // Inventaris
    public function read()
    {
        $flights   =   item_model::all();
        $p          =   $flights == null;
        $data       =   'flights';
        if ($flights->count() == 0) {
            // return view('input_produka_a');
        } else {
            foreach ($flights as $flight) {
                if ($flight->nama_item == "default") {
                    $komponen   =    $item = DB::table('komponen')->get();
                    $kondisi    =    $item = DB::table('kondisi_k')->get();
                    $lokasi     =    $item = DB::table('lokasi_k')->get();
                    $kategory   =    $item = DB::table('katerori_k')->get();
                    $key        =    $item = DB::table('key_k')->get();
                    $run        =    [$komponen, $kondisi, $lokasi, $kategory, $key];
                    $view       =    'update_produk';
                    $data       =    'flight';
                    $final      =    [$flight, $data, $run];
                    // \dd($final);
                    return \view($view, compact('final'));
                } else {
                    $view = 'input_produk';
                }
            }
        }
        $pin        =    DB::table('key_k')->get();
        $datasort   =    [];
        $a          =    0;
        foreach ($pin as $key => $pi) {
            $key_k      =    DB::table('item')->where('t_key', $pi->value)->get();
            if ($key_k->count() > 0) {
                $datasort[$a] = $key_k;
                $a++;
            }
        }
        // \dd($datasort);

        $data       =   [$flights, $datasort, $pin];
        // \dd($data[0]);
        return \view($view, compact('data'));
    }
    // public function a(Request $request)
    // { $item = DB::table('item')->where('barcode', $request->barcode)->first();
    //  if ($item->pos==1) {
    //     return view('pinjam',compact('item'));
    // }else {
    //     echo "barang sudah di pinjam";
    // }
    // }
    public function b(Request $request)
    {
        $item = DB::table('item')->where('barcode', $request->barcode)->first();
        $kata = 1;
        $data = [$item, $kata];
        if ($item->pos == 0) {
            return view('kembali', compact('data'));
        } else {
            $kata = 'barang tidak di pinjam';
            $data = [$item, $kata];
            $request->session()->flash('pesan', $data[1]);
            // return view('kembali',compact('data'));
            return redirect('/pijam')->with('status', 'item tidak di pinjam');
        }
    }

    public function a(Request $request)
    {
        $item = DB::table('item')->where('barcode', $request->barcode)->first();
        $kata = 1;
        $data = [$item, $kata];
        if ($item->pos == 1) {
            return view('pinjam', compact('item'));
        } else {
            $kata = 'barang tidak di pinjam';
            $data = [$item, $kata];
            $request->session()->flash('pesan', $data[1]);
            // return view('kembali',compact('data'));
            return redirect('/pijam')->with('status', 'item sudah di pinjam');;
        }
    }

    public function kategory(Request $request, $tabel, $view)
    {
        // echo $view;
        $item = DB::table($tabel)->get();
        $data = [$item, $tabel];
        return view($view, compact('data'));
    }
    public function out_view()
    {
        $flights = DB::table('item_out_table')->get();
        if ($flights->count() > 0) {
            return view('find_item', \compact('flights'));
        } else {
            return view('find_item_a');
        }
    }

    public function data_out(Request $request)
    {

        $item = DB::table('item')->where('barcode', $request->barcode)->first();
        if ($item == null) {
            return redirect('/out')->with('status', 'barang belum terinput atau sudah keluar');
        } else {
            $d = DB::table('item_out_table')->where('barcode', $request->barcode)->first();
            if (!$d == null) {
                return redirect('/out')->with('status', 'barang sudah keluar');
            } else {
                return \view('barang_keluar', compact('item'));
            }
        }
    }

    // komputer

    public function komputer()
    {
        $flights   =   komputer::all();
        $view = 'non';
        $compact = 'non';
        if (\count($flights) == 0) {
            echo "kosong";
            die;
        } else {

            foreach ($flights as $key => $dim) {
                if ($dim->Komputer_name == "default") {
                    $ding = 'dim';
                    $view = 'komputer/input';
                    $compact = $ding;
                } else {
                    $ding = 'flights';
                    $view = 'komputer/base';
                    $compact = $ding;
                }
            }
        }
        return \view($view, \compact($ding));
    }
    public function komputer1()
    {
    }
}
