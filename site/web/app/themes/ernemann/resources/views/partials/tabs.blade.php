
<section class="lg:m-16 mt-0">
    <div class="tabs">
        <input type="radio" name="tabs" id="tabone" checked="checked">
        <label for="tabone" class="py-4 lg:py-12 no-underline uppercase text-secondary text-sm lg:text-2xl font-bold cursor-pointer text-center">
            {{ $tabs->one_title }}
            <div class="icon"></div>
        </label>
        <div class="tab bg-tertiary lg:text-2xl leading-normal text-primary">
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
    
        <input type="radio" name="tabs" id="tabtwo">
        <label for="tabtwo" class="py-4 lg:py-12 no-underline uppercase text-secondary text-sm lg:text-2xl font-bold cursor-pointer text-center">
            {{ $tabs->two_title }}
            <div class="icon"></div>
        </label>
        <div class="tab bg-tertiary lg:text-2xl leading-normal text-primary">
            <div class="item-content lg:flex">
                <div class="lg:w-1/3 p-8 lg:p-16 item-content">
                    {!! $tabs->two_l !!}
                    <a href="{{ $tabs->two_burl['url'] }}" target="_blank" class="no-underline outline-none">
                        <button class="block w-auto mx-auto mt-12 py-3 px-8 border border-quaternary bg-transparent uppercase text-sm text-primary outline-none font-medium">{{ $tabs->two_btxt }}</button> 
                    </a>
                    </div>
                    <div class="lg:w-2/3 p-8 lg:p-16">
                    {!! $tabs->two_r !!} 
                </div>
            </div>
        </div>
    
        <input type="radio" name="tabs" id="tabthree">
        <label for="tabthree" class="py-4 lg:py-12 no-underline uppercase text-secondary text-sm lg:text-2xl font-bold cursor-pointer text-center">
            {{ $tabs->three_title }}
            <div class="icon"></div>
        </label>
        <div class="tab bg-tertiary lg:text-2xl leading-normal text-primary">
            <div class="item-content lg:flex">
                <div class="lg:w-1/3 p-8 lg:p-16 item-content">
                    {!! $tabs->three_l !!}
                    <a href="{{ $tabs->three_burl['url'] }}" target="_blank" class="no-underline outline-none">
                        <button class="block w-auto mx-auto mt-12 py-3 px-8 border border-quaternary bg-transparent uppercase text-sm text-primary outline-none font-medium">{{ $tabs->three_btxt }}</button> 
                    </a>
                    </div>
                    <div class="lg:w-2/3 p-8 lg:p-16">
                    {!! $tabs->three_r !!} 
                </div>
            </div>
        </div>
    </div>
</section>