<header class="bg-cover bg-center h-screen" style="background-image: url({!! $headerhero->background !!})">
  <div class="h-screen bg-ae-green-bg">
    <div class="overflow-hidden border-t border-l border-r border-gray-400 p-4 pt-8">
      <div class="flex">
          <div class="flex-1 text-white-700 text-center px-4 py-2 m-2">LOGO</div>
          <div class="flex-1 text-white-700 text-center px-4 py-2 m-2">
            <span class="menu-bars inline-block">
              <span class="block w-8 h-1 bg-white mb-2 opacity-75"></span>
              <span class="block w-8 h-1 bg-white mb-2 opacity-75"></span>
              <span class="block w-8 h-1 bg-white mb-2 opacity-75"></span>
            </span>
          </div>
          <div class="flex-1 text-white-700 text-right px-4 py-2 m-2">
            <span class="contact">
                <i class="inline-block fas fa-phone-alt mr-16"></i>
                <i class="inline-block far fa-envelope mr-5"></i> 
            </span>
          </div>
      </div>
      <div class="flex flex-col h-screen">
        <div class="m-auto">
          <h1 class="border border-white text-white p-4 text-4xl  text-center w-auto m-auto">
            {!! $headerhero->heading !!}
          </h1>
          <h2 class="text-white text-center mt-20 text-3xl">
            {!! $headerhero->subheading !!}
          </h2>
        </div>
      </div>
  </div>
  </div>
</header>
