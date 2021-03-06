<!-- Importing  app from layout -->
@extends('layouts.app')
@section('content')
    <h1>Create Post</h1><br>
    <!-- importing Laravel Collective. url-> https://laravelcollective.com/docs/6.0/html-->
    {!! Form::open(['action'=>'PostsController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body Text'])}}
        </div>
        <!-- adding a submit button  -->
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
