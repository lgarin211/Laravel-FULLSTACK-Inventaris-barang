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
    {
    $k=DB::table('key_k')->get();
    $nama=[];
    $nilai=[];
    foreach ($k as $keya => $a) {
    $nama[$keya]=$a->value;        }
    foreach ($nama as $key => $m) {
    $ping=DB::table('item')->where('t_key',$m)->get();
    $nilai[$key]=$ping->count();}
    $data=[$nama,$nilai];
    return view('welcome',compact('data'));}
}
