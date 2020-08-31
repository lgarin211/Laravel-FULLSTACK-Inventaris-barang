<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class api extends Controller
{
    public function one(Type $var = null)
    {
        # code...
        $v='transformersg';
        $data=Http::get('http://www.omdbapi.com/?apikey=2b89c513&s='.$v)->json();
    // dd($data);
    foreach ($data['Search'] as $itm) {
        if($itm['Poster'] == 0){
            echo '<img src="'.$itm['Poster'].'" alt="">';
        }
    }
        return view('api',['data'=>$data]);
    }

}
