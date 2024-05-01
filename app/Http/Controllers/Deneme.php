<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Deneme extends Controller
{
    function test($isim)
    {
        return view('index',['ad'=>$isim]);
    }
}
