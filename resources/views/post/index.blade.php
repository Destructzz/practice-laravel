@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <a href="{{ route('post.create') }}">Create Post</a>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a>
                - <a href="{{ route('post.edit', $post->id) }}">Edit</a>
                <form action="{{ route('post.delete', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
