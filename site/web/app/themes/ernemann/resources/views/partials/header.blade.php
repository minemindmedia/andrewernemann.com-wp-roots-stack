@include('partials.header-nav')
  @if (is_singular('properties'))
  @include('partials.header-single-properties')
  @else
  @if (is_archive())
  <div class="text-white mt-0 py-0 w-full bg-cover h-screen lozad" data-background-image="{!! $headerhero_options->background !!}">
  @else
  <div class="text-white mt-0 py-0 w-full bg-cover h-screen lozad" data-background-image="{!! $headerhero->background !!}">
  @endif
  <div class="h-screen bg-ae-green-bg">
    <div class="flex content-center flex-wrap justify-center text-white text-center h-full">
      @if(is_front_page())
        <div class="block wx-auto border border-white">
          <img data-src="{{ $header->logo }}" class="lozad w-32 sm:w-48 md:w-64 lg:w-80 pt-1 md:pt-4 pr-1 md:pr-4 pb-0 md:pb-3 pl-1 md:pl-4">
        </div>
        <div class="w-full">
        <p class="w-1/2 mx-auto text-sm sm:text-xl md:text-5xl mt-4 md:mt-8 lg:mt-24">{!! $headerhero->subheading !!}</p>
        </div>
      @elseif(is_archive())
        <h2 class="w-auto font-normal text-lg md:text-4xl text-center border border-white px-2 lg:px-6 py-2 lg:py-12 ">
          {!! $headerhero_options->heading !!}
        </h2>
        <div class="w-full">
        <p class="w-1/2 mx-auto text-sm sm:text-xl md:text-3xl mt-4 md:mt-8 lg:mt-24">{!! $headerhero_options->subheading !!}</p>
      </div>
      @else
      <h2 class="w-auto font-normal text-lg md:text-4xl text-center border border-white px-2 lg:px-6 py-2 lg:py-12 ">
          {!! $headerhero->heading !!}
        </h2>
        <div class="w-full">
        <p class="w-1/2 mx-auto text-sm sm:text-xl md:text-3xl mt-4 md:mt-8 lg:mt-24">{!! $headerhero->subheading !!}</p>
        </div>
      @endif
    </div>
    <div class="header-footer w-full h-8 md:h-16 text-white">
      <p class="text-center text-4xl text-white opacity-100"><img data-src="{{ $header->arrow }}" class="lozad block w-4 md:w-8 m-auto mt-2 md:mt-3"></p>
    </div>
  </div>
  @endif