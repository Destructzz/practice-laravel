@extends('layouts.app')

@section('content')
    <h1>Category Details</h1>
    <p><strong>Name:</strong> {{ $category->name }}</p>
    <p><strong>Description:</strong> {{ $category->description }}</p>
    <a href="{{ route('category.index') }}">Back to list</a>
@endsection
