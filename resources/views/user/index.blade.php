@extends('layouts.admin.app')

@section('title', 'User Management')

@section('content')
<div class="container">
    <h1>User Management</h1>
    <a href="{{ url('/user/register') }}" class="btn btn-success mb-3">Add New User</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ url('/user/edit/' . $user->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ url('/user/delete/' . $user->id) }}" method="POST" style="display:inline;">
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
