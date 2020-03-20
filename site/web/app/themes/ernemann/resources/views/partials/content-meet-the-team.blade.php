<div class="mt-0 py-0 w-screen h-full">
    <div class="flex">
        <div class="my-8 mx-8 xl:m-16 p-8 md:p-16 border border-quaternary text-center text-primary">
            <h2 class="uppercase text-lg lg:text-3xl mb-6">{{ $who_we_are->heading }}</h2>
            <div class="mx-8 xl:mx-80 text-md md:text-2xl mb-8 leading-normal">{!! $who_we_are->subheading !!}</div>
            <div class="mx-8 xl:mx-80 text-md md:text-2xl mb-8 leading-normal">{!! $who_we_are->content !!}</div>
        </div>
    </div>
</div>

<div class="lg:flex mb-8 lg:mb-16">
    <div class="w-full lg:w-1/2 xl:w-1/5 h-128 lg:h-auto order-last" style="background: url('{{ $meet_andrew->photo['url'] }}'); background-size: cover; background-position: center center; order:99999;"></div>
    <div class="w-full lg:w-1/2 xl:w-4/5 text-center text-primary bg-tertiary py-8 xl:py-16 px-8 xl:px-48">
        <h3 class="lg:text-3xl mb-8">{{ $meet_andrew->title }}</h3>
        <div class="lg:text-2xl leading-normal mb-16">{!! $meet_andrew->statement !!}</div>
        <a href="" class="andrewModal_open inline-block py-3 px-8 border border-quaternary uppercase text-lg text-primary outline-none no-underline">Read more</a>
    </div>
    <div id="andrewModal" class="siteModal teamModal h-full w-full text-white overflow-y-scroll">
        <div class="lg:w-3/4 mx-8 lg:mx-auto mt-8 lg:mt-0 mb-16 ">
            <a href="#" class="andrewModal_close teamModalClose"><img data-src="@asset('images/close-dark.svg')" class="lozad block w-16 float-right mr-4 cursor-pointer"></a>
            <div class="lg:flex text-2xl leading-normal text-primary">
                <div class="flex-1 px-6 pt-24">
                    <img data-src="{{ $meet_andrew->photo['url'] }}" alt="{{ $meet_andrew->photo['alt'] }}" class="lozad md:w-64 float-left mr-8 mb-8">
                    <h2 class="uppercase text-2xl mb-8">{{ $meet_andrew->title }}</h2>
                    {!! $meet_andrew->biography_one !!}
                </div>
                @if ( $meet_andrew->biography_two )
                <div class="flex-1 px-6 pt-12">
                    {!! $meet_andrew->biography_two !!}
                    
                </div>
                @endif
            </div>
            <a href="#" class="andrewModal_close float-right m-8 uppercase no-underline text-primary" style="color:#ed4e2e;">Close</a>
        </div>
    </div>
</div>

@if( have_rows('meet_people') ) @php $k = 0; @endphp
<div class="mx-8 lg:mx-16 mb-8 lg:mb-0">
    <div class="lg:flex lg:flex-wrap justify-center -mx-8">
        @while ( have_rows('meet_people') ) @php $k++; @endphp
        @php the_row();
        $title = get_sub_field('title');
        $statement = get_sub_field('statement');
        $biography_one = get_sub_field('biography_one');
        $biography_two = get_sub_field('biography_two');
        $photo = get_sub_field('photo');
        @endphp
        <div class=" lg:w-1/2  px-8 mb-8 lg:mb-16">
            <div class="border border-quaternary px-8 xl:px-32 pt-8 xl:pt-24 pb-8 xl:pb-16 text-center text-primary">
            <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $title }}</h2>
            <p class="text-md md:text-2xl leading-normal mb-12">{{ $statement }}</p>
            <a href="" class="teamModal-{{ $k }}_open py-3 px-8 border border-quaternary uppercase text-lg text-primary outline-none no-underline">Read more</a>
            </div>
        </div>
        <div id="teamModal-{{ $k }}" class="teamModal h-full w-full text-primary overflow-y-scroll">
            <div class="lg:w-3/4 mx-8 lg:mx-auto mt-8 lg:mt-0 mb-16 ">
                <a href="#" class="teamModal-{{ $k }}_close teamModalClose"><img data-src="@asset('images/close-dark.svg')" class="lozad block w-16 mr-4 cursor-pointer"></a>
                <div class="lg:flex md:text-2xl leading-normal">
                    <div class="flex-1 px-6 pt-6 lg:pt-12 pb-0">
                        <img data-src="{{ $photo['url'] }}" alt="{{ $photo['alt'] }}" class="lozad md:w-64 float-left mr-8 mb-8 mt-20">
                        <h2 class="uppercase text-2xl mb-8">{{ $title }}</h2>
                        {!! $biography_one !!}
                    </div>
                    @if ( $biography_two )
                    <div class="flex-1 px-6 pt-6 lg:pt-12 pb-0">
                        {!! $biography_two !!}
                    </div>
                    @endif
                </div>
                <a href="#" class="teamModal-{{ $k }}_close text-secondary float-right m-8 uppercase no-underline">Close</a>
            </div>
        </div>
        @endwhile
    </div>
</div>
@endif

<div class="text-white mt-0 py-0 w-screen h-full bg-cover bg-bottom lozad" data-background-image="{!! $better_together->background !!}">
    <div class="h-full bg-ae-green-bg">
      <div class="flex">
          <div class="m-8 lg:w-1/2 lg:mx-auto xl:my-64">
            <div class="p-8 xl:py-24 xl:px-16 border border-white text-center">
            <h2 class="uppercase text-lg lg:text-3xl mb-6">{{ $better_together->title }}</h2>
            <p class="text-md md:text-2xl mb-8">{!! $better_together->content !!}</p>
            </div>
        </div>
      </div>
    </div>
</div>

@include('partials.reach')
 