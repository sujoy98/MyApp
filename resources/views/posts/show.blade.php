@extends('layouts/layout')

@section('content')
    <a href="/posts" class="btn btn-light">Go  Back</a>
    <h1>{{$post->title}}</h1><br>
    <div class="container">
        <body><h5>{{$post->body}}</h5></body>
    </div>
    <hr>
    <small>Created at {{$post->created_at}}</small>
@endsection
