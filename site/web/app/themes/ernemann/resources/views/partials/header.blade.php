@include('partials.menu-modal')
@if (is_singular('properties'))
@include('partials.header-single-properties')
@else
<div class="text-white mt-0 py-0 w-full bg-cover" style="background-image:url('{!! $headerhero->background !!}')">
  <div class="h-screen bg-ae-green-bg">
    @include('partials.header-nav')
    <section class="flex w-full h-full container">
        <div class="relative w-full text-white flex justify-center text-center ">
            <div class="absolute block w-full header-content">
                  @if(is_front_page())
                    <div class="w-auto border border-white p-4 inline-block">
                      <img src="{{ $header->logo }}" class="h-16 md:h-24">
                    </div>
                  @else
                    <h2 class="w-auto font-normal xs:text-2x1 md:text-5xl text-center border border-white inline-block m-auto px-12 py-6 md:px-24 md:py-12">
                      {!! $headerhero->heading !!}
                    </h2>
                  @endif
                @if(is_front_page())
                  <p class="w-3/4 mt-20 mb-12 ml-auto mr-auto text-xl sm:text-5x1 text-center">{!! $headerhero->subheading !!}</p>
                @else
                  <p class="w-3/4 mt-20 mb-12 ml-auto mr-auto text-sm md:text-3xl text-center">{!! $headerhero->subheading !!}</p>
                @endif
            </div>
        </div>
    </section>
    <div class="header-footer w-full h-16 text-white">
      <p class="text-center text-4xl text-white opacity-100"><img src="{{ $header->arrow }}" class="block w-8 m-auto mt-3"></p>
    </div>
  </div>
</div>
@endif
