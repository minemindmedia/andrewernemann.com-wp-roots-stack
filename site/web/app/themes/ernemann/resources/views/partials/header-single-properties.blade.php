<div class="relative">
    <div class="absolute w-full z-40">
        @include('partials.header-nav')
    </div>
        @if ( $gallery )
        <div class="single-gallery">
            @foreach( $gallery as $image )
            <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="h-screen" />
            @endforeach
        </div>
        @endif
    <div class="header-footer w-full h-16 text-white">
        <p class="text-center text-4xl text-white opacity-100"><img src="{{ $header->arrow }}" class="block w-8 m-auto mt-3"></p>
    </div>
</div>