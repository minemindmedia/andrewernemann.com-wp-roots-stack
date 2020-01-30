<div class="lg:flex p-8 md:p-16 text-center">
  <div class="w-full md:mr-8 mb-8 lg:mb-0 px-4 lg:px-8 py-32  border border-solid">
    <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $towupsectionone->headingOne }}</h2>
    <p class="text-md md:text-2xl mb-8">{!! $towupsectionone->subheadingOne !!}</p>
    <a href="{{ $towupsectionone->buttonURLOne }}">
      <button class="bg-white py-3 px-8 border border-black-100 hover:border-transparent uppercase text-lg">{{ $towupsectionone->buttonTextOne }}</button>
    </a>
  </div>
  <div class="w-full lg:ml-8 px-4 md:px-8 py-32 border border-solid">
    <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $towupsectionone->headingTwo }}</h2>
    <p class="text-md md:text-2xl mb-8">{!! $towupsectionone->subheadingTwo !!}</p>
    <a href="{{ $towupsectionone->buttonURLTwo }}">
      <button class="bg-white py-3 px-8 border border-black-100 hover:border-transparent uppercase text-lg">{{ $towupsectionone->buttonTextTwo }}</button>
    </a>
  </div>
</div>




<div class="w-2/5 mx-auto mb-16 home-video">

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






<div class="text-white mt-0 border border-blue-800 py-0 w-screen h-full bg-cover" style="background-image: url('{!! $oneupsection->background !!}')">
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

