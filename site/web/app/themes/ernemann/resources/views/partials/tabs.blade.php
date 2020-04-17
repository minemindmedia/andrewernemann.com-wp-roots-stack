<section class="lg:m-16 mt-0">

    <ul class="tabs flex text-center hidden">
        <li class="active w-1/3" rel="tab1">
            <div class="py-4 lg:py-12 no-underline uppercase text-secondary text-sm lg:text-2xl font-bold cursor-pointer">
                {{ $tabs->one_title }}
                <div class="icon"></div>
            </div>
        </li>
        <li class="w-1/3" rel="tab2">
            <div class="py-4 lg:py-12 no-underline uppercase text-secondary text-sm lg:text-2xl font-bold cursor-pointer">
                {{ $tabs->two_title }}
                <div class="icon"></div>
            </div>
        </li>
        <li class="w-1/3" rel="tab3">
            <div class="py-4 lg:py-12 no-underline uppercase text-secondary text-sm lg:text-2xl font-bold cursor-pointer">
                {{ $tabs->three_title }}
                <div class="icon"></div>
            </div>
        </li>
    </ul>

    <div class="tab_container">
        
        <h3 class="d_active tab_drawer_heading" rel="tab1">
            {{ $tabs->one_title }}
            <div class="icon"></div>
        </h3>

        <div id="tab1" class="tab_content lg:flex bg-tertiary lg:text-2xl leading-normal text-primary">
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
        </div>

        
        <h3 class="tab_drawer_heading" rel="tab2">
            {{ $tabs->two_title }}
            <div class="icon"></div>
        </h3>

        <div id="tab2" class="tab_content lg:flex bg-tertiary lg:text-2xl leading-normal text-primary">
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
        </div>

        
        <h3 class="tab_drawer_heading" rel="tab3">
            {{ $tabs->three_title }}
            <div class="icon"></div>
        </h3>

        <div id="tab3" class="tab_content lg:flex bg-tertiary lg:text-2xl leading-normal text-primary">
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
        </div>

    </div>

</section>