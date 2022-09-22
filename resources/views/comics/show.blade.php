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
                                <div class="price">PRICE: <strong>€ {{$comic['price']}}</strong> </div>

                                <div class="availability">AVAILABLE</div>
                            </div>

                            <p class="description mt-4">{{$comic['description']}}</p>
                            <h4> {{$comic['series']}} </h4>
                            <h4> {{ucfirst($comic['type'])}} </h4>
                            <h4> {{$comic['sale_date']}} </h4>
                        </div>
                    </div>
                    <div class="col-5 d-flex flex-column text-center">
                            <strong class="text-end">ADVERTISEMENT</strong>
                            <img src="{{$comic['thumb']}}" alt="" class="mb-3">
                    </div>
                
                    <div class="div.col-12 d-flex mt-2">
                        <a class="btn btn-primary me-2" href=" {{route('comics.edit', $comic)}} ">Modifica</a>
                        <form action="{{route('comics.destroy', $comic)}} " method="POST">  
                        @csrf
                        @method('delete')
                            <div class="text-end">
                                <button type="submit" class="btn btn-danger">Cancella</button>
                            </div>
                        </form>        
                    </div>
                </div>
            </div>
        </div>
                
    </section>
@endsection