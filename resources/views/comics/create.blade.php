@extends('layouts.main')

@section('title', 'Aggiungi Comic')

@section('main-content')

    <main class="p-5">

        <div class="row text-white">
            <div class="col-12 text-center mb-3">
                <h1>Aggiungi un Comic</h1>
            </div>
            <div class="col-6 offset-3">
                <form action="{{route('comics.store')}} " method="POST">
                @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Titolo">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descrizione"></textarea>                    
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">URL Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="URL">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Prezzo" value="0">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" placeholder="Serie">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di emissione</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_data" placeholder="Data di emissione">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Genere</label>
                        <input type="text" class="form-control" id="type" name="type" placeholder="Genere">
                    </div>
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-success" href="{{route('comics.index')}} ">Torna alla lista</a>
                        <button type="submit" class="btn btn-primary">Aggiungi</button>
                    </div>
                </form>
            </div>
        </div>
 </main>

@endsection

@section('navbar-content')
<div class="navbar">
    <div class="container">
        @foreach($navbar_links as $navbar_link)
        <div class="link-card">
            <figure>
                <a href=""><img src="{{ asset($navbar_link['url']) }}" alt="{{ $navbar_link['text'] }}"></a>
            </figure>
            <figcaption>{{ $navbar_link['text'] }}</figcaption>
        </div>
        @endforeach
    </div>
</div>   
@endsection