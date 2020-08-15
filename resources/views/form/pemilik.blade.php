@extends('home')

@section('header_content')
    <h3>Page Pemilik</h3>
@endsection

@section('pg_content')
<div class="card-body">
<form action="{{asset('a_InputPemilik/upload')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label for="name">Id</label>
                    <input id="id" class="form-control"
                           type="text" name="id" placeholder="Id Pemilik" />
                </div>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input id="nama_pemilik" class="form-control"
                           type="text" name="nama_pemilik" placeholder="Nama Pemilik" />
                </div>
                <div class="form-group">
                    <label for="name">Alamat</label>
                    <textarea id="alamat" class="form-control"
                              name="alamat" placeholder="Keterangan Alamat"></textarea>
                </div>

                <input class="btn btn-success" type="submit" name="btn" value="Save" />
</form>
</div>

<script>
    function sendData() {
        var xhr = new XMLHttpRequest();
        var url = "localhost:8000";
        var data = JSON.stringify({
            id: document.getElementById("id").value,
            nama: document.getElementById("nama_pemilik").value,
            alamat: document.getElemenById("alamat").value,
            userId: 1
        });

        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhr.onload = function () {               
            console.log (this.responseText);
        };

        xhr.send(data);
        return false;
    }
</script>
<div class="card-body">
    <a href="{{asset('a_InputPemilik')}}">Input Pemilik</a>
    <table id="table_mode" class="table table-bordered table-striped table-sm">
        <thead>
            <tr>
                <th width="100px">Id Pemilik</th>
                <th width="100px">Nama Pemilik</th>
                <th width="100px">Alamat</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemilik as $t)
            <tr>
                <td width="100px">{{ $t->id }}</td>
                <td width="100px">{{ $t->nama_pemilik }}</td>
                <td width="100px">{{ $t->alamat }}</td>
                <td width="100px">
                    <a {{--data-id="{{$data->id}}"--}} onclick="destroy_data(this)" href="{{asset('/pemilik/hapus')}}/{{$t->id}}" class="btn btn-danger">Delete</a>
                    <a href="{{asset('/pemilik/b_EditPemilik')}}/{{$t->id}}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection