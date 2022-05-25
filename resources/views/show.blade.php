@extends('layout.layout')

@section('title', 'Singolo film')

@section('content')
<div class="w-50 m-auto">
    <div class="card text-center">
        <div class="card-header">
            {{ $movie -> date }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $movie -> title }}</h5>
            <p class="card-text">{{ $movie -> original_title }}</p>
            <a href="{{ route('home') }}" class="btn btn-primary">Go back</a>
        </div>
        <div class="card-footer text-muted">
            Vote: {{ $movie -> vote }}
        </div>
    </div>
</div>
@endsection
