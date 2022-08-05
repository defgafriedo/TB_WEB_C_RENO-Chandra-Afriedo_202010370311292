@extends('main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Tambah Produk Buku</h3>
                {!! Form::open(array('url' => '/identitycreateact')) !!}
                @include('identity._form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
