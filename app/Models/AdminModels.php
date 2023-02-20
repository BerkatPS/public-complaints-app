<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class AdminModels extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $guarded = [];
    public $timestamps = false;




    public function category()
    {
        return $this->belongsTo(category::class, 'id_kategori', 'id_kategori');
    }

}   
