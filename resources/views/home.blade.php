@extends('layout.layout')

@section('title', 'Film')

@section('content')

<div class="container py-3">

    <div class="row g-5">

        @foreach ($movies as $key => $movie)

        <div class="col-4 card">
            <div class="card-body">
                <h5 class="card-title">{{ $movie -> title }}</h5>
                <p class="card-text">{{ $movie -> original_title }}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nationality: {{ $movie -> nationality }}</li>
                <li class="list-group-item">Date: {{ $movie -> date }}</li>
                <li class="list-group-item">Vote: {{ $movie -> vote }}</li>
            </ul>
            <div class="card-body">
                <a href="{{ route('show', ['id' => $key + 1]) }}" class="card-link">Go to the page</a>
            </div>
        </div>

        @endforeach

    </div>

</div>



@endsection
