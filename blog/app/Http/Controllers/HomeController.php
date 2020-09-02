<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        // return view('home');
        return redirect('/');
    }
    public function dataread()
    {   $datasort   =    [];
        $a          =    0;
        $value=0;
        $da=[];
        $pin        =    DB::table('key_k')->get();
        $b=0;
        $sam=[];
        foreach ($pin as $key => $pi) {
        $key_k      =    DB::table('item')->where('t_key',$pi->key)->get();
$sam[$key]=$pi->value;
// dd($sam);
        if ($key_k->count() > 0) {

        $datasort[$a]=$key_k;
        // dd($key_k);
        foreach ($key_k as $key2 => $das) {
        $value=$value+$key_k[$key2]->banyak_item;}
        $da[$key2]=$value;
        $value=0;
        $a++;}
        }
        $data=[$sam,$da];
        dd($data);
    return view('welcome',compact('data'));
    }
}
