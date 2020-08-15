<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemilikController extends Controller
{
    //
    public function upload(Request $req)
    {
        # code...
        DB::table('pemilik')->insert([
            'id' => $req -> id,
            'nama_pemilik' => $req -> nama_pemilik,
            'alamat' => $req -> alamat
        ]);

        return redirect('/pemilik');
    }

    public function edit($id)
    {
        $pemilik = DB::table('pemilik')->where('id',$id)->get();
        
        return view('form/b_EditPemilik',['pemilik' => $pemilik]);
    }

    public function update(Request $req)
    {
        DB::table('pemilik')->where('id',$req->id)->update([
            'id' => $req -> id,
            'nama_pemilik' => $req -> nama_pemilik,
            'alamat' => $req -> alamat
        ]);

        return redirect('/pemilik');
    }

    public function delete($id){

        DB::table('pemilik')->where('id',$id)->delete();

        return redirect('/pemilik');
    }
}
