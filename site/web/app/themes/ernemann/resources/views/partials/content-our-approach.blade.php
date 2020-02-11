@if( have_rows('flexible_content') )
    @while ( have_rows('flexible_content') ) @php the_row() @endphp
        @if( get_row_layout() == '1_up_full_width' )
            @php 
            $heading = get_sub_field('heading');
            $subheading = get_sub_field('subheading');
            $content = get_sub_field('content');
            $btntxt = get_sub_field('button_text');
            $btnurl = get_sub_field('button_url');
            $bg = get_sub_field('background');
            $bgc = get_sub_field('background_color');
            $bgi = get_sub_field('background_image');
            $fgc = get_sub_field('foreground_color');
            $li = get_sub_field('logo_icon');
            @endphp

            <div class="mt-0 py-0 w-screen h-full bg-cover bg-bottom" style="@if ( $bg == "color" ) background: {{ $bgc }} @else background: url( '{{ $bgi }}' ) @endif">
                @if ( $bg == "image" )
                <div class="h-full bg-ae-green-bg">
                @endif
                    <div class="flex"> 
                        <div class="w-full m-8 md:m-16 p-8 md:p-16 border text-center @if ( $fgc == "dark") border-primary text-primary @else border-white text-white @endif">
                            @if ( $heading )<h2 class="uppercase text-3xl mb-6">{{ $heading }}</h2>@endif
                            @if ( $subheading )<p class="text-md md:text-2xl mb-8 lg:mx-64">{{ $subheading }}</p>@endif
                            @if ( $content )<p class="text-md md:text-2xl mb-8 lg:mx-64">{{ $content }}</p>@endif
                            @if ( $btntxt )
                                <a href="{{ $btnurl }}">
                                <button class="py-3 px-8 mb-8 border bg-transparent uppercase text-lg @if ( $fgc == "dark") border-primary text-primary @else border-white text-white @endif">{{ $btntxt }}</button> 
                                </a>
                            @endif
                            @if ( $li )
                            <div class="py-2 px-4"><img src="{{ $li ['url'] }}" alt="{{ $li ['alt'] }}" class="h-16"></div>
                            @endif

                        </div>
                    </div>
                @if ( $bg == "image" )
                </div>
                @endif
            </div>

        @elseif( get_row_layout() == '2_up_full_width' ) 
            @php 
            $heading = get_sub_field('heading');
            $subheading = get_sub_field('subheading');
            $content = get_sub_field('content');
            $btntxt = get_sub_field('button_text');
            $btnurl = get_sub_field('button_url');
            $usethumb = get_sub_field('add_thumbnail_image');
            $thumb = get_sub_field('thumbnail');
            $heading_2 = get_sub_field('heading_2');
            $subheading_2 = get_sub_field('subheading_2');
            $content_2 = get_sub_field('content_2');
            $btntxt_2 = get_sub_field('button_text_2');
            $btnurl_2 = get_sub_field('button_url_2');
            $usethumb_2 = get_sub_field('add_thumbnail_image_2');
            $thumb_2 = get_sub_field('thumbnail_2');
            @endphp

            <div class="lg:flex p-8 md:p-16 text-center text-grey">
                <div class="lg:flex w-full lg:ml-8 px-4 md:px-8 py-8 lg:py-16 border border-solid">
                    @if ( $thumb )
                    <div class="w-full lg:w-1/2">
                        <img src="{{ $thumb ['url'] }}" alt="{{ $thumb ['alt'] }}" class="px-8 pb-8 lg:pb-0">
                    </div>
                    @endif
                    <div class="w-full @if ( $thumb ) lg:w-1/2 @endif">
                        @if ( $heading )<h2 class="uppercase text-xl md:text-3xl mb-6">{{ $heading }}</h2>@endif
                        @if ( $subheading )<p class="text-md md:text-2xl mb-8">{{ $subheading }}</p>@endif
                        @if ( $content )<p class="text-md md:text-2xl mb-8">{{ $content }}</p>@endif
                        @if ( $btntxt )
                            <a href="{{ $btnurl }}">
                            <button class="bg-white py-3 px-8 border border-grey-light hover:border-transparent uppercase text-lg">{{ $btntxt }}</button>
                            </a>
                        @endif
                    </div>
                    </div>
                    <div class="lg:flex w-full lg:ml-8 px-4 md:px-8 py-8 lg:py-16 border border-solid">
                    @if ( $thumb_2 )
                    <div class="w-full @if ( $thumb_2 ) lg:w-1/2 @endif">
                        <img src="{{ $thumb_2 ['url'] }}" alt="{{ $thumb_2 ['alt'] }}" class="px-8 pb-8 lg:pb-0">
                    </div>
                    @endif
                    <div class="w-full lg:w-1/2">
                        @if ( $heading_2 )<h2 class="uppercase text-xl md:text-3xl mb-6">{{ $heading_2 }}</h2>@endif
                        @if ( $subheading_2 )<p class="text-md md:text-2xl mb-8">{{ $subheading_2 }}</p>@endif
                        @if ( $content_2 )<p class="text-md md:text-2xl mb-8">{{ $content_2 }}</p>@endif
                        @if ( $btntxt_2 )
                        <a href="{{ $btnurl_2 }}">
                        <button class="bg-white py-3 px-8 border border-grey-light hover:border-transparent uppercase text-lg">{{ $btntxt_2 }}</button>
                        </a>
                        @endif
                    </div>
                </div>
            </div>

        @endif

    @endwhile

@else
    <p>Admin, you need to add some content blocks!</p>
@endif