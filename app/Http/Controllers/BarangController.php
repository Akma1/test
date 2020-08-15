<?php

namespace App\Http\Controllers;

use App\Barang;
use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    //
    public function upload(Request $req)
    {
        # code...
        $this->validate($req,[
            'img_product' => 'required|file|mimes:jpg,jpeg,png,bmp'
        ]);
        
        $file = new Barang();

        $file -> id = $req->get('id_barang');
        $file -> id_pemilik = $req->get('id_pemilik');
        $file -> nama_barang = $req->get('nama_barang');
        $file -> harga = $req->get('harga');
        if($req->hasFile('img_product')){
            $req->file('img_product')->store('product');
            $file -> gambar = $req->file('img_product')->getClientOriginalName();
            $file -> path = $req->file('img_product')->hashName();
         }
         $file->save();
         return redirect()->back();
    }

    public function delete($id, Request $req){
        
        DB::table('barang')->where('id',$id)->delete();
 
        return redirect('/barang');
    }

    public function edit($id)
    {
        $barang = DB::table('barang')->where('id',$id)->get();
        
        return view('form/b_EditBarang',['barang' => $barang]);
    }
    public function update(Request $req)
    {
        # code...
        $this->validate($req,[
            'img_product' => 'required|file|mimes:jpg,jpeg,png,bmp'
            ]);
            
            $file = new Barang();
    
            $file -> id = $req->get('id_barang');
            $file -> id_pemilik = $req->get('id_pemilik');
            $file -> nama_barang = $req->get('nama_barang');
            $file -> harga = $req->get('harga');
            if($req->hasFile('img_product')){
                $req->file('img_product')->store('product');
                $file -> gambar = $req->file('img_product')->getClientOriginalName();
                $file -> path = $req->file('img_product')->hashName();
             }
             $file->save();
             return redirect()->back();
    }
} 