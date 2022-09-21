@extends('layouts.main')

@section('title', 'Comics')

@section ('main-content')

<main>
    <div id="content">
        <div class="container"> 
            @foreach($comics as $comic)
            <div class="comic-card">
                <a href="#">
                {{-- <a href=" {{route('comics.show', ['id' => $loop->index])}} "> --}}
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
                <h1>{{ $comic['title'] }}</h1>
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
