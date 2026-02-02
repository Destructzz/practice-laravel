@extends('layouts.app')

@section('content')
    <h1>Categories</h1>
    <a href="{{ route('category.create') }}">Create Category</a>
    <ul>
        @foreach($categories as $category)
            <li>
                <a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a>
                - <a href="{{ route('category.edit', $category->id) }}">Edit</a>
                <form action="{{ route('category.delete', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
