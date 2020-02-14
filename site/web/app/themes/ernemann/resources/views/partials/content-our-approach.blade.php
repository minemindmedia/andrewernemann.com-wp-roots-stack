<div class="lg:flex p-8 md:p-16 text-center text-grey">
    <div class="w-full md:mr-8 mb-8 lg:mb-0 px-0 px-4 lg:px-20 lg:px-8 py-8 lg:py-32  border border-solid">
      <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $two_up_section->heading }}</h2>
      <p class="text-md md:text-2xl leading-normal">{{ $two_up_section->content }}</p>
    </div>
    <div class="w-full lg:ml-8 px-4 md:px-8 py-8 lg:py-32 border border-solid">
        <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $two_up_section->heading_2 }}</h2>
        <p class="text-md md:text-2xl leading-normal">{{ $two_up_section->content_2 }}</p>
    </div>
</div>
<div class="flex">
    <div class="w-full lg:w-1/2 mx-auto approach-video">
        <video id="video-player-approach"
        class="video-js vjs-default-skin vjs-big-play-centered" 
        controls
        preload="auto"
        width="640"
        height="264"
        poster="{{ $video->poster }}"
        data-setup='{"fluid": true}'>
        <source src="{{ $video->mp4 }}" type='video/mp4' />
        <source src="{{ $video->webm }}" type='video/webm' />
        </video>
    </div>
</div>
<div class="flex">
    <div class="w-full lg:w-2/3 lg:mx-auto my-8 lg:my-48">
        <div class="lg:border-r lg:border-l border-secondary text-center px-8 lg:px-32 text-secondary lg:text-3xl leading-normal font-normal">
            <p>{!! $statement->content !!}</p>
        </div>
    </div>
</div>
<div class="lg:m-16 mt-0" id="tabs">
    <nav class="lg:flex text-center sm:border sm:border-tertiary">
        <a href="#tab-1" class="block w-full lg:w-1/3 py-4 lg:py-12 no-underline uppercase text-secondary lg:text-3xl font-bold ">
            {{ $tabs->one_title }}
        <div class="icon"></div>
        </a>
        <a href="#tab-2" class="block w-full lg:w-1/3 py-4 lg:py-12 no-underline uppercase text-secondary lg:text-3xl font-bold ">
            {{ $tabs->two_title }}
        <div class="icon"></div>
        </a>
        <a href="#tab-3" class="block w-full lg:w-1/3 py-4 lg:py-12 no-underline uppercase text-secondary lg:text-3xl font-bold ">
            {{ $tabs->three_title }}
        <div class="icon"></div>
        </a>
    </nav>
    <div id="tab-1" class="lg:flex bg-tertiary lg:text-2xl leading-normal text-primary">
        <div class="lg:w-1/3 p-8 lg:p-16">
        {!! $tabs->one_l !!}
        </div>
        <div class="lg:w-2/3 p-8 lg:p-16">
        {!! $tabs->one_r !!}
        </div>
    </div>
    <div id="tab-2" class="lg:flex bg-tertiary lg:text-2xl leading-normal text-primary">
        <div class="lg:w-1/3 p-8 lg:p-16">
        {!! $tabs->two_l !!}
        </div>
        <div class="lg:w-2/3 p-8 lg:p-16">
        {!! $tabs->two_r !!}
        </div>
    </div>
    <div id="tab-3" class="lg:flex bg-tertiary lg:text-2xl leading-normal text-primary">
        <div class="lg:w-1/3 p-8 lg:p-16">
        {!! $tabs->three_l !!}
        </div>
        <div class="lg:w-2/3 p-8 lg:p-16">
        {!! $tabs->three_r !!}
        </div>
    </div>
</div>
<div class="text-white mt-0 py-0 w-screen h-full bg-cover" style="background-image: url('{!! $covered->background !!}')">
    <div class="h-full bg-ae-green-bg">
        <div class="flex">
            <div class="relative m-8 lg:m-16 p-4 lg:p-16 text-center">
                <h2 class="uppercase text-white lg:text-3xl mb-6">{{ $covered->heading }}</h2>
                <p class="text-md md:text-2xl mb-8 text-white">{{ $covered->content }}</p>
                <img src="@asset('images/flow.svg')" alt="">
                <div class="mt-8 lg:mt-0 lg:absolute w-64 text-sm lg:text-lg lg:text-left" style="right:0; bottom: 3rem;">{{ $covered->disclaimer }}</div>
            </div>
        </div>
    </div>
</div>

@include('partials.reach')