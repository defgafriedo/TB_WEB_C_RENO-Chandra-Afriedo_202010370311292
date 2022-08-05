@extends('main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['url' => 'book', 'method' => 'get', 'class' => 'form-inline']) !!}
                <div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
                    {!! Form::text('q', isset($q) ? $q : null, ['class' => 'form-control', 'placeholder' => 'Judul Buku..']) !!}
                    {!! $errors->first('q', '<p class="help-block">:message</p>') !!}
                </div>
                {!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}

                <br>

                <h3>Data Jenis
                    <small><a href="/jeniscreate" class="btn btn-Success btn-sm">Create</a></small>
                </h3>
                <table class="table table-hover table-striped table-warning">
                    <thead class="table-success">
                        <tr>
                            <td>Jenis Buku</td>
                            <td>action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($book as $books)
                            <tr>
                                <td>{{ $books->jenis_buku }}</td>
                                <td>
                                     <a href="/jenisedit/{{ $books->id }}" class="btn btn-warning btn-sm">Edit</a> &nbsp;
                                    <a href="/jenisdelete/{{ $books->id }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $book->links() }}
            </div>
        </div>
    </div>
@endsection
