<div class="lg:flex p-8 md:p-16 text-center text-grey">
  <div class="w-full md:mr-8 mb-8 lg:mb-0 px-4 lg:px-8 py-8 lg:py-32  border border-solid">
    <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $towupsectionone->headingOne }}</h2>
    <p class="text-md md:text-2xl mb-8">{!! $towupsectionone->subheadingOne !!}</p>
    <a href="{{ $towupsectionone->buttonURLOne }}">
      <button class="bg-white py-3 px-8 border border-grey-light hover:border-transparent uppercase text-lg">{{ $towupsectionone->buttonTextOne }}</button>
    </a>
  </div>
  <div class="w-full lg:ml-8 px-4 md:px-8 py-8 lg:py-32 border border-solid">
    <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $towupsectionone->headingTwo }}</h2>
    <p class="text-md md:text-2xl mb-8">{!! $towupsectionone->subheadingTwo !!}</p>
    <a href="{{ $towupsectionone->buttonURLTwo }}">
      <button class="bg-white py-3 px-8 border border-grey-light hover:border-transparent uppercase text-lg">{{ $towupsectionone->buttonTextTwo }}</button>
    </a>
  </div>
</div>
<div class="md:w-1/3 lg:w-2/5 mx-auto mb-16 home-video">
  <video id="home-player"
    class="video-js vjs-default-skin vjs-big-play-centered"
    controls
    preload="auto"
    width="640"
    height="264"
    poster="{{ $videosection->poster }}"
    data-setup='{"fluid": true}'>
    <source src="{{ $videosection->mp4 }}" type='video/mp4' />
    <source src="{{ $videosection->webm }}" type='video/webm' />
  </video>
</div>
<div class="text-white mt-0 py-0 w-screen h-full bg-cover" style="background-image: url('{!! $oneupsection->background !!}')">
  <div class="h-full bg-ae-green-bg">
    <div class="flex">
    <div class="m-8 md:m-16 p-8 md:p-16 border border-white text-center">
      <h2 class="uppercase text-white text-3xl mb-6">{{ $oneupsection->heading }}</h2>
      <p class="text-md md:text-2xl mb-8 text-white">{{ $oneupsection->content }}</p>
      <div class="py-2 px-4"><img src="{!! $oneupsection->logo !!}" alt="" class="h-16"></div>
    </div>
  </div>
  </div>
</div>
<div class="lg:flex p-8 md:p-16 text-center text-grey">
  <div class="w-full md:mr-8 mb-8 lg:mb-0 px-4 lg:px-8 py-8 lg:py-16  border border-solid">
    <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $towupsectiontwo->headingOne }}</h2>
    <p class="text-md md:text-2xl mb-8">{!! $towupsectiontwo->subheadingOne !!}</p>
    <a href="{{ $towupsectiontwo->buttonURLOne }}">
      <button class="bg-white py-3 px-8 border border-grey-light hover:border-transparent uppercase text-lg">{{ $towupsectiontwo->buttonTextOne }}</button>
    </a>
  </div>
  <div class="lg:flex w-full lg:ml-8 px-4 md:px-8 py-8 lg:py-16 border border-solid">
    <div class="w-full lg:w-1/2">
      <img src="{{ $towupsectiontwo->report['url'] }}" alt="{{ $towupsectiontwo->report['alt'] }}" class="px-8 pb-8 lg:pb-0">
    </div>
    <div class="w-full lg:w-1/2">
      <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $towupsectiontwo->headingTwo }}</h2>
      <p class="text-md md:text-2xl mb-8">{!! $towupsectiontwo->subheadingTwo !!}</p> 
      <a href="{{ $towupsectiontwo->buttonURLTwo }}">
        <button class="bg-white py-3 px-8 border border-grey-light hover:border-transparent uppercase text-lg">{{ $towupsectiontwo->buttonTextTwo }}</button>
      </a>
    </div>
  </div>
</div>
<div class="relative w-full home-property-video">
  <div class="details absolute z-50 text-center mb-16 mr-32 hidden lg:block"> 
    <h3 class="text-3xl text-white uppercase mb-6">109 Willoughby Way</h3> 
    <h4 class="text-2xl text-white uppercase font-normal">Red Mountain<span class="w-0 border-l-2 border-white ml-4 mr-4"></span>Aspen</h4>
    <h4 class="text-2xl text-white uppercase font-normal mb-8">$24,750,000</h4>
    <button class="py-3 px-8 border border-white bg-transparent uppercase text-lg text-white">Learn more</button> 
  </div>
  <video id="video-player"
    class="video-js vjs-default-skin vjs-big-play-centered" 
    controls
    preload="auto"
    width="640"
    height="264"
    poster="{{ $videosection->poster }}"
    data-setup='{"fluid": true}'>
    <source src="{{ $videosection->mp4 }}" type='video/mp4' />
    <source src="{{ $videosection->webm }}" type='video/webm' />
  </video>
</div>
<div class="flex">
  <div class="w-4/5 lg:w-1/2 mx-auto my-8 lg:my-48 text-center border-r border-l border-red"> 
    <div class="testimonial-slider">
      @foreach($testimonials as $testimonial)
        <div class="px-8 lg:px-32">
          <p class="text-lg lg:text-3xl italic text-red mb-8">{!! $testimonial['testimonial'] !!}</p>
          <h3 class="text-md lg:text-2xl text-red mb-8">{!! $testimonial['author'] !!}</h3>
        </div>
      @endforeach
    </div>
  </div>
</div> 
<div class="text-white mt-0 py-0 w-screen h-full bg-cover bg-bottom" style="background-image: url('{!! $oneupsectiontwo->background !!}')">
  <div class="h-full bg-ae-green-bg">
    <div class="flex">
      <div class="m-8 md:m-16 p-8 md:p-16 border border-white text-center">
        <h2 class="uppercase text-3xl mb-6">{{ $oneupsectiontwo->heading }}</h2>
        <p class="text-md md:text-2xl mb-8 lg:mx-64">{{ $oneupsectiontwo->content }}</p>
        <a href="{{ $oneupsectiontwo->buttonLink }}">
        <button class="py-3 px-8 border border-white bg-transparent uppercase text-lg text-white">{{ $oneupsectiontwo->buttonText }}</button> 
        </a>
      </div>
    </div>
  </div>
</div>
<div class="text-grey py-0 lg:w-1/2 lg:my-8 mx-auto">
  <div class="flex">
    <div class="m-8 px-4 py-8 lg:py-24 border border-grey-light text-center">
      <h2 class="uppercase text-3xl mb-6">{{ $oneupsectionthree->heading }}</h2>
      <p class="text-md md:text-2xl mb-8">{{ $oneupsectionthree->content }}</p>
      <a href="{{ $oneupsectionthree->buttonLink }}">
      <button class="py-3 px-8 border border-grey-light bg-transparent uppercase text-lg text-grey">{{ $oneupsectionthree->buttonText }}</button> 
      </a>
    </div>
  </div>
</div>
<div class="lg:flex p-8 md:p-16 text-center text-grey bg-grey-lightest">
  <div class="w-full px-4 md:px-8 py-8 lg:py-16 border border-solid">
    <div class="press-slider w-4/5 mx-auto">
      @foreach($press as $article)
        <div class="px-8">
          <p class="text-lg lg:text-3xl uppercase mb-8 font-bold">{!! $article['heading'] !!}</p>
          <h3 class="text-md lg:text-2xl mb-8 font-normal">{!! $article['source'] !!}</h3>
          <a href="{{ $article['link'] }}">
            <button class="py-3 px-8 border border-grey bg-transparent uppercase text-lg text-grey">Read it</button> 
            </a>
        </div>
      @endforeach
    </div>
  </div>
</div>