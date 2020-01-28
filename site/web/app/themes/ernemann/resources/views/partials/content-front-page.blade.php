<section class="lg:flex p-8 md:p-16 text-center">
  <div class="w-full mb-8 md:mb-0 md:mr-8 p-8 border-solid border py:16 md:py-32 px-8 md:px-16">
    <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $towupsectionone->headingOne }}</h2>
    <p class="text-md md:text-2xl mb-8">{!! $towupsectionone->subheadingOne !!}</p>
    <a href="{{ $towupsectionone->buttonURLOne }}">
      <button class="bg-white py-3 px-8 border border-black-100 hover:border-transparent uppercase text-lg">{{ $towupsectionone->buttonTextOne }}</button>
    </a>
  </div>
  <div class="w-full md:ml-8 p-8 border-solid border py:16 md:py-32 px-8 md:px-16">
    <h2 class="uppercase text-xl md:text-3xl mb-6">{{ $towupsectionone->headingTwo }}</h2>
    <p class="text-md md:text-2xl mb-8">{!! $towupsectionone->subheadingTwo !!}</p>
    <a href="{{ $towupsectionone->buttonURLTwo }}">
      <button class="bg-white py-3 px-8 border border-black-100 hover:border-transparent uppercase text-lg">{{ $towupsectionone->buttonTextTwo }}</button>
    </a>
  </div>
</section>


  <div class="text-white mt-0 border border-blue-800 py-0 w-screen h-full bg-cover" style="background-image: url('{!! $oneupsection->background !!}')">
    <div class="h-full bg-ae-green-bg">
      <section class="flex">
      <div class="m-32 p-16 border border-white text-center">
        <h2 class="uppercase text-white text-3xl mb-6">{{ $oneupsection->heading }}</h2>
        <p class="text-md md:text-2xl mb-8 text-white">{{ $oneupsection->content }}</p>
        <div class="py-2 px-4"><img src="{!! $oneupsection->logo !!}" alt="" class="h-16"></div>
      </div>
    </section>
    </div>
  </div>



    