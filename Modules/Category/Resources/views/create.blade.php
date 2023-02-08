@extends('layouts.master')

@section('content')
    <div class="container mt-3">
        <h2>Create Category</h2>
        <form action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="mb-3 mt-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
            </div>
            <div class="mb-3">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" placeholder="Enter Description"
                    name="description">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
