<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategoriArtikel extends Model
{
    protected $table='kategori_Artikel';
    protected $fillable = [
    	'nama','users_id',
    ];
}