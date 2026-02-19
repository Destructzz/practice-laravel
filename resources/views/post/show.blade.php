@extends('layouts.app')

@section('content')
    <h1>Post Details</h1>
    <p><strong>Title:</strong> {{ $post->title }}</p>
    <p><strong>Content:</strong> {{ $post->content }}</p>
    <a href="{{ route('post.index') }}">Back to list</a>
@endsection
