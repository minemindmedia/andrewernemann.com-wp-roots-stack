<div class="lg:m-16 mt-0" id="tabs">
    <nav class="flex text-center sm:border sm:border-tertiary">
        <a href="#tab-1" class="block w-1/3 py-4 lg:py-12 no-underline uppercase text-secondary text-sm lg:text-3xl font-bold ">
            {{ $tabs->one_title }}
        <div class="icon"></div>
        </a>
        <a href="#tab-2" class="block w-1/3 py-4 lg:py-12 no-underline uppercase text-secondary text-sm lg:text-3xl font-bold ">
            {{ $tabs->two_title }}
        <div class="icon"></div>
        </a>
        <a href="#tab-3" class="block w-1/3 py-4 lg:py-12 no-underline uppercase text-secondary text-sm lg:text-3xl font-bold ">
            {{ $tabs->three_title }}
        <div class="icon"></div>
        </a>
    </nav>
    <div id="tab-1" class="lg:flex bg-tertiary lg:text-2xl leading-normal text-primary">
        <div class="lg:w-1/3 p-8 lg:p-16">
        {!! $tabs->one_l !!}
        <a href="{{ $tabs->one_burl['url'] }}" target="_blank" class="no-underline outline-none">
            <button class="block w-auto mx-auto mt-12 py-3 px-8 border border-quaternary bg-transparent uppercase text-sm text-primary outline-none font-medium">{{ $tabs->one_btxt }}</button> 
        </a>
        </div>
        <div class="lg:w-2/3 p-8 lg:p-16">
        {!! $tabs->one_r !!}
        </div>
    </div>
    <div id="tab-2" class="lg:flex bg-tertiary lg:text-2xl leading-normal text-primary">
        <div class="lg:w-1/3 p-8 lg:p-16">
        {!! $tabs->two_l !!}
        <a href="{{ $tabs->two_burl['url'] }}" target="_blank" class="no-underline outline-none">
            <button class="block w-auto mx-auto mt-12 py-3 px-8 border border-quaternary bg-transparent uppercase text-sm text-primary outline-none font-medium">{{ $tabs->one_btxt }}</button> 
        </a>
        </div>
        <div class="lg:w-2/3 p-8 lg:p-16">
        {!! $tabs->two_r !!}
        </div>
    </div>
    <div id="tab-3" class="lg:flex bg-tertiary lg:text-2xl leading-normal text-primary">
        <div class="lg:w-1/3 p-8 lg:p-16">
        {!! $tabs->three_l !!}
        <a href="{{ $tabs->three_burl['url'] }}" target="_blank" class="no-underline outline-none">
            <button class="block w-auto mx-auto mt-12 py-3 px-8 border border-quaternary bg-transparent uppercase text-sm text-primary outline-none font-medium">{{ $tabs->one_btxt }}</button> 
        </a>
        </div>
        <div class="lg:w-2/3 p-8 lg:p-16">
        {!! $tabs->three_r !!}
        </div>
    </div>
</div>