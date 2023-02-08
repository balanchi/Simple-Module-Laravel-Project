@extends('layouts.master')

@section('content')
<div class="container mt-3">
    <h2>Post</h2>
    <div class="d-flex justify-content-end">
        <a class="btn btn-info" href="{{ route('post.create') }}">create</a>
    </div>
    <table class="table table-striped">

        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category Name</th>
                <th>Setting</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td>{{ $post->category->name }}</td>
                <td>
                    <form class="d-inline" action="{{ route('post.destroy', $post)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    <a class="btn btn-warning" href="{{ route('post.edit', $post) }}">Edit</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
