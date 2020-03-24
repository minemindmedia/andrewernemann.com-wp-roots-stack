<nav class="siteheader fixed w-full z-50 md:pt-10">
  <div class="flex">
    <div class="w-1/3 px-4 py-1 m-2 md:pl-20">
      @if(is_front_page())
      @else
      <a href="/">
        <img data-src="{{ $header->logo }}" class="lozad block w-24 md:w-32 mr-auto">
      </a>
      @endif
    </div>
    <div class="w-1/3 pt-2">
      <a href="" class="navModal_open block ml-auto mr-auto outline-none">
        <img data-src="{{ $header->hamburger }}" class="lozad block w-6 md:w-8 m-auto mt-3 outline-none">
      </a>
    </div>
    <div class="w-1/3 px-4 py-2 m-2">
      <div class="contact md:mr-8 md:mt-2">
        <i class="inline-block md:mr-3 float-right">
          <a href="{{ $header->email_address }}">
          <img data-src="{{ $header->email }}" class="lozad block w-6 md:w-8 mr-auto mt-1">
          </a>
        </i> 
        
        @if( wp_is_mobile())
        <i class="lg:inline-block xl:hidden mr-4 md:mr-10 float-right">
          <a href="tel:{{ $header->phone_number }}">
          <img data-src="{{ $header->phone }}" class="lozad block w-6 md:w-8 mr-auto"></a>
          </i>
        @endif
        <button id="showHidePhone" class="hidden sm:hidden md:hidden lg:hidden xl:inline-block phoneTooltip_open phoneTooltip_close float-right">
        <i class="inline-block mr-4 md:mr-10 float-right"><img data-src="{{ $header->phone }}" class="lozad block w-6 md:w-8 mr-auto"></i>
      </button>
      

        
        <div id="phone" class="hidden lg:visible">
          <h2 class="text-white">{{ $header->phone_number }}</h2>
        </div>
        

       

      </div>
    </div>
  </div>
</nav>






<div id="navModal" class="siteModal h-full w-full text-white overflow-y-scroll z-50">
  <div>
    <div class="h-10 mr-10 ml-10 mt-10">
        <img data-src="{{ $header->logo }}" class="lozad block w-32 mr-auto float-left">
        <a href="#" class="navModal_close siteModalClose"><img data-src="{{ $header->close }}" class="lozad block w-16 mr-auto float-right cursor-pointer"></a>
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
  <a href="#" class="contactModal_close siteModalClose"><img data-src="{{ $header->close }}" class="lozad block w-16 cursor-pointer"></a>
  <div class="w-4/5 lg:w-2/5 mx-auto mt-32 lg:mt-48 mb-16 ">
    <div class="px-8 lg:px-24 py-8 lg:py-16 border border-tertiary uppercase font-normal">
      <p class="text-center text-2xl font-bold mb-12">We look forward to hearing from you</p>
      {!! do_shortcode('[ninja_form id=5]') !!}
    </div>
  </div>
</div>

<div id="marketModal" class="siteModal marketModal h-full w-full text-white overflow-y-scroll">
  <a href="#" class="marketModal_close siteModalClose"><img data-src="{{ $header->close }}" class="lozad block w-16 cursor-pointer"></a>
  <div class="w-4/5 lg:w-2/5 mx-auto mt-32 lg:mt-48 mb-16 ">
    <div class="px-8 lg:px-24 py-8 lg:py-16 border border-tertiary uppercase font-normal">
      <p class="text-center text-2xl font-bold mb-12">Sign up to receive the market report</p>
      {!! do_shortcode('[ninja_form id=4]') !!}
    </div>
  </div>
</div>