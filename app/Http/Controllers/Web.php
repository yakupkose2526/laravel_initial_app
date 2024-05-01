<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web extends Controller
{
    public function site(){
        $data['yazi1'] = "WELCOME PHP";
        $data['yazi2'] = "WELCOME LARAVEL";
        $data['yazi3'] = "Hizmetlerimiz";
        $data['yazi4'] = "Web Tasarım Hizmetleri";
        $data['yazi5'] = "Bize Ulaşın";


        return view("web", $data);
    }
}
