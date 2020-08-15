@extends('home')

@section('header_content')
<h3>Form Transaksi</h3>
@endsection

@section('pg_content')
<div class="card-body">
<form action="{{asset('a_InputTransaksi/upload')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label for="name">Id Transaksi</label>
                    <input class="form-control"
                           type="text" name="id_transaksi" placeholder="Kode Barang" />
                </div>
                <div class="form-group">
                    <label for="name">Id Barang</label>
                    <input class="form-control"
                           type="text" name="id_barang" placeholder="Nama Barang" />
                </div>
                <div class="form-group">
                    <label for="name">Id Pemilik</label>
                    <input class="form-control"
                           type="text" name="id_pemilik" placeholder="Kode Golongan" />
                </div>
                <div class="form-group">
                    <label for="price">Harga Bayar</label>
                    <input class="form-control"
                           type="number" name="harga_bayar" min="0" placeholder="Harga Retail" />
                </div>
                <div class="form-group">
                    <label for="price">Status</label>
                    <input class="form-control"
                           type="text" name="status" placeholder="Promo Harga" />
                </div>

                <input class="btn btn-success" type="submit" name="btn" value="Save" />
</form>
</div>
@endsection