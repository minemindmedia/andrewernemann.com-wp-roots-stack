@include('partials.buy-now-modal')
<article @php post_class() @endphp>
  <header class="p-8 md:p-16 text-center text-grey">
    <div class="w-full lg:mb-0 px-4 lg:px-8 py-8 lg:py-32  border border-solid">
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
        <h2 class="text-xl lg:text-3xl">
          <span>$</span>{{ $property_price->price }}
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
      <p class="w-4/5 mx-auto mt-4 lg:mt-16 text-base text-xl sm:text-xl lg:text-2xl leading-normal">
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
          @endif
        </div>
        </div>
      </div>
    </div>
  </div>
  <div class="lg:flex p-8 md:p-16 text-center text-grey bg-grey-lightest">
    <div class="w-full px-4 md:px-8 py-8 lg:py-32 border border-solid border-white">
      <div class="w-4/5 mx-auto">
        <a href="" class="buyModal_open buy-open inline-block text-lg sm:text-4xl font-normal no-underline text-red px-16 py-8 border border-solid border-red capitalize mb-12">{{ $buy_now->heading }}</a>
        <p class="text-center text-xl lg:text-2xl capitalize leading-normal">{!! $buy_now->content !!}</p> 
      </div>
    </div>
  </div>
  <div id="buyModal" class="siteModal buyModal h-full w-full text-white overflow-y-scroll">
        <a href="#" class="buyModal_close siteModalClose"><img src="{{ $header->close }}" class="block w-16 cursor-pointer"></a>
        <div class="w-2/5 mx-auto mt-48 mb-16 ">
          <div class="px-24 py-16 border border-tertiary uppercase font-normal">
            <p class="text-center text-2xl font-bold mb-8">Buy it now!</p>
            {!! do_shortcode('[ninja_form id=3]') !!}
          </div>
        </div>
    </div>
  <div class="p-8 md:p-16 text-grey bg-white">
    <div class="xl:flex w-full px-4 md:px-16 py-8 lg:py-16 border border-solid">
      <div class="xl:w-1/2 text-center">
      <h2 class="uppercase text-xl lg:text-3xl mb-8">{{ $schedule->heading }}</h2>  
      <p class="w-2/3 mx-auto text-lg lg:text-2xl leading-normal mb-8 xl:mb-0">{{ $schedule->content }}</p>
      </div>
      <div class="xl:w-1/2">
      {!! do_shortcode('[ninja_form id=2]') !!}
      </div>
    </div>
  </div>
  <div class="lg:flex text-center text-grey mb-16">
    <div class="lg:w-1/2" style="background-image: url('{!! $location->bkg !!}')">
      <div class="h-full bg-ae-green-bg">
      <div class="w-full p-16  ">
        <div class="border border-solid text-white p-20">
        <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $location->heading }}</h2>
        <p class="text-md md:text-2xl mb-8 leading-normal">{{ $property_details->address }} <br> {{ $property_details->city }}, {{ $property_details->state }} {{ $property_details->zip }}</p>
        <a href="{{ $location->link }}">
          <button class=" py-3 px-8 border border-white uppercase text-lg text-white">Directions</button>
        </a>
      </div>
      </div>  
      </div>
    </div>
    <div class="lg:w-1/2">
      @php $location = ($location->map) @endphp
      @if( $location )
        <div class="acf-map" data-zoom="16">
            <div class="marker" data-lat="{{ $location['lat'] }}" data-lng="{{ $location['lng'] }}"></div>
        </div>
      @endif
    </div>
  </div>
</article>
