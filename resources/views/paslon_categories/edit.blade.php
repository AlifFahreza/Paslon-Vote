@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h1>Edit Paslon Category</h1>
    <form action="{{ route('paslon_categories.update', $paslonCategory) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
            <img src="{{ Storage::url($paslonCategory->image) }}" width="100">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $paslonCategory->name }}" required>
        </div>
        <div class="form-group">
            <label for="vision_mission">Vision & Mission</label>
            <textarea name="vision_mission" class="form-control" required>{{ $paslonCategory->vision_mission }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
