@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md">
        <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                {{-- {{ __('You are logged in!') }} --}}
                <a href="/posts/create" class="btn btn-primary">Create Post</a>
                <h3>Your Blog Posts</h3>
                @if (count($posts) > 0)
                <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td><a href="/posts/{{$post->id }}/edit" class="btn btn-default">Edit</a></td>
                        <td>
                            {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'col-xs-offset-2'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </td>
                    </tr>
                    @endforeach
                </table>
                @else
                    <p>You have no posts.</p>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
