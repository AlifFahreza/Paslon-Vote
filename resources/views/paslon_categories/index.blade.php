
@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h1>Paslon Categories</h1>
    <a href="{{ route('paslon_categories.create') }}" class="btn btn-primary">Create New Category</a>
    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Vision & Mission</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paslonCategories as $category)
                <tr>
                    <td><img src="{{ Storage::url($category->image) }}" width="100"></td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->vision_mission }}</td>
                    <td>
                        <a href="{{ route('paslon_categories.edit', $category) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('paslon_categories.destroy', $category) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
