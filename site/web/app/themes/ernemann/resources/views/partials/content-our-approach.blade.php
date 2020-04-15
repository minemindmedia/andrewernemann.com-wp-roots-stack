<div class="lg:flex p-8 md:p-16 text-center text-grey">
    <div class="w-full md:mr-8 mb-8 lg:mb-0 px-0 px-4 lg:px-20 lg:px-8 py-8 lg:py-32  border border-quaternary">
      <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $two_up_section->heading }}</h2>
      <p class="text-md md:text-2xl leading-normal">{{ $two_up_section->content }}</p>
    </div>
    <div class="w-full lg:ml-8 px-4 md:px-8 py-8 lg:py-32 border border-quaternary">
        <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $two_up_section->heading_2 }}</h2>
        <p class="text-md md:text-2xl leading-normal">{{ $two_up_section->content_2 }}</p>
    </div>
</div>
<div class="flex">
    <div class="w-full lg:w-1/2 mx-auto approach-video">
        <video id="vid" class="vjs-tech" style="width:100%; height: auto;"
        preload="auto"
        autoplay 
        mute
        loop
        autobuffer
        controls
        poster="{{ $video->poster }}" tabindex="-1" src="{{ $video->mp4 }}">
        <source src="{{ $video->mp4 }}" type="video/mp4">
        <source src="{{ $video->webm }}" type="video/webm">
        </video>
    </div>
</div>
<div class="flex" id="statement">
    <div class="w-full lg:w-2/3 lg:mx-auto my-8 lg:my-48">
        <div class="lg:border-r lg:border-l border-secondary text-center px-8 lg:px-32 text-secondary lg:text-3xl leading-normal font-normal">
            <p>{!! $statement->content !!}</p>
        </div>
    </div>
</div>

<div class="">
    @include('partials.tabsxxx')
</div>

<div class="xxl:hidden">
    @include('partials.flow-mobile')
</div>

<div class="hidden xxl:block">
    @include('partials.flow')
</div>

@include('partials.reach')