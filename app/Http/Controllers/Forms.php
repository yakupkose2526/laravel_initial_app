<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Forms extends Controller
{
    public function form_display()
    {
        return view('form');
    }

    // Formdan gelen verileri aşağıdaki gibi alıyoruz.
    public function form_result(Request $request)
    {
        return $request->metin;
    }
}
