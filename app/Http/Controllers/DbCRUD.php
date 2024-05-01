<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DbCRUD extends Controller
{
    //! VERİ EKLEME
    public function ekle()
    {
        DB::table('bilgiler')->insert([
            "name"=>'MELTEM',
            "surname"=>'KÖSE',
        ]);
    }
    //! VERİ GÜNCELLEME
    public function guncelle()
    {
        DB::table('bilgiler')->where("id",1)->update([
            "name"=>'YAKUP Update',
        ]);
    }
    //! VERİ SİLME
    public function sil()
    {
        DB::table('bilgiler')->where("id",1)->delete();
    }
    //! VERİ GETİRME
    public function oku()
    {
       $datas =  DB::table('bilgiler')->get();

       foreach ($datas as $key => $value) {
            echo $value->name." ".$value->surname."</br>";
       }

    }
}
