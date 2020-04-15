<article class="tabbed-content lg:m-16 mt-0" id="tabs">
    <nav class="tabs">
      <ul class="flex text-center sm:border sm:border-tertiary">
          <li class="w-1/3">
              <a href="#tab1" class="active py-4 lg:py-12 no-underline uppercase text-secondary text-sm lg:text-2xl font-bold">
                  {{ $tabs->one_title }}
                  <div class="icon"></div>
              </a>
          </li>
          <li class="w-1/3">
              <a href="#tab2" class="py-4 lg:py-12 no-underline uppercase text-secondary text-sm lg:text-2xl font-bold">
                  {{ $tabs->two_title }}
                  <div class="icon"></div>
              </a>
          </li>
          <li class="w-1/3">
              <a href="#tab3" class="py-4 lg:py-12 no-underline uppercase text-secondary text-sm lg:text-2xl font-bold">
                  {{ $tabs->three_title }}
                  <div class="icon"></div>
              </a>
          </li>
      </ul>
    </nav>
    <section id="tab1" class="item active lg:flex bg-tertiary lg:text-2xl leading-normal text-primary" data-title="{{ $tabs->one_title }}">
      <div class="item-content lg:flex">
          <div class="lg:w-1/3 p-8 lg:p-16 item-content">
              {!! $tabs->one_l !!}
              <a href="{{ $tabs->one_burl['url'] }}" target="_blank" class="no-underline outline-none">
                  <button class="block w-auto mx-auto mt-12 py-3 px-8 border border-quaternary bg-transparent uppercase text-sm text-primary outline-none font-medium">{{ $tabs->one_btxt }}</button> 
              </a>
              </div>
              <div class="lg:w-2/3 p-8 lg:p-16">
              {!! $tabs->one_r !!}
          </div>
      </div>
    </section>
    <section id="tab2" class="item lg:flex bg-tertiary lg:text-2xl leading-normal text-primary" data-title="{{ $tabs->two_title }}">
      <div class="item-content lg:flex">
          <div class="lg:w-1/3 p-8 lg:p-16 item-content">
              {!! $tabs->two_l !!}
              <a href="{{ $tabs->two_burl['url'] }}" target="_blank" class="no-underline outline-none">
                  <button class="block w-auto mx-auto mt-12 py-3 px-8 border border-quaternary bg-transparent uppercase text-sm text-primary outline-none font-medium">{{ $tabs->one_btxt }}</button> 
              </a>
              </div>
              <div class="lg:w-2/3 p-8 lg:p-16">
              {!! $tabs->two_r !!}
          </div>
      </div>
    </section>
    <section id="tab3" class="item lg:flex bg-tertiary lg:text-2xl leading-normal text-primary" data-title="{{ $tabs->three_title }}">
      <div class="item-content lg:flex">
          <div class="lg:w-1/3 p-8 lg:p-16 item-content">
              {!! $tabs->three_l !!}
              <a href="{{ $tabs->three_burl['url'] }}" target="_blank" class="no-underline outline-none">
                  <button class="block w-auto mx-auto mt-12 py-3 px-8 border border-quaternary bg-transparent uppercase text-sm text-primary outline-none font-medium">{{ $tabs->one_btxt }}</button> 
              </a>
              </div>
              <div class="lg:w-2/3 p-8 lg:p-16">
              {!! $tabs->three_r !!}
          </div>
      </div>
    </section>
  </article>