@include('partials.buy-now-modal')
<article @php post_class() @endphp>
  <header class="p-8 md:p-16 text-center text-primary">
    <div class="w-full lg:mb-0 px-4 lg:px-8 py-8 lg:py-32  border border-quarternary">
      @if ($property_details->address)
        <h1 class="w-full uppercase text-primary text-lg lg:text-3xl mb-6">
          @if ($property_details->address)
            <span class="block lg:inline-block">
              {{ $property_details->address }}
            </span>
          @endif
          @if ($property_details->city)
            <span class="lg:border-l-3 lg:border-primary lg:pl-5 lg:ml-4 block lg:inline-block">
              {{ $property_details->city }}
            </span>
          @endif
          @if ($property_details->neighborhood)
            <span class="lg:border-l-3 lg:border-primary lg:pl-5 lg:ml-4 block lg:inline-block">
              {{ $property_details->neighborhood }}
            </span>
          @endif
        </h1>
      @endif
      @if ($property_price->price)
        <h2 class="text-lg lg:text-3xl">
          <span>$</span>{{ $property_price->price }}
        </h2>
      @endif
      <div class="flex flex-wrap justify-center w-4/5 lg:w-3/5 ml-auto mr-auto mt-16">
        @if ($property_details->bedrooms)
          <div class="w-3/4 lg:flex-1 p-0 mx-5 pb-8 lg:pb-0">
            <p class="uppercase text-primary mb-2 font-medium">Bedrooms:</p>
            <div class="border border-quarternary p-3 text-xl ">
              {{ $property_details->bedrooms }} 
            </div>  
          </div>
        @endif
        @if ($property_details->bathrooms)
          <div class="w-3/4 lg:flex-1 p-0 mx-5 pb-8 lg:pb-0 ">
            <p class="uppercase text-primary mb-2 font-medium">Bathrooms:</p>
            <div class="border border-quarternary p-3 text-xl ">
              {{ $property_details->bathrooms }} 
            </div>  
          </div>
        @endif
        @if ($property_details->sqft)
          <div class="w-3/4 lg:flex-1 p-0 mx-5 pb-8 lg:pb-0 ">
            <p class="uppercase text-primary mb-2 font-medium">Square Feet:</p>
            <div class="border border-quarternary p-3 text-xl ">
              {{ $property_details->sqft }} 
            </div>  
          </div>
        @endif
        @if ($property_details->acres)
          <div class="w-3/4 lg:flex-1 p-0 mx-5 pb-8 lg:pb-0 ">
            <p class="uppercase text-primary mb-2 font-medium">Acres:</p>
            <div class="border border-quarternary p-3 text-xl ">
              {{ $property_details->acres }} 
            </div>  
          </div>
        @endif
        @if ($property_details->lot)
          <div class="w-3/4 lg:flex-1 p-0 mx-5 pb-8 lg:pb-0 ">
            <p class="uppercase text-primary mb-2 font-medium">Lot Size:</p>
            <div class="border border-quarternary p-3 text-xl ">
              {{ $property_details->lot }} 
            </div>  
          </div>
        @endif
      </div>
      @if ($property_details->description)
      <p class="w-4/5 mx-auto mt-4 lg:mt-16 text-base text-lg sm:text-xl lg:text-2xl leading-normal">
        {{ $property_details->description }} 
      </p>
      @endif
    </div>
  </header>
  
  @if ( $youtube->id )
  <div class="w-full">
    <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/{{ $youtube->id }}' frameborder='0' allowfullscreen></iframe></div>
  </div>
  @endif
  
  <div class="text-white uppercase no-underline mt-0 py-0 w-screen h-full bg-cover bg-bottom lozad" data-background-image="{!! $documents_background->bkg !!}">
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
                <a href="{{ $specifications }}" class="w-3/4 sm:w-1/2 lg:w-1/6 border border-white m-2 text-white p-4 no-underline font-medium tracking-wider">Specifications</a>
              @elseif ($type == 'floor_plans')
                <a href="{{ $floor_plans }}" class="w-3/4 sm:w-1/2 lg:w-1/6 border border-white m-2 text-white p-4 no-underline font-medium tracking-wider">Floor Plans</a>
              @elseif ($type == 'survey')
                <a href="{{ $survey }}" class="w-3/4 sm:w-1/2 lg:w-1/6 border border-white m-2 text-white p-4 no-underline font-medium tracking-wider">Survey</a>
              @elseif ($type == 'land_use')
                <a href="{{ $land_use }}" class="w-3/4 sm:w-1/2 lg:w-1/6 border border-white m-2 text-white p-4 no-underline font-medium tracking-wider">Land Use </a>
              @elseif ($type == 'gis_map')
                <a href="{{ $gis_map }}" class="w-3/4 sm:w-1/2 lg:w-1/6 border border-white m-2 text-white p-4 no-underline font-medium tracking-wider">GIS Map</a>
              @elseif ($type == 'parcel_report')
                <a href="{{ $parcel_report }}" class="w-3/4 sm:w-1/2 lg:w-1/6 border border-white m-2 text-white p-4 no-underline font-medium tracking-wider">Parcel Report</a>
              @elseif ($type == 'other')  
                <a href="{{ $other }}" class="w-3/4 sm:w-1/2 lg:w-1/6 border border-white m-2 text-white p-4 no-underline font-medium tracking-wider">{{ $document_title }}</a>
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

  @if ( $tour->embed )
  <div class="w-full">
    {!! $tour->embed !!}
  </div>
  @endif

  <div class="lg:flex p-8 md:p-16 text-center text-primary bg-grey-lightest">
    <div class="w-full px-4 md:px-8 py-8 lg:py-32 border border-quarternary border-white">
      <div class="w-4/5 mx-auto">
        <a href="" class="buyModal_open buy-open inline-block text-lg sm:text-4xl font-normal no-underline text-red px-16 py-8 border border-quarternary border-red capitalize mb-12">{{ $buy_now->heading }}</a>
        <p class="text-center text-lg lg:text-2xl capitalize leading-normal">{!! $buy_now->content !!}</p> 
      </div>
    </div>
  </div>
  <div id="buyModal" class="siteModal buyModal h-full w-full text-white overflow-y-scroll">
        <a href="#" class="buyModal_close siteModalClose"><img data-src="{{ $header->close }}" class="lozad block w-16 cursor-pointer"></a>
        <div class="w-2/5 mx-auto mt-48 mb-16 ">
          <div class="px-24 py-16 border border-tertiary uppercase font-normal">
            <p class="text-center text-2xl font-bold mb-12">Buy it now!</p>
            {!! do_shortcode('[ninja_form id=3]') !!}
          </div>
        </div>
    </div>




  <div class="p-8 md:p-16 text-primary bg-white">
    <div class="xl:flex w-full px-4 md:px-16 py-8 lg:py-16 border border-quarternary">
      <div class="xl:w-1/2 text-center">
        <div class="flex content-center flex-wrap h-full">
          <h2 class="w-full uppercase text-lg lg:text-3xl mb-8 mx-auto">
            @if ( $schedule->heading )
              {{ $schedule->heading }}
            @else
              Schedule a showing
            @endif
            </h2>  
          <p class="w-2/3 mx-auto text-lg lg:text-2xl leading-normal mb-8 xl:mb-0">
            @if ( $schedule->content )
            {!! $schedule->content !!}
            @else
            Please use this form to schedule a showing. Include a specific date and time that you would like to see this property.
            @endif
            </p>
        </div>
      </div>
      <div class="xl:w-1/2">
      {!! do_shortcode('[ninja_form id=2]') !!}
      </div>
    </div>
  </div>


  <div class="lg:flex text-center text-primary mb-16">
    <div class="lg:w-1/2 lozad" data-background-image={!! $location->bkg !!}">
      <div class="h-full bg-ae-green-bg">
        <div class="w-full p-8 lg:p-16  ">
          <div class="border border-quarternary text-white p-8 lg:p-20">
          <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $location->heading }}</h2>
          <p class="text-md md:text-2xl mb-8 leading-normal">{{ $property_details->address }} <br> {{ $property_details->city }}, {{ $property_details->state }} {{ $property_details->zip }}</p>
          <a href="{{ $location->link }}">
            <button class="directionsModal_open py-3 px-8 border border-white uppercase text-lg text-white">Directions</button>
          </a>
        </div>
      </div>  
    </div>
  </div>

    <div id="directionsModal" class="siteModal teamModal h-full w-full text-white overflow-y-scroll">
        <a href="#" class="directionsModal_close siteModalClose"><img data-src="@asset('images/close-dark.svg')" class="lozad block w-16 cursor-pointer"></a>
        <div class="lg:w-3/4 mx-8 lg:mx-auto mt-24 lg:mt-16 mb-16 ">
            <div class="lg:flex text-2xl leading-normal text-primary">
                <div class="w-1/2 mx-auto">
                  {{ $location->directions }}
                </div>
            </div>
            <a href="#" class="directionsModal_close float-right m-8 uppercase no-underline text-primary" style="color:#ed4e2e;">Close</a>
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
