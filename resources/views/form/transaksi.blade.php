@extends('home')

@section('header_content')
    <h3>Page Transaksi</h3>
@endsection

@section('pg_content')
<div class="card-body">
    <a href="{{asset('a_InputTransaksi')}}">Transaksi</a>
    <table id="table_mode" class="table table-bordered table-striped table-sm">
        <thead>
            <tr>
                <th width="100px">Id Transaksi</th>
                <th width="100px">Id Barang</th>
                <th width="100px">Id Pemilik</th>
                <th width="100px">Harga Bayar</th>
                <th width="100px">Status</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksi as $t)
            <tr>
                <td width="100px">{{ $t->id }}</td>
                <td width="100px">{{ $t->id_barang }}</td>
                <td width="100px">{{ $t->id_pemilik }}</td>
                <td width="100px">{{ $t->harga_bayar }}</td>
                <td width="100px">{{ $t->status }}</td>
                <td width="100px">
                    <a {{--data-id="{{$data->id}}"--}} onclick="destroy_data(this)" href="{{asset('/transaksi/hapus')}}/{{$t->id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection