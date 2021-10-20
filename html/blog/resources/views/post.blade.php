@extends('layout')

@section('title', 'Post')

@section('content')

<div class="card mt-3">
    <div class="card-body">
        {{ $post->content }}
    </div>
    <div class="card-footer text-muted">
        <p>Posted By - {{\App\Models\User::find($post->user_id )->name}} ({{$post->created_at->diffForHumans()}})</p>
    </div>
</div>
@foreach ($post->comments as $comment)
<div class="alert alert-dark mt-2">
    {{$comment->content}}
    <p></p>
    <p>Comment from - {{\App\Models\User::find($comment->user_id )->name}}</p>
</div>
@endforeach
@endsection