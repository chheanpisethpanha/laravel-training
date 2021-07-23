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
                <h3> TODO: Blog posts here </h3>
            </div>
        </div>
    </div>
</div>

@endsection
