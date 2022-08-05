@extends('main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Edit {{ $book->title }}</h3>
                {!!Form::model($book,['url'=> ['/jeniseditact',$book->id],'method'=>'PATCH'])!!}
                @include('jenis._form', ['model' => $book])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection


