<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilgiler; // modeli çağır

class DbModel extends Controller
{
    public function liste()
    {
        // $bilgi = Bilgiler::whereId(2)->first(); // koşullu veri çağırdığımızda
        $bilgi = Bilgiler::find(3); // koşullu veri çağırdığımızda
        // $bilgi = Bilgiler::get(); 
        echo $bilgi->name;
        }
    public function ekle()
    {
        Bilgiler::create([
            'name'=>'Yusuf Uras',
            'surname'=>'KÖSE',
        ]);

        }
    public function update()
    {
        Bilgiler::whereId(4)->update([
            'name'=>'Yusuf URAS',
            'surname'=>'KÖSE',
        ]);

        }
    public function delete()
    {
        Bilgiler::whereId(4)->delete();

        }
}
