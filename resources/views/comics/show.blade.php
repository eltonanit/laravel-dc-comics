@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">[]
            <div class="col-12 col-md-6 col-lg-4">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid">
            </div>
            <div class="col-6 col-md-6 col-lg-8">
                <h1>{{ $comic['title'] }}</h1>
                <p><sub>{{ $comic['type'] }}</sub></p>
                <p>{{ $comic['description'] }}</p>
                <h4><strong>{{ $comic['price'] }}</strong></h4>
                <p>{{ $comic['sale_date'] }}</p>
                <p><strong>Artist:</strong> {{ $comic['artist'] }}</p>
                <p><strong>Writers:</strong>{{ $comic['writers'] }}</p>
            </div>
        </div>
    </div>
@endsection