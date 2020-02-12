<footer class=" pt-48 pb-16 bg-primary">
  <div class="text-center">
    <p class="text-3xl text-white uppercase font-bold">{{ $work_with_us->heading }}</p>
    <p class="text-white text-2xl leading-normal mt-4">{{ $work_with_us->subheading }}</p>
    <p class="text-white text-2xl leading-normal mt-4 w-2/5 mx-auto">{{ $work_with_us->content }}</p>
    <a href="">
      <button class="py-3 px-8 mt-16 border border-white hover:border-transparent uppercase text-lg text-white">Contact us</button>
    </a>
  </div>
  <div class="mt-48">
    <div class="relative w-full">
      <div class="w-80 mx-auto">
        <img src="{{ $footer_logos->l1['url'] }}" alt="{{ $footer_logos->l1['alt'] }}" class="p-4 border border-white mb-8">
        <img src="{{ $footer_logos->l2['url'] }}" alt="{{ $footer_logos->l2['alt'] }}">
      </div>
      <div class="absolute text-white" style="right:12rem; top:0;">
        <p class="text-3xl mb-6">{{ $contact_details->phone }}</p>
        <a href="{{ $contact_details->email }}" class="block text-white uppercase no-underline text-3xl mb-6">Send an email</a>
        <p class="text-xl mb-6">{!! $contact_details->address !!}</p>
        <p class="text-lg">{!! $contact_details->copyright !!}</p>
      </div>
    </div>
    <div class="mt-16 mx-48 ">
      <p class="text-white opacity-25 text-lg">{{ $fine_print->content }}</p>
    </div>
  </div>
</footer>
