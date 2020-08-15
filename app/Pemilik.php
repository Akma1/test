<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    //
    protected $table = "barang";

    public function pemilik()
    {
        # code...
        return $this->belongsToMany('App\Barang');
    }
}
