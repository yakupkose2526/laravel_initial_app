<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddImage extends Controller
{
    public function add_iamge(Request $request){
        $original_name = $request->image->getClientOriginalName(); // ilgili dosyanın ismi için kullanılır.

        // echo  $request->image->getClientOriginalExtension(); // ilgili dosyanın sadece uzantısı için kullanılır.

        $image_name = rand(0,1000).".".$request->image->getClientOriginalExtension(); // kendimiz farklı şekilde isimlendirmek istersek

        $add = $request->image->move(public_path('images'),$original_name);

        if ($add){
            echo "Dosya Yükleme Başarılı";
        }
    }
}
