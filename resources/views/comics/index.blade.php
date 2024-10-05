@extends('layouts.app')

@section('content')
<div id="jumbotron">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">               

            </div>
        </div>
    </div>
</div>
     <div id="comics-container">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                <div class="col-12 col-md-6 col-lg-2">
                    <a class="text-white text-decoration-none" href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                        <div class="comic">
                        <div class="thumb">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <h4 class="text-uppercase">{{ $comic['title'] }}</h4>
                    </div>
                    </a>
                    
                </div>
                @endforeach
            </div>
            <div class="row">

            </div>
        </div>
        </div>  


@endsection