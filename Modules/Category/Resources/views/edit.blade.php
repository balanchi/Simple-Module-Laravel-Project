@extends('layouts.master')

@section('content')
<div class="container mt-3">
    <h2>Edit Category</h2>
    <form action="{{ route('category.update', $category) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 mt-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" value="{{ old('name', $category->name) }}" name="name">
        </div>
        <div class="mb-3">
            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" value="{{ old('description', $category->description) }}"
                name="description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
