@extends('layouts.master')

@section('content')
<div class="container mt-3">
    <h2>Category</h2>
    <div class="d-flex justify-content-end">
        <a class="btn btn-info" href="{{ route('category.create') }}">create</a>
    </div>
    <table class="table table-striped">

        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Setting</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <form class="d-inline" action="{{ route('category.destroy', $category)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    <a class="btn btn-warning" href="{{ route('category.edit', $category) }}">Edit</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
