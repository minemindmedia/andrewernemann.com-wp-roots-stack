@include('partials.header-nav')
<div class="relative">
  @if (is_singular('properties'))
  @include('partials.header-single-properties')
  @else
  @if (is_archive())
  <img class="object-cover w-full" src="{!! $headerhero_options->background !!}">
  @else
    <img class="object-cover w-full" src="{!! $headerhero->background !!}">
  @endif
  <div class="absolute bg-ae-green-bg" style="top:0; right:0; left:0; bottom:2px;">
    <div class="flex content-center flex-wrap justify-center text-white text-center" style="min-height:100%;">
      @if(is_front_page())
        <div class="block wx-auto border border-white">
          <img src="{{ $header->logo }}" class="w-32 sm:w-48 md:w-64 lg:w-80 pt-1 md:pt-4 pr-1 md:pr-4 pb-0 md:pb-3 pl-1 md:pl-4">
        </div>
        <div class="w-full">
        <p class="w-1/2 mx-auto text-sm sm:text-xl md:text-3xl mt-4 md:mt-8 lg:mt-24" style="background:red; opacity:0.5;">{!! $headerhero->subheading !!}</p>
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
      <p class="text-center text-4xl text-white opacity-100"><img src="{{ $header->arrow }}" class="block w-4 md:w-8 m-auto mt-2 md:mt-3"></p>
    </div>
  </div>
  @endif
</div>
