<!-- Importing  app from layout -->
@extends('layouts.app')
@section('content')
    <h1>Posts</h1><br>
    <!-- Checking if there is any post available -->
    @if(count($posts) > 0)
        <!-- usign for-each loop to itarate through the array -->
        @foreach($posts as $post)
            <div class="container">
                <div class="card">
                    <!-- id -> will give us the auto incremented id from the database
                         title -> will return the title of the particular post on basis of id
                         created_at -> will return the timespamps form the database
                     -->
                    <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                    <small>Created on {{$post->created_at}} by {{$post->user->name}}</small><br>
                </div>
            </div>
        @endforeach
        <hr>
        <!-- Adding page number i.e paginate-->
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection
