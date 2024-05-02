<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IletisimModel; // modeli çağır

class Iletisim extends Controller
{
    public function index()
    {
        return view('iletisim');

    }
    public function ekleme(Request $request)
    {


        IletisimModel::create([
            'name'=> $request->name,
            'surname'=> $request->surname,
            'mail'=> $request->mail,
            'phone'=> $request->phone,
            'message'=> $request->message,

        ]);

        echo "İletişim Formunuz Başarıyla Kaydedilmiştir.";


    }
}
