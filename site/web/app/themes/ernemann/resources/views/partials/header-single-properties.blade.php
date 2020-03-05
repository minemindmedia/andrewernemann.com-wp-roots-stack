@if ( $gallery )

<div class="relative">
    
        <div class="center bg-black">
            @foreach( $gallery as $image )
            <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}"/>
            @endforeach
            <div class="header-footer w-full h-16 text-white z-50">
            </div>
        </div>

    
</div>

@endif
