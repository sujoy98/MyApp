@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <a href="/posts/create" class="btn btn-secondary float-right">Create Post</a>
                    <h4>Your Posts</h4>
                    @if(count($posts)>0)
                        <table class="table table-stripped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>

                                    <td><a href="/posts/{{$post->id}}" class="btn btn-primary float-right">View</a></td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary float-right">Edit</a></td>

                                    <td>
                                        {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}
                                        <!-- spoofing -->
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
