@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid">
        </div>
        <div class="col-12 col-md-6 col-lg-8">
            <div class="d-flex align-items-center">
                <h1>
                    {{ $comic['title'] }}
                </h1>
                <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-sm btn-warning">
                   EDIT
                </a>
                <form action="{{ route('comics.destroy', ['comic' => $comic->id] ) }}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ms-3"
                            onclick="return confirm(' PENSACI, vuoi davvero cancellarlo ?')">DELETE</button>
                </form>

            </div>
            <h3>{{ $comic['series'] }}</h3>
            <p><sub>{{ $comic['type'] }}</sub></p>
            <p>{{ $comic['description'] }}</p>
            <h4><strong>{{ $comic['price'] }}</strong></h4>
            <p>{{ $comic['sale_date'] }}</p>
            <p><strong>Artists: </strong>{{ $comic['artists'] }}</p>
            <p><strong>Writers: </strong>{{ $comic['writers'] }}</p>
        </div>
    </div>
</div>
@endsection