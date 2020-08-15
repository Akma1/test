@extends('layouts.app')

@section('header_content')
    <h3>Home admin</h3>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@yield('header_content')</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- page content -->
                    <div class="content-wrapper">
                    <!-- Content Wrapper. Contains page content -->
                        <div class="content-header">
                                <div class="container-fluid">
                                <!-- Isi Halaman -->
                                    @yield('pg_content')
                                </div>
                        </div>
                    </div>
                    <!-- end of content -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
