@extends('layouts.main')

@section('title', 'Comics')

@section ('main-content')

<main>
    <div id="content">
        <div class="container"> 
            @foreach($comics as $comic)
            <div class="comic-card text-center bg-white rounded d-flex flex-column justify-content-between py-2">
                <a href=" {{route('comics.show', $comic->id)}} ">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
                <h6 class="mb-4">{{ $comic['title'] }}</h6>
                <p> {{ $comic['series'] }} </p>
                {{-- <p> {{ ucfirst($comic['type']) }} </p>
                <p> {{ $comic['sale_date'] }} </p>
                <p> € {{ $comic['price'] }} </p> --}}
                </a>
            </div>
            @endforeach
        </div>
    </div>    
</main>

@endsection

@section ('navbar-content')

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
