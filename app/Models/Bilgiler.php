<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilgiler extends Model
{
    use HasFactory;
    protected $table = 'bilgiler'; // DB deki bu tabloyla çalışacağım 
    protected $fillable = [
        "name","surname","created_at","updated_at"
    ]; 
}
