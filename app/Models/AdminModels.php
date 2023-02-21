<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class AdminModels extends Authenticable
{
    use HasFactory;
    protected $table = 'admin';
    protected $guarded = [];
    public $timestamps = false;






}   
