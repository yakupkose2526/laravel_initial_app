<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Validation extends Controller
{
    public function member_form(Request $datas){
        $datas -> validate([
            "name"=> "required | min:5 | max:50",
            "phone"=> "required | min:10 | max:12",
            "mail"=> "email | required",
        ]);

        echo "Sorunsuz Geçti";
    }
}
