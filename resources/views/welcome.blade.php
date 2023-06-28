@extends('layouts.app')

@section('content')

@include('partials.moviesList')

@endsection

<style>
    html,
    body {
        height: 100vh;
    }

    header {
        height: 142px;
    }

    footer {
        height: 100px;
    }

    .main-content {
        height: calc(100vh - 142px - 100px);
        overflow-y: auto;
    }
</style>
