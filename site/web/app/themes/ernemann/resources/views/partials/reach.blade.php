<div class="mt-0 py-0 w-screen h-full">
    <div class="flex">
        <div class="m-8 lg:m-16 p-8 md:p-16 border border-quaternary text-center text-primary">
            <h2 class="uppercase text-xl lg:text-3xl mb-6">{{ $reach->heading }}</h2>
            <p class="lg:mx-48 text-md md:text-2xl mb-8 lg:mx-64 leading-normal">{{ $reach->content }}</p>
        <div class="py-2 px-4 mb-8">
            <img data-src="{{ $reach->logo['url'] }}" alt="{{ $reach->logo['alt'] }}" class="lozad h-16">
        </div>
            <a href="{{ $reach->btnpdf['url'] }}" target="_blank">
                <button class="bg-white py-3 px-8 border border-quaternary uppercase text-lg">{{ $reach->btntxt }}</button>
            </a>
        </div>
    </div>
</div>