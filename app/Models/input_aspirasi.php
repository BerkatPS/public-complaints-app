<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class input_aspirasi extends Model
{
    use HasFactory;
    protected $table = 'input_aspirasi';
    protected $fillable = [
        'nama',
        'nik',
        'id_kategori',
        'bukti', 
        'lokasi',
        'keterangan',
    ];

    
    public function category()
    {
        return $this->belongsTo(category::class, 'id_kategori', 'id_kategori');
    }
}
