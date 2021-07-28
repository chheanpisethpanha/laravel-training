@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary mb-3">Go back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{ $post->cover_image }}">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post-> user-> name }}.</small>
    <hr>
    @if (!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <div class="d-flex justify-content-between">
            <a href="/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a>
   
            {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'col-xs-offset-2'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
            </div>
        @endif
    @endif
@endsection