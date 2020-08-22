<!-- Importing  app from layout -->
@extends('layouts.app')
@section('content')
    <h1>Edit Post</h1><br>
    <!-- importing Laravel Collective. url-> https://laravelcollective.com/docs/6.0/html-->
  {!!Form::open(['action'=>['PostsController@edit',$post->id], 'method'=>'POST'])!!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Body Text'])}}
        </div>
        {{From::hidden('_method','PUT')}}
        <!-- adding a submit button  -->
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
