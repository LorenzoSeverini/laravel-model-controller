@extends('layouts.app')

@section('content')
<div class="container my-3">
    @foreach ($movies as $movie)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text">{{ $movie->original_title }}</p>
                <p class="card-text">{{ $movie->nationality}}</p>
                <p class="card-text">{{ $movie->date }}</p>
                <p class="card-text">{{ $movie->vote }}</p>
                {{-- <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">View</a> --}}
            </div>
        </div>
    @endforeach
</div>
@endsection
