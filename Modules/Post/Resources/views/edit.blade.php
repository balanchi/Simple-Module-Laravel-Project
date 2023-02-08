@extends('layouts.master')

@section('content')
    <div class="container mt-3">
        <h2>Edit Post</h2>
        <form action="{{ route('post.update', $post) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-3">
                <label for="name">Title:</label>
                <input type="text" class="form-control" value="{{ old('title', $post->title) }}" id="name" placeholder="Enter Name" name="title">
            </div>
            <div class="mb-3 mt-3">
                <label for="name">Category:</label>
                <select name="category_id" id="" class="form-control">
                    @foreach ($categories as $category)
                    <option @if($category->id == old('category_id', $post->category_id)) selected @endif  value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="description">Description:</label>
                <input type="text" class="form-control" value="{{ old('description', $post->description) }}" id="description" placeholder="Enter Description"
                    name="description">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
