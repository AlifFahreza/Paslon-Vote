@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h1>Paslon Category Detail</h1>
    <div>
        <img src="{{ Storage::url($paslonCategory->image) }}" width="100" alt="Image">
        <h2>{{ $paslonCategory->name }}</h2>
        <p>{{ $paslonCategory->vision_mission }}</p>
        <a href="{{ route('paslon_categories.edit', $paslonCategory) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('paslon_categories.destroy', $paslonCategory) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endsection
