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
