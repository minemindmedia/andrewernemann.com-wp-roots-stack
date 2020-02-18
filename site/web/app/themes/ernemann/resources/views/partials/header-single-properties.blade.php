
        @if ( $gallery )
        <div class="single-gallery">
            @foreach( $gallery as $image )
            <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" />
            @endforeach
        </div>
        @endif
    <div class="header-footer w-full h-16 text-white">
        <p class="text-center text-4xl text-white opacity-100"><img src="{{ $header->arrow }}" class="block w-8 m-auto mt-3"></p>
    </div>




