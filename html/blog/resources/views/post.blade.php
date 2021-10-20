@extends('layout')

@section('title', 'Post')

@section('content')

<div class="card mt-3">
    <div class="card-body">
        {{ $post->content }}
    </div>
    <div class="card-footer text-muted">
        <p>Posted By - {{$post->user->name}} ({{$post->created_at->diffForHumans()}})</p>
    </div>
</div>
@foreach ($post->comments as $comment)
<div class="alert alert-dark mt-2">
    {{$comment->content}}
    <p></p>
    <p>Comment from - {{$comment->user->name}}</p>
</div>
@endforeach
@endsection