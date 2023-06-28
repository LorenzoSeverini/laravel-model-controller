@extends('layouts.app')
@section('page-title', 'Movies specific page 🍿')
@section('content')

<div class="text-center py-2">
    <a href="{{route('homepage')}}" style="text-decoration: none; color: red ">Go Back to Home Page</a>
</div>

@include('partials.moviesCard')

@endsection
