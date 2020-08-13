@extends('layouts/layout')

@section('content')
    <h1>Create Post</h1><br>
    {!! Form::open(['action'=>'PostsController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('summary-ckeditor','Body')}}
            <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>
            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
            <script>
            CKEDITOR.replace( 'summary-ckeditor' );
            </script>
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
