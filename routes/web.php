<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Deneme;
use App\Http\Controllers\Web;
use App\Http\Controllers\Forms;
use App\Http\Controllers\DbCRUD;


Route::get('/', function () { return view('welcome');});
Route::get('/index', function () { return view('index');});

Route::get("/deneme/{isim}", [Deneme::class,"test"]);

Route::get("/web", [Web::class,"site"])->name('web_route');

Route::get("/form", [Forms::class,"form_display"]);
//!Middleware işlemi için route
Route::middleware('arakontrol')->post("/form_result", [Forms::class,"form_result"])->name('form_result');
//!DB CRUD
Route::get("/ekle", [DbCRUD::class,"ekle"])->name('ekle');
Route::get("/guncelle", [DbCRUD::class,"guncelle"])->name('ekle');
Route::get("/sil", [DbCRUD::class,"sil"])->name('sil');
Route::get("/oku", [DbCRUD::class,"oku"])->name('oku');
