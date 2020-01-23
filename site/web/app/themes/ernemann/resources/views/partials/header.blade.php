
@include('partials.menu-modal')
<div class="text-white mt-0 border border-blue-800 py-0 w-screen h-screen bg-cover" style="background-image:url('{!! $headerhero->background !!}')">
  <div class="h-screen bg-ae-green-bg">
    <nav class="flex pt-10">
      <div class="flex-1 px-4 py-2 m-2 pl-20">
        <a href="/">
          <img src="{{ $header->logo }}" class="block w-32 mr-auto">
        </a>
      </div>
      <div class="flex-1 px-4 py-2 m-2 -ml-10">
        <button class="modal-open block ml-auto mr-auto outline-none">
          <img src="{{ $header->hamburger }}" class="block w-8 m-auto mt-3 outline-none">
        </button>
      </div>
      <div class="flex-1 px-4 py-2 m-2">
        <div class="contact mr-8">
          <i class="inline-block mr-3 float-right"><img src="{{ $header->email }}" class="block w-8 mr-auto mt-1"></i> 
          <i class="inline-block mr-10 float-right"><img src="{{ $header->phone }}" class="block w-8 mr-auto"></i>
        </div>
      </div>
    </nav>
  <section class="flex w-full container page-header">
      <div class="w-full text-white flex justify-center text-center">
          <div class=" w-full pt-48">
              <h2 class="w-2/5 leading-none font-bold text-2xl xs:text-2x1 md:text-5xl uppercase text-center border border-white p-4 w-2/3 m-auto py-10">{!! $headerhero->heading !!}</h2>
              <p class="w-3/4 mt-20 mb-12 ml-auto mr-auto text-3xl md:text-5x1 text-center">{!! $headerhero->subheading !!}</p>
          </div>
      </div>
  </section>
  <div class="header-footer w-full h-16 text-white">
    <p class="text-center text-4xl text-white opacity-100"><img src="{{ $header->arrow }}" class="block w-8 m-auto mt-3"></p>
  </div>
  </div>
</div>
