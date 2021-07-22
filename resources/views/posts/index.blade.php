@extends('layouts.app')

@section('content')
    <h1 class="my-2">Posts</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="list-group">
                <div class="list-group-item flex py-3 my-2">
                    <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <small>Written on {{$post->created_at}}</small>
                </div>
            </div>
        @endforeach
        {{$posts->links("pagination::bootstrap-4")}}
    @else
        <p>No posts found.</p>
    @endif
@endsection