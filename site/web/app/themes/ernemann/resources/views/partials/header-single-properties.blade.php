
        @if ( $gallery )
        <div class="single-gallery">
            @foreach( $gallery as $image )
            <img data-src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="lozad" />
            @endforeach
        </div>
        @endif
    <div class="header-footer w-full h-16 text-white">
        <p class="text-center text-4xl text-white opacity-100"><img data-src="{{ $header->arrow }}" class="lozad block w-8 m-auto mt-3"></p>
    </div>




