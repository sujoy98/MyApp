<!-- Importing  app from layout -->
@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-light">Go  Back</a>
    <h1>{{$post->title}}</h1><br>
    <div class="container">
        <!-- show() function from the PostsController accepts id
             and return the body according to it from the database
         -->
        <body><h5>{!!$post->body!!}</h5></body>
    </div>
    <hr>
    <!-- created_at will return us the timestamp of the time when the post is being made.
    we can use this ($post->user->name) as we have defined in the Post model:
    return $this->belongsTo('App\User');
    -->
    <small>Created at {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    <!-- Adding an edit button for the posts -->
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

    <!-- importing Laravel Collective. url-> https://laravelcollective.com/docs/6.0/html-->

    {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}
        <!-- spoofing -->
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}

@endsection
