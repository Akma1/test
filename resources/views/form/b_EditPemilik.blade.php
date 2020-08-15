@extends('home')

@section('header_content')
<h3>Form Edit Pemilik</h3>
@endsection

@section('pg_content')
<div class="card-body">
            @foreach($pemilik as $t)
            <form action="{{asset('/pemilik/update')}}" method="POST" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Id</label>
                    <input class="form-control"
                           type="text" name="id" value="{{ $t->id }}" />
                </div>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input class="form-control"
                           type="text" name="nama_pemilik" value="{{ $t->nama_pemilik }}" />
                </div>
                <div class="form-group">
                    <label for="name">Alamat</label>
                    <textarea class="form-control"
                              name="alamat"  >{{ $t->alamat }}</textarea>
                </div>

                <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>
            @endforeach
</div>
@endsection