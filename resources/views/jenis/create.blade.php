@extends('main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Tambah Jenis</h3>
                {!! Form::open(array('url' => '/jeniscreateact')) !!}
                @include('jenis._form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
