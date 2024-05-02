<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IletisimModel extends Model
{
    use HasFactory;
    protected $table = 'iletisim'; // DB deki bu tabloyla çalışacağım 
    protected $fillable = [
        "name","surname","mail","phone","message","created_at","updated_at"
    ]; 
}
