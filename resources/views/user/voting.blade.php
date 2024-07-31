@extends('layouts.admin.app')

@section('title', 'Voting Page')

@section('content')
<div class="container-fluid text-center">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    @if(auth()->user()->hasVoted())
        <div class="alert alert-danger">
            Anda Sudah Melakukan Voting
        </div>
    @endif

    <h2 class="mt-4">Voting Paslon</h2>

    <div class="row mt-4">
        @foreach($paslonCategories as $category)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top mx-auto d-block" src="{{ Storage::url($category->image) }}" alt="{{ $category->name }}" style="max-width: 50%; height: auto;">
                <div class="card-body">
                    <h4 class="card-title">{{ $category->name }}</h4>
                    <p class="card-text">{{ $category->vision_mission }}</p>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        @if(auth()->user()->hasVoted())
                            
                        @else
                            <a href="{{ route('vote.paslon', ['paslon' => $category->id]) }}" class="btn btn-primary">Vote</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection