<header>
    <nav>
        <div class="container">
            <div class="logo"><a href=""><img src="{{ asset('images/dc-logo.png')}}" alt=""></a></div>
            <div class="links">
                <ul>
                    {{-- @foreach($header_links as $index=>$header_link) --}}
                    <li class="{{Route::is('comics.index') ? 'active' : '' }}" ><a href= " {{ route('comics.index')}} ">Comics</a></li>
                    <li class="{{Route::is('comics.create') ? 'active' : '' }}" ><a href= " {{ route('comics.create')}} ">Aggiungi un Comic</a></li>
                    {{-- @endforeach --}}
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron"></div>
</header>

{{-- {{route(strtolower($header_link['text']))}} --}}
