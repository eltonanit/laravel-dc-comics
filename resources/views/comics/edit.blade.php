@extends('layouts.app')

@section('content')
<div class="p-4">
    <div class="container">
        <div class="row">
             @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled m-0">
                    @foreach ($errors->all() as $error)
                    <li> {{ $error }}</li>
                    @endforeach

                </ul>
            </div>
            @endif
            <div class="col-12">
                <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row gy-3">
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="title" class="control-label">Titolo:</label>
                            <input type="text" name="title" id="title" class="form-control" 
                            placeholder="Titolo" value="{{ $comic->title }}">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="thumb" class="control-label">Immagine:</label>
                            <input type="text" name="thumb" id="thumb" class="form-control" 
                            placeholder="Immagine" value="{{ $comic->thumb }}">
                        </div>                        
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="price" class="control-label">Prezzo:</label>
                            <input type="text" name="price" id="price" class="form-control" 
                            placeholder="Prezzo" value="{{ $comic->price }}">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="sale_date" class="control-label">Data di uscita:</label>
                            <input type="text" name="sale_date" id="sale_date" class="form-control" 
                            placeholder="Data di uscita" value="{{ $comic->sale_date }}">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="type" class="control-label">Tipologia:</label>
                            <input type="text" name="type" id="type" class="form-control" 
                            placeholder="Tipologia" value="{{ $comic->type }}">
                        </div>
                        <div class="col-12">
                            <label for="description" class="control-label">Descrizione:</label>
                            <textarea name="description" id="description" class="form-control" 
                            placeholder="Descrizione" value="{{ $comic->description }}"></textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="artists" class="control-label">Artisti:</label>
                            <textarea name="artists" id="artists" class="form-control" 
                            placeholder="Artisti" value="{{ $comic->artist }}"></textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="writers" class="control-label">Scrittori:</label>
                            <textarea name="writers" id="writers" class="form-control" 
                            placeholder="Scrittori" value="{{ $comic->writers}}"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-success">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection