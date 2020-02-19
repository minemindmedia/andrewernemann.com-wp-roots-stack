<nav class="absolute w-full z-50 md:pt-10">
  <div class="flex">
    <div class="w-1/3 px-4 py-1 m-2 md:pl-20">
      @if(is_front_page())
      @else
      <a href="/">
        <img src="{{ $header->logo }}" class="block w-24 md:w-32 mr-auto">
      </a>
      @endif
    </div>
    <div class="w-1/3 pt-2">
      <a href="" class="navModal_open block ml-auto mr-auto outline-none">
        <img src="{{ $header->hamburger }}" class="block w-6 md:w-8 m-auto mt-3 outline-none">
      </a>
    </div>
    <div class="w-1/3 px-4 py-2 m-2">
      <div class="contact md:mr-8 md:mt-2">
        <i class="inline-block md:mr-3 float-right"><img src="{{ $header->email }}" class="block w-6 md:w-8 mr-auto mt-1"></i> 
        <i class="inline-block mr-4 md:mr-10 float-right"><img src="{{ $header->phone }}" class="block w-6 md:w-8 mr-auto"></i>
      </div>
    </div>
  </div>
</nav>




<div id="navModal" class="siteModal h-full w-full text-white overflow-y-scroll">
  <div>
    <div class="header h-10 mr-10 ml-10 mt-10">
        <img src="{{ $header->logo }}" class="block w-32 mr-auto float-left">
        <a href="#" class="navModal_close siteModalClose"><img src="{{ $header->close }}" class="block w-16 mr-auto float-right cursor-pointer"></a>
    </div>
    <div class="modal-content container mx-auto h-auto text-left p-4">
        <div class="menu uppercase leading-loose text-3xl mt-16">
            @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'text-center no-underline']) !!}
            @endif
        </div>  
    </div>
  </div>
</div>

<div id="contactModal" class="siteModal contactModal h-full w-full text-white overflow-y-scroll">
  <a href="#" class="contactModal_close siteModalClose"><img src="{{ $header->close }}" class="block w-16 cursor-pointer"></a>
  <div class="w-2/5 mx-auto mt-48 mb-16 ">
    <div class="px-24 py-16 border border-tertiary uppercase font-normal">
      <p class="text-center text-2xl font-bold mb-12">We look forward to hearing from you</p>
      {!! do_shortcode('[ninja_form id=5]') !!}
    </div>
  </div>
</div>