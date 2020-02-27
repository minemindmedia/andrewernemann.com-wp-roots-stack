<!-- 50vh section -->

<div class="xl:h-screen">
  <div class="xl:flex xl:h-screen-50 p-8 xl:p-16">
    <div class="flex flex-1 mr-0 xl:mr-8 mb-8 xl:mb-0 p-8 xl:p-0 justify-center text-center text-primary border border-quaternary">
      <div class="self-center w-5/6">
        <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $towupsectionone->headingOne }}</h2>
        <p class="text-md md:text-2xl mb-8">{!! $towupsectionone->subheadingOne !!}</p>
        <a href="{{ $towupsectionone->buttonURLOne }}">
          <button class="py-3 px-6 border border-quaternary uppercase text-lg font-medium text-primary tracking-wider">{{ $towupsectionone->buttonTextOne }}</button>
        </a>
      </div>
    </div>
    <div class="flex flex-1 ml-0 xl:ml-8 p-8 xl:p-0 justify-center text-center text-primary border border-quaternary">
      <div class="self-center w-5/6">
        <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $towupsectionone->headingTwo }}</h2>
        <p class="text-md md:text-2xl mb-8">{!! $towupsectionone->subheadingTwo !!}</p>
        <a href="{{ $towupsectionone->buttonURLTwo }}">
          <button class="py-3 px-6 border border-quaternary uppercase text-lg font-medium text-primary tracking-wider">{{ $towupsectionone->buttonTextTwo }}</button>
        </a>
      </div>
    </div>
  </div>
  <div class="xl:flex xl:h-screen-50 justify-center pb-8 xl:pb-16">
    
      <video controls loop poster="{{ $videosection->poster }}" class="block w-full xl:w-1/2 mx-auto">
        <source src="{{ $videosection->mp4 }}" type="video/mp4">
        <source src="{{ $videosection->webm }}" type="video/webm">
        Your browser does not support HTML5 video.
      </video>
    
  </div>
</div>


<!-- end 50vh section -->



<div class="text-white mt-0 py-0 w-screen h-full bg-cover" style="background-image: url('{!! $oneupsection->background !!}')">
  <div class="h-full bg-ae-green-bg">
    <div class="flex">
    <div class="m-8 md:m-16 p-8 md:p-20 border border-white text-center">
      <h2 class="uppercase text-white text-3xl mb-6">{{ $oneupsection->heading }}</h2>
      <p class="text-md md:text-2xl mb-8 text-white">{{ $oneupsection->content }}</p>
      <div class="pt-8 px-4"><img data-src="{{ $oneupsection->logo['url'] }}" alt="{{ $oneupsection->logo['alt'] }}" class="lozad h-16"></div>
    </div>
  </div>
  </div>
</div>

<div class="lg:flex p-8 md:p-16 text-center text-grey">
  <div class="w-full md:mr-8 mb-8 lg:mb-0 px-4 lg:px-16 py-8 lg:py-16  border border-quaternary">
    <div class="flex content-center flex-wrap justify-center h-full">
      <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $towupsectiontwo->headingOne }}</h2>
      <p class="text-md md:text-2xl mb-8 leading-normal">{!! $towupsectiontwo->subheadingOne !!}</p>
      <a href="{{ $towupsectiontwo->pdfFile }}" target="_blank">
        <button class="py-3 px-6 border border-quaternary uppercase text-lg font-medium text-primary tracking-wider">{{ $towupsectiontwo->buttonTextOne }}</button>
      </a>
    </div>
  </div>
  <div class="lg:flex w-full lg:ml-8 px-4 md:px-8 py-8 lg:py-16 border border-quaternary">
    <div class="w-full lg:w-1/2">
      <img data-src="{{ $towupsectiontwo->report['url'] }}" alt="{{ $towupsectiontwo->report['alt'] }}" class="lozad px-8 pb-8 lg:pb-0">
    </div>
    <div class="w-full lg:w-1/2">
      <div class="flex content-center flex-wrap justify-center h-full">
      <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $towupsectiontwo->headingTwo }}</h2>
      <p class="w-full text-md md:text-2xl mb-8 leading-normal">{!! $towupsectiontwo->subheadingTwo !!}</p> 
      <button class="mrModal_open block py-3 px-6 border border-quaternary uppercase text-lg font-medium text-primary tracking-wider">{{ $towupsectiontwo->buttonTextTwo }}</button>
      </div>
    </div>
  </div>
</div>

<div id="mrModal" class="siteModal mrModal h-full w-full text-white overflow-y-scroll">
  <a href="#" class="mrModal_close siteModalClose"><img data-src="{{ $header->close }}" alt="Close" class="lozad block w-16 cursor-pointer"></a>
  <div class="w-2/5 mx-auto mt-48 mb-16 ">
    <div class="px-24 py-16 border border-tertiary uppercase font-normal">
      <p class="text-center text-2xl font-bold mb-12">Sign up to receive the market report</p>
      {!! do_shortcode('[ninja_form id=4]') !!}
    </div>
  </div>
</div>

<div class="relative w-full home-property-video">
  <div class="details absolute z-50 text-center mb-16 mr-32 hidden lg:block"> 
    <h3 class="text-3xl text-white uppercase mb-6">{{ $video_image->street }}</h3> 
    <h4 class="text-2xl text-white uppercase font-normal">{{ $video_image->neighborhood }}<span class="w-0 border-l-2 border-white ml-4 mr-4"></span>{{ $video_image->city }}</h4>
    <h4 class="text-2xl text-white uppercase font-normal mb-8">${{ $video_image->price }}</h4>
    <a href="{{ $video_image->btnurl }}">
    <button class="py-3 px-6 border border-white uppercase text-lg font-medium text-white tracking-wider">{{ $video_image->btntxt }}</button> 
  </a>
  </div>
  @if ( $video_image->videoImage == 'video' )
  <video id="video-player"
    class="video-js vjs-default-skin vjs-big-play-centered" 
    controls
    preload="auto"
    width="640"
    height="264"
    poster="{{ $video_image->poster }}"
    data-setup='{"fluid": true}'>
    <source src="{{ $video_image->mp4 }}" type='video/mp4' />
    <source src="{{ $video_image->webm }}" type='video/webm' />
  </video>
  @elseif ( $video_image->videoImage == 'image' )
  <img class="lozad object-cover w-full" data-src="{!! $video_image->image['url'] !!}" alt="{!! $video_image->image['alt'] !!}">
  @endif
</div>
<div class="flex bg-tertiary">
  <div class="w-4/5 lg:w-1/2 mx-auto my-8 lg:my-48 text-center border-r border-l border-red"> 
    <div class="testimonial-slider">
      @foreach($testimonials as $testimonial)
        <div class="px-8 lg:px-32">
          <p class="text-lg lg:text-3xl italic text-red mb-8">{!! $testimonial['testimonial'] !!}</p>
          <h3 class="text-md lg:text-2xl text-red mb-8 font-medium">{!! $testimonial['author'] !!}</h3>
        </div>
      @endforeach
    </div>
  </div>
</div> 
<div class="text-white mt-0 py-0 w-screen h-full bg-cover bg-bottom" style="background-image: url('{!! $oneupsectiontwo->background !!}')">
  <div class="h-full bg-ae-green-bg">
    <div class="flex">
      <div class="m-8 md:m-16 p-8 md:p-16 lg:py-32 border border-white text-center">
        <h2 class="uppercase text-3xl mb-6">{{ $oneupsectiontwo->heading }}</h2>
        <p class="text-md md:text-2xl mb-8 lg:mx-64">{{ $oneupsectiontwo->content }}</p>
        <a href="{{ $oneupsectiontwo->buttonLink }}" class="inline-block mt-12">
        <button class="py-3 px-6 border border-white uppercase text-lg font-medium text-white tracking-wider">{{ $oneupsectiontwo->buttonText }}</button> 
        </a>
      </div>
    </div>
  </div>
</div>
<div class="text-grey py-0 lg:w-1/2 lg:my-8 mx-auto">
  <div class="flex">
    <div class="m-8 px-4 py-8 lg:py-24 border border-quaternary text-center">
      <h2 class="uppercase text-3xl mb-6">{{ $oneupsectionthree->heading }}</h2>
      <p class="text-md md:text-2xl mb-8">{{ $oneupsectionthree->content }}</p>
      <a href="{{ $oneupsectionthree->buttonLink }}">
      <button class="py-3 px-6 border border-quaternary uppercase text-lg font-medium text-primary tracking-wider">{{ $oneupsectionthree->buttonText }}</button> 
      </a>
    </div>
  </div>
</div>
<div class="lg:flex p-8 md:p-16 text-center text-grey bg-grey-lightest">
  <div class="w-full px-4 md:px-8 py-8 lg:py-16 border border-white">
    <img src="@asset('images/newslogos.png')" alt="News Logos" class="mb-8">
    <div class="press-slider w-4/5 mx-auto">
      @foreach($press as $article)
        <div class="px-8">
          <p class="text-lg lg:text-3xl uppercase mb-8 font-bold">{!! $article['heading'] !!}</p>
          <h3 class="text-md lg:text-2xl mb-8 font-normal">{!! $article['source'] !!}</h3>
          <a href="{{ $article['link'] }}" target="_blank">
            <button class="py-3 px-6 border border-quaternary uppercase text-lg font-medium text-primary tracking-wider">Read it</button> 
            </a>
        </div>
      @endforeach
    </div>
  </div>
</div>