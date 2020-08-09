@extends('layouts/layout')

@section('content')
    <h1>Posts</h1><br>
    @if(count($posts) > 1)
        @foreach($posts as $post)
            <div class="well">
                <h4>{{$post->title}}</h4>
                <small>Created on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection
