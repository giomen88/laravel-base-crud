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
                            <h5> {{$comic['series']}} </h5>
                            <h5> {{ucfirst($comic['type'])}} </h5>
                            <h5> {{$comic['sale_date']}} </h5>
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
                            <div>
                                <button type="submit" class="btn btn-danger">Cancella</button>
                            </div>
                        </form>
                        <a class="btn btn-success ms-2" href="{{route('comics.index')}} ">Torna alla lista</a>        
                    </div>
                </div>
            </div>
        </div>
                
    </section>
@endsection