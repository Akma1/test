<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $table = "barang";
    protected $fillable = [
        'id_barang',
        'id_pemilik',
        'nama_barang',
        'harga',
        'img_product'
    ];

    public function pemilik()
    {
        # code...
        return $this->belongsToMany('App\Pemilik');
    }
}