@extends('layouts.app')

@section('content')
    <h1>Create Category</h1>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div>
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description"></textarea>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
