@extends('home')

@section('header_content')
<h3>Form Edit Pemilik</h3>
@endsection

@section('pg_content')
<div class="card-body">
@foreach($barang as $t)
<form action="{{asset('barang/update')}}" method="POST" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Id Barang</label>
                    <input class="form-control"
                           type="text" name="id_barang" value="{{$t->id}}" />
                </div>
                <div class="form-group">
                    <label for="name">Id Pemilik</label>
                    <input class="form-control"
                           type="text" name="id_pemilik" value="{{$t->id_pemilik}}" />
                </div>
                <div class="form-group">
                    <label for="name">Nama Barang</label>
                    <input class="form-control"
                           type="text" name="nama_barang" value="{{$t->nama_barang}}" />
                </div>
                <div class="form-group">
                    <label for="price">Harga</label>
                    <input class="form-control"
                           type="number" name="harga" min="0" value="{{$t->harga}}" />
                </div>
                <div class="form-group">
                    <label for="name">Gambar Produk</label>
                    <input class="form-control-file" type="file" name="img_product" />
                </div>

                <input class="btn btn-success" type="submit" name="btn" value="Save" />
</form>
@endforeach
</div>
@endsection