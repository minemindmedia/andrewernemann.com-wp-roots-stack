<div class="mt-0 py-0 w-screen h-full">
    <div class="flex">
        <div class="m-8 lg:m-16 mb-0 p-8 md:p-16 border border-quaternary text-center text-primary">
            <h2 class="uppercase text-xl lg:text-3xl mb-6">{{ $whyreport->heading }}</h2>
            <p class="lg:mx-48 text-md md:text-2xl mb-8 lg:mx-64 leading-normal">{!! $whyreport->content !!}</p>
            <a href="{{ $whyreport->button_link }}" target="_blank">
                <button class="bg-white py-3 px-8 border border-quaternary uppercase text-lg">{{ $whyreport->button_text }}</button>
            </a>
            <p class="lg:mx-48 text-md md:text-2xl mb-8 lg:mx-64 mt-8 leading-normal">{!! $whyreport->subcontent !!}</p>
        </div>
    </div>
</div>


<div class="flex content-center flex-wrap justify-center border border-quaternary m-8 lg:m-16 mt-8 lg:mt-0 p-8 text-center text-primary">
    

        <div class="w-full lg:w-3/5">
            <div class="w-full h-full">
                <div class="flex content-center flex-wrap justify-center h-full">
                    <h2 class="uppercase text-xl lg:text-3xl mb-4">{{ $whataride->heading }}</h2>
                    <p class="w-full text-md md:text-xl mb-4 leading-normal lg:px-16">— {!! $whataride->date !!} —</p>
                    <p class="text-md md:text-2xl mb-8 leading-normal lg:px-16">{!! $whataride->content !!}</p>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-2/5">
            <div class="flex w-full lg:ml-8 px-4 md:px-8 py-8 lg:py-16">
                <div class="w-1/2">
                    <img data-src="{{ $whataride->thumbnail['url'] }}" alt="{{ $whataride->thumbnail['alt'] }}" class="lozad">
                </div>
                <div class="w-1/2">
                    <div class="flex content-center flex-wrap justify-end lg:justify-center h-full">
                        <a class="mrModal_open block py-3 px-6 border border-quaternary uppercase text-lg font-medium text-primary tracking-wider">{!! $whataride->button_text !!}</a>
                    </div>
                </div>
            </div>
        </div>

    
</div>


@if( have_rows('reports') ) @php $k = 0; @endphp
<div class="lg:flex p-8 md:p-16 text-center text-grey bg-grey-lightest mb-16">
    <div class="w-full px-4 md:px-8 py-8 lg:py-16 border border-white">
      <div class="press-slider w-4/5 mx-auto">
        @while ( have_rows('reports') )
        @php the_row();
        $title = get_sub_field('title');
        $date = get_sub_field('date');
        $thumbnail = get_sub_field('cover_thumbnail');
        $pdf = get_sub_field('pdf');
        @endphp
        
          <div class="px-8">
              <img src="{{ $thumbnail['url'] }}" alt="{{ $thumbnail['alt'] }}" class="w-64">
            <p class="text-lg lg:text-2xl mt-6 uppercase mb-6 font-bold">{{ $title }}</p>
            <h3 class="text-md lg:text-2xl mb-8 font-normal">{{ $date }}</h3>
            <a href="{{ $pdf['url'] }}" target="_blank">
              <button class="py-3 px-2 border border-quaternary uppercase text-md font-medium text-primary tracking-wider px-12">Read it</button> 
            </a>
          </div>
        @endwhile
      </div>
    </div>
  </div>
  @endif

  