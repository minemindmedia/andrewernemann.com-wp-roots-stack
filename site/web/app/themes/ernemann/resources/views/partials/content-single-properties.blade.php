  <article @php post_class() @endphp>
  <header class="p-8 md:p-16 text-center text-grey">
    <div class="w-full mb-8 lg:mb-0 px-4 lg:px-8 py-8 lg:py-32  border border-solid">
      @if ($property_details->address)
        <h1 class="w-full uppercase text-grey text-xl lg:text-3xl mb-6">
          @if ($property_details->address)
            <span class="block lg:inline-block">
              {{ $property_details->address }}
            </span>
          @endif
          @if ($property_details->city)
            <span class="lg:border-l-3 lg:border-grey lg:pl-5 lg:ml-4 block lg:inline-block">
              {{ $property_details->city }}
            </span>
          @endif
          @if ($property_details->neighborhood)
            <span class="lg:border-l-3 lg:border-grey lg:pl-5 lg:ml-4 block lg:inline-block">
              {{ $property_details->neighborhood }}
            </span>
          @endif
        </h1>
      @endif
      @if ($property_price->price)
        <h2>
          ${{ $property_price->price }}
        </h2>
      @endif
      <div class="flex flex-wrap justify-center w-4/5 lg:w-3/5 ml-auto mr-auto mt-16">
        @if ($property_details->bedrooms)
          <div class="w-3/4 lg:flex-1 p-0 mx-5 pb-8 lg:pb-0">
            <p class="uppercase text-grey mb-2 font-medium">Bedrooms:</p>
            <div class="border border-solid p-3 text-xl ">
              {{ $property_details->bedrooms }} 
            </div>  
          </div>
        @endif
        @if ($property_details->bathrooms)
          <div class="w-3/4 lg:flex-1 p-0 mx-5 pb-8 lg:pb-0 ">
            <p class="uppercase text-grey mb-2 font-medium">Bathrooms:</p>
            <div class="border border-solid p-3 text-xl ">
              {{ $property_details->bathrooms }} 
            </div>  
          </div>
        @endif
        @if ($property_details->sqft)
          <div class="w-3/4 lg:flex-1 p-0 mx-5 pb-8 lg:pb-0 ">
            <p class="uppercase text-grey mb-2 font-medium">Square Feet:</p>
            <div class="border border-solid p-3 text-xl ">
              {{ $property_details->sqft }} 
            </div>  
          </div>
        @endif
        @if ($property_details->acres)
          <div class="w-3/4 lg:flex-1 p-0 mx-5 pb-8 lg:pb-0 ">
            <p class="uppercase text-grey mb-2 font-medium">Acres:</p>
            <div class="border border-solid p-3 text-xl ">
              {{ $property_details->acres }} 
            </div>  
          </div>
        @endif
        @if ($property_details->lot)
          <div class="w-3/4 lg:flex-1 p-0 mx-5 pb-8 lg:pb-0 ">
            <p class="uppercase text-grey mb-2 font-medium">Lot Size:</p>
            <div class="border border-solid p-3 text-xl ">
              {{ $property_details->lot }} 
            </div>  
          </div>
        @endif
      </div>
      @if ($property_details->description)
      <p class="w-4/5 mx-auto mt-16 text-base sm:text-2xl lg:text-2xl leading-normal">
        {{ $property_details->description }} 
      </p>
      @endif
    </div>
  </header>
  <div class="w-full">
    @if ( $video_slideshow->video_slideshow == "video")
    <video id="video-player"
      class="video-js vjs-default-skin vjs-big-play-centered" 
      controls
      preload="auto"
      width="640"
      height="264"
      poster="{{ $video_slideshow->poster }}"
      data-setup='{"fluid": true}'>
      <source src="{{ $video_slideshow->mp4 }}" type='video/mp4' />
      <source src="{{ $video_slideshow->webm }}" type='video/webm' />
    </video>
    @else 
    <div class="single-gallery_two">
        @foreach( $video_slideshow->slideshow as $image )
        <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="h-screen" />
        @endforeach
    </div>
    @endif
  </div>
  <div class="text-white uppercase no-underline mt-0 py-0 w-screen h-full bg-cover bg-bottom" style="background-image: url('{!! $documents_background->bkg !!}')">
    <div class="h-full bg-ae-green-bg">
      <div class="flex">
        <div class="w-full m-8 md:m-16 p-8 md:p-16 border border-white text-center">
          <h2 class="uppercase text-lg sm:text-3xl mb-12">{{ $documents_heading->heading }}</h2>
          @if( have_rows('documents') )
          <div class="flex flex-wrap justify-center w-11/12 mx-auto">
            @while ( have_rows('documents') )
              @php the_row();
                $type = get_sub_field('document_type');
                $specifications = get_sub_field('specifications');
                $floor_plans = get_sub_field('floor_plans');
                $survey = get_sub_field('survey');
                $land_use = get_sub_field('land_use');
                $gis_map = get_sub_field('gis_map');
                $parcel_report = get_sub_field('parcel_report');
                $document_title = get_sub_field('document_title');
                $other = get_sub_field('document_file');
              @endphp
              @if ($type == 'specifications')
                <a href="{{ $specifications }}" class="w-3/4 sm:w-1/2 lg:w-1/6 border border-white m-2 text-white p-4 no-underline">Specifications</a>
              @elseif ($type == 'floor_plans')
                <a href="{{ $floor_plans }}" class="w-3/4 sm:w-1/2 lg:w-1/6 border border-white m-2 text-white p-4 no-underline">Floor Plans</a>
              @elseif ($type == 'survey')
                <a href="{{ $survey }}" class="w-3/4 sm:w-1/2 lg:w-1/6 border border-white m-2 text-white p-4 no-underline">Survey</a>
              @elseif ($type == 'land_use')
                <a href="{{ $land_use }}" class="w-3/4 sm:w-1/2 lg:w-1/6 border border-white m-2 text-white p-4 no-underline">Land /U/s/e </a>
              @elseif ($type == 'gis_map')
                <a href="{{ $gis_map }}" class="w-3/4 sm:w-1/2 lg:w-1/6 border border-white m-2 text-white p-4 no-underline">GIS Map</a>
              @elseif ($type == 'parcel_report')
                <a href="{{ $parcel_report }}" class="w-3/4 sm:w-1/2 lg:w-1/6 border border-white m-2 text-white p-4 no-underline">Parcel Report</a>
              @elseif ($type == 'other')  
                <a href="{{ $other }}" class="w-3/4 sm:w-1/2 lg:w-1/6 border border-white m-2 text-white p-4 no-underline">{{ $document_title }}</a>
              @endif
            @endwhile
            @else
              <p class="text-center text-xlg">Sorry, there are no documents associated with this property.</p>
            </div>
          @endif

        </div>
      </div>
    </div>
  </div>


<div class="lg:flex p-8 md:p-16 text-center text-grey bg-grey-lightest">
  <div class="w-full px-4 md:px-8 py-8 lg:py-32 border border-solid border-white">
    <div class="press-slider w-4/5 mx-auto">
      <a href="" class="inline-block text-lg sm:text-4xl font-normal no-underline text-red px-16 py-8 border border-solid border-red capitalize mb-12">{{ $buy_now->heading }}</a>
      <p class="text-center text-2xl capitalize leading-normal">{!! $buy_now->content !!}</p> 
    </div>
  </div>
</div>




</article>