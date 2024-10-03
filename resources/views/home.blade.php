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
        <div class="col-12">
            SPAZIO FUMETTI
        </div>
        </div>
         
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-12 col-md-3 col-lg-2">
                <div class="comic-card border-0 m-1">
                    <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <div class="card-body">
                      <span clas="text-uppercase">  {{ $comic['title'] }} </span> 
                    </div>

                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>
    

@endsection