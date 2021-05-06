<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item_model;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('wek');
        return redirect('/try');
    }
    public function dataread()
    {
        $k = DB::table('key_k')->get();
        $nama = [];
        $nilai = [];
        foreach ($k as $keya => $a) {
            $nama[$keya] = $a->value;
        }
        foreach ($nama as $key => $m) {
            $ping = DB::table('item')->where('t_key', $m)->get();
            $total=0;
            foreach ($ping as $das => $salsa) {
                $total+=$salsa->banyak_item;
            }
            $nilai[$key] = $total;

        }
        $data = [$nama, $nilai];
        if (!empty($_GET['pdf'])) {
            $data   =   DB::table('item')->get();
            return view('printpdf', compact('data'));
        }
        return view('welcome', compact('data'));
    }
}
