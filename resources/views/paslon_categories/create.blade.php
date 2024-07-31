@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h1>Create Paslon Category</h1>
    <form action="{{ route('paslon_categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="vision_mission">Vision & Mission</label>
            <textarea name="vision_mission" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
