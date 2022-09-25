@extends('layouts.main')

@section('title', 'Modifica Comic')

@section('main-content')

@if ($errors->any())
    <div class="alert alert-danger" >
        <ul>
            @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif

    <main class="p-5">

        <div class="row text-white">
            <div class="col-12 text-center mb-3">
                <h1>Modifica un Comic</h1>
            </div>
            <div class="col-6 offset-3">
                <form action="{{route('comics.update', $comic)}} " method="POST">

                @csrf
                @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Titolo" value=" {{$comic['title']}} ">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descrizione"> {{$comic['description']}} </textarea>                    
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">URL Immagine</label>
                        <input type="url" class="form-control" id="thumb" name="thumb" placeholder="URL" value=" {{$comic['thumb']}} ">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Prezzo" value=" {{$comic['price']}} ">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" placeholder="Serie" value=" {{$comic['series']}} ">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_data" placeholder="Data di uscita" value=" {{$comic['sale_date']}} ">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Genere</label>
                        <input type="text" class="form-control" id="type" name="type" placeholder="Genere" value=" {{$comic['type']}} ">
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Modifica</button>
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