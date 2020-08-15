<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    //
    public function upload(Request $req)
    {
        # code...
        DB::table('transaksi')->insert([
            'id' => $req -> id_transaksi,
            'id_barang' => $req -> id_barang,
            'id_pemilik' => $req -> id_pemilik,
            'harga_bayar' => $req -> harga_bayar,
            'status' => $req -> status
        ]);

        return redirect('/transaksi');
    }
    
    public function delete($id){
        
        DB::table('transaksi')->where('id',$id)->delete();

        return redirect('/transaksi');
    }
}
