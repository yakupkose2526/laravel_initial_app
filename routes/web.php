<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Deneme;


Route::get('/', function () { return view('welcome');});
Route::get('/index', function () { return view('index');});

Route::get("/deneme/{isim}", [Deneme::class,"test"]);
