@extends('layouts.main')

@section('main-content')
    <section id="comic">

        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-7 d-flex">
                        <div class="text">
                            <h1>{{$comic['title']}}</h1>
                            <div class="details rounded">
                                <div class="price">PRICE: {{$comic['price']}}</div>

                                <div class="availability">AVAILABLE</div>
                                        
                                <div class="check">Check Availability</div>
                            </div>

                            <div class="description">
                                {{$comic['description']}}
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <figure>
                            <strong>ADVERTISEMENT</strong>
                            <img src="{{$comic['thumb']}}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="div.col-12 text-end">
                    <a class="btn btn-primary" href=" {{route('comics.edit', $comic)}} ">Modifica</a>
                </div>
            </div>
        </div>
                
    </section>
@endsection