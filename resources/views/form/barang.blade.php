@extends('home')

@section('header_content')
    <h3>Page Barang</h3>
@endsection

@section('pg_content')
<div class="card-body">
<form action="{{asset('a_InputBarang/upload')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label for="name">Id Barang</label>
                    <input class="form-control"
                           type="text" name="id_barang" placeholder="Id Barang" />
                </div>
                <div class="form-group">
                    <label for="name">Id Pemilik</label>
                    <input class="form-control"
                           type="text" name="id_pemilik" placeholder="Id Pemilik" />
                </div>
                <div class="form-group">
                    <label for="name">Nama Barang</label>
                    <input class="form-control"
                           type="text" name="nama_barang" placeholder="Nama Barang" />
                </div>
                <div class="form-group">
                    <label for="price">Harga</label>
                    <input class="form-control"
                           type="number" name="harga" min="0" placeholder="Harga" />
                </div>
                <div class="form-group">
                    <label for="name">Gambar Produk</label>
                    <input class="form-control-file" type="file" name="img_product" />
                </div>

                <input class="btn btn-success" type="submit" name="btn" value="Save" />
</form>
</div>
<div class="card-body">
    <table id="table_mode" class="table table-bordered table-striped table-sm">
        <thead>
            <tr>
                <th width="100px">Id Barang</th>
                <th width="100px">Id Pemilik</th>
                <th width="100px">Nama Barang</th>
                <th width="100px">Harga Barang</th>
                <th width="100px">Gambar</th>
                <th width="100px">Path Gambar</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $t)
            <tr>
                <td width="100px">{{ $t->id }}</td>
                <td width="100px">{{ $t->id_pemilik }}</td>
                <td width="100px">{{ $t->nama_barang }}</td>
                <td width="100px">{{ $t->harga }}</td>
                <td width="100px"><img src="{{asset('storage/product/')}}/{{$t->path}}" height="100"></td>
                <td width="100px">{{ $t->path }}</td>
                <td width="100px">
                    <a {{--data-id="{{$data->id}}"--}} onclick="destroy_data(this)" href="{{asset('/barang/hapus')}}/{{$t->id}}" class="btn btn-danger">Delete</a>
                    <a href="{{asset('/barang/b_EditBarang')}}/{{$t->id}}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection