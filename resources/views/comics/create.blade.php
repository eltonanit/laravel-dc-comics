@extends('layouts.app')

@section('content')
<div class="p-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    <div class="row gy-3">
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="title" class="control-label">Titolo:</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Titolo">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="thumb" class="control-label">Immagine:</label>
                            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Immagine">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="series" class="control-label">Serie:</label>
                            <input type="text" name="series" id="series" class="form-control" placeholder="Serie">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="price" class="control-label">Prezzo:</label>
                            <input type="text" name="price" id="price" class="form-control" placeholder="Prezzo">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="sale_date" class="control-label">Data di uscita:</label>
                            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Data di uscita">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <label for="type" class="control-label">Tipologia:</label>
                            <input type="text" name="type" id="type" class="form-control" placeholder="Tipologia">
                        </div>
                        <div class="col-12">
                            <label for="description" class="control-label">Descrizione:</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Descrizione"></textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="artists" class="control-label">Artisti:</label>
                            <textarea name="artists" id="artists" class="form-control" placeholder="Artisti"></textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="writers" class="control-label">Scrittori:</label>
                            <textarea name="writers" id="writers" class="form-control" placeholder="Scrittori"></textarea>
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