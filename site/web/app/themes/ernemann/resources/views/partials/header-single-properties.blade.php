@if ( $gallery )

<div class="single-gallery relative" style="background-image: url(' {{ $gallery_poster }} ')">
    <div class="overlay">
        <div class="sp-gallery">
            @foreach( $gallery as $image )
            <img data-src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="lozad block max-h-screen w-auto mx-auto"/>
            @endforeach
        </div>
        <div class="header-footer w-full h-16 text-white">
            <button class="prev float-left h-12 w-12 mt-2 ml-16"><img src="@asset('images/gallery-prev.svg')"></button>
            <button class="next float-right h-12 w-12 mt-2 mr-16"><img src="@asset('images/gallery-next.svg')"></button>
        </div>
    </div>
</div>

@endif