<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function barang()
    {
        $barang = DB::table('barang')->get();

        return view('form/barang' , ['barang' => $barang]);
    }

    public function pemilik()
    {
        $pemilik = DB::table('pemilik')->get();

        return view('form/pemilik', ['pemilik' => $pemilik]);
    }

    public function transaksi()
    {
        $transaksi = DB::table('transaksi')->get();

        return view('form/transaksi' , ['transaksi' => $transaksi]);
    }



    //VIEW PAGE INPUT
    public function InputTransaksi(){
        return view('form/a_InputTransaksi');
    }
}
