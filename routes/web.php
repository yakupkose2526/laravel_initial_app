<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Deneme;
use App\Http\Controllers\Web;
use App\Http\Controllers\Forms;
use App\Http\Controllers\DbCRUD;
use App\Http\Controllers\DbModel;
use App\Http\Controllers\Iletisim;
use App\Http\Controllers\AddImage;
use App\Http\Controllers\Validation;


Route::get('/', function () { return view('pages.home');})->name('home');
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

//!MODEL CRUD
Route::get("/listele", [DbModel::class,"liste"])->name('model_list');
Route::get("/modelekle", [DbModel::class,"ekle"])->name('model_add');
Route::get("/modelguncelle", [DbModel::class,"update"])->name('model_update');
Route::get("/modelsil", [DbModel::class,"delete"])->name('model_delete');

//! İLETİŞİM FORMU
Route::get("/iletisim_formu", [Iletisim::class,"index"])->name('iletsim_formu');
Route::post("/gonder", [Iletisim::class,"ekleme"])->name('gonder');

//! UPLOAD FİLE
Route::get("/upload", function(){
    return view("upload");
});
Route::post("/upload_file", [AddImage::class,"add_iamge"])->name('upload_file');

//! UPLOAD FİLE
Route::post("/member_add", [Validation::class,"member_form"])->name('member_add');
Route::get("/member_form", function(){
    return view("validations");
});

//! MULTİPAGE WEB SİTE
Route::get("/about", function(){return view("pages.about");})->name('about');
Route::get("/contact", function(){return view("pages.contact");})->name('contact');
Route::get("/portfolio", function(){return view("pages.portfolio");})->name('portfolio');
Route::get("/services", function(){return view("pages.services");})->name('services');