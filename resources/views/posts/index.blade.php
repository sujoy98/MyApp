@extends('layouts/layout')

@section('content')
    <h1>Posts</h1><br>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="container">
                <div class="card">
                    <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                    <small>Created on {{$post->created_at}}</small><br>
                </div>
            </div>
        @endforeach
        <hr>
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection
